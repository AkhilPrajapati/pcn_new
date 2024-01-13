<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chairman;
use App\Models\Editor;
use App\Models\Media;
use App\Models\Staff;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function index()
    {
        $media = Media::where('user_id', Auth::user()->id)->get();
        $staff = Staff::latest()->get();
        $editor = Editor::all();
        $active_editor = Editor::where('activity', 'active')->get();
        $inactive_editor = Editor::where('activity', 'inactive')->get();
        $chairman = Chairman::all();
        $active_chairman = Chairman::where('activity', 'active')->get();
        $inactive_chairman = Chairman::where('activity', 'inactive')->get();
        return view('frontend.staff.index', compact('media', 'staff', 'editor', 'active_editor', 'inactive_editor', 'chairman', 'active_chairman', 'inactive_chairman'));
    }
    
    public function create()
    {
        $media = Media::where('user_id', Auth::user()->id)->get();        
        return view('frontend.staff.create', compact('media'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'post' => ['required'],
            'gender' => ['required'],
            'salary' => ['required'],
        ]);

        $staff = new Staff();
        $staff->media_id = $request->media_id;
        $staff->user_id = Auth::user()->id;
        $staff->status = "approved";
        $staff->name = $request->name;
        $staff->post = $request->post;
        $staff->gender = $request->gender;
        $staff->salary = $request->salary;
        $staff->remark = $request->remark;
        $staff->press_pass_number = $request->press_pass_number;

        $staff->save();

        return redirect(route('staff_index'))->with(flash_added());
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        $media = Media::where('user_id', Auth::user()->id)->get();        
        return view('frontend.staff.edit', compact('staff', 'media'));
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->media_id = $request->media_id;
        
        $staff->status = "approved";
        $staff->name = $request->name;
        $staff->post = $request->post;
        $staff->gender = $request->gender;
        $staff->salary = $request->salary;
        $staff->remark = $request->remark;
        $staff->press_pass_number = $request->press_pass_number;
        $staff->update();
        return redirect(route('staff_index'));
    }

    public function delete(string $id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect(route('staff_index'));
    }
}

