<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Journalist;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalistController extends Controller
{

    public function index()
    {
        $data = Journalist::orderBy('name', 'asc')->get();
        return view('frontend.journalist.index', compact('data'));
    }

    public function create()
    {
        $media = Media::all();
        return view('frontend.journalist.create', compact('media'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'post' => ['required', 'string', 'max:255'],
        ]);
        $data = new Journalist();
        $data->name = $request->name;
        $data->post = $request->post;
        $data->press_pass_number = $request->press_pass_number;
        $data->media_id = $request->media_id;
        $data->save();
        return redirect(route('journalist'));
    }

    public function edit($id)
    {
        $data = Journalist::find($id);
        $media = Media::all();
        return view('frontend.journalist.edit', compact('data', 'media'));
    }

    public function update(Request $request,string $id)
    {
        $data = Journalist::find($id);
        $data->name = $request->name;
        $data->post = $request->post;
        $data->press_pass_number = $request->press_pass_number;
        $data->media_id = $request->media_id;
        $data->update();
        return redirect(route('journalist'));

    }

    public function destroy(string $id)
    {
        $data = Journalist::find($id);
        $data->delete();
        return redirect('/journalist');
    }
}

