<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use Illuminate\Http\Request;

class AdminEditorController extends Controller
{
    public function index()
    {
        $editor = Editor::latest()->get();
        return view('backend.editor.index', compact('editor'));
    }
    public function edit($id)
    {
        $editor = Editor::find($id);
        if($editor != null)
        {
            return view('backend.editor.edit', compact('editor'));
        }
        else
        {
            return redirect(route('admin_editor_index'));
        }
    }


    public function update(Request $request, $id)
    {
        $data = Editor::find($id);
        $data->status  = $request->status;
        $data->activity = $request->activity;
        $data->appointment_date = $request->appointment_date;
        $data->retirement_date = $request->retirement_date;
        $data->update();
        return redirect(route('admin_editor_index'));
    }

    public function show($id)
    {
        $editor = Editor::find($id);
        if($editor != null)
        {
            return view('backend.editor.show', compact('editor'));
        }
        else
        {
            return redirect(route('admin_editor_index'));
        }
    }
}
