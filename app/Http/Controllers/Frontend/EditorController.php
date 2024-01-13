<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class EditorController extends Controller
{
    public function create()
    {
        $media = Media::where('user_id', Auth::user()->id)->get();
        return view('frontend.editor.create', compact('media'));
    }
    public function store(Request $request)
    {
        $data = new Editor();
        $data->media_id = $request->media_id;
        $data->user_id = Auth::user()->id;

        $data->status  = "pending";
        $data->activity = "active";

        $data->name = $request->name;
        $data->nepali_name = $request->nepali_name;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->citizen_number = $request->citizen_number;
        $data->citizen_district = $request->citizen_district;
        $data->contact = $request->contact;
        $data->email = $request->email;
        $data->appointment_date = $request->appointment_date;
        $data->retirement_date = $request->retirement_date;

        $path = 'myuploads/editor';

        imagehelper($request, $data, 'photo', $path);
        imagehelper($request, $data, 'citizenship', $path);

        imagehelper($request, $data, 'see_certificate', $path);
        imagehelper($request, $data, 'see_marksheet', $path);
        imagehelper($request, $data, 'see_character', $path);

        imagehelper($request, $data, 'slc_certificate', $path);
        imagehelper($request, $data, 'slc_marksheet', $path);
        imagehelper($request, $data, 'slc_character', $path);

        imagehelper($request, $data, 'bachlor_certificate', $path);
        imagehelper($request, $data, 'bachlor_marksheet', $path);
        imagehelper($request, $data, 'bachlor_character', $path);

        $data->save();
        return redirect(route('staff_index'));
    }
    public function edit($id)
    {
        $editor = Editor::find($id);
        $media = Media::where('id', Auth::user()->id)->get();
        if($editor != null)
        {
            if($editor->user_id == Auth::user()->id)
            {
                if($editor->status == "pending")
                {
                    return view('frontend.editor.edit', compact('editor', 'media'));
                }
                else
                {
                    return redirect(route('staff_index'));
                }
            }
            else
            {
                return redirect(route('staff_index'));
            }   
        }
        else
        {
            return redirect(route('staff_index'));
        }
    }
    public function update(Request $request, $id)
    {
        $data = Editor::find($id);

        $data->status  = "pending";
        $data->activity = "active";

        $data->name = $request->name;
        $data->nepali_name = $request->nepali_name;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->citizen_number = $request->citizen_number;
        $data->citizen_district = $request->citizen_district;
        $data->contact = $request->contact;
        $data->email = $request->email;
        $data->appointment_date = $request->appointment_date;
        $data->retirement_date = $request->retirement_date;

        $path = 'myuploads/editor';

        imagehelper($request, $data, 'photo', $path);
        imagehelper($request, $data, 'citizenship', $path);

        imagehelper($request, $data, 'see_certificate', $path);
        imagehelper($request, $data, 'see_marksheet', $path);
        imagehelper($request, $data, 'see_character', $path);

        imagehelper($request, $data, 'slc_certificate', $path);
        imagehelper($request, $data, 'slc_marksheet', $path);
        imagehelper($request, $data, 'slc_character', $path);

        imagehelper($request, $data, 'bachlor_certificate', $path);
        imagehelper($request, $data, 'bachlor_marksheet', $path);
        imagehelper($request, $data, 'bachlor_character', $path);

        $data->update();
        return redirect(route('staff_index'));
    }
    public function show($id)
    {
        $editor = Editor::find($id);
        if($editor != null)
        {
            if($editor->user_id == Auth::user()->id)
            {
                return view('frontend.editor.show', compact('editor'));
              
            }
            else
            {
                return redirect(route('staff_index'));
            }   
        }
        else
        {
            return redirect(route('staff_index'));
        }
        
    }
}
