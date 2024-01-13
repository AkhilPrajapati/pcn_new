<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class MyAuthController extends Controller
{
    public function register_create()
    {
        return view('frontend.auth.register_create');
    }

    public function register_store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'contact' => ['required', 'string', 'max:10'],
            'address' => ['string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'address' => "not mentioned",
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        Auth::login($user);
        return redirect('/')->with(flash_registered());
    }

    public function login_create()
    {
        return view('frontend.auth.login_create');
    }
    public function login_entry(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        $url = '';
        if($request->user()->role === 'admin')
        {
            $url = '/admin/dashboard';
        }
        elseif($request->user()->role === 'user')
        {
            $url = '/dashboard';
        }
        return redirect()->intended($url)->with(flash_login());
    }

    public function profile_edit(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.auth.profile_edit', compact('user'));
    }

    public function profile_update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->contact = $request->contact;    
        imagehelper($request, $user, 'photo',  "myuploads/user");
        $user->update();
        // return redirect(route('profile_edit'))->with(flash_update());
        return redirect(route('profile_edit'))->with(flash_updated());

    }

}
