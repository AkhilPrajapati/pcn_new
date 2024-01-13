<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chairman;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChairmanController extends Controller
{
    public function create()
    {
        $media = Media::where('user_id', Auth::user()->id)->get();        
        return view('frontend.chairman.create', compact('media'));
    }

    public function store(Request $request)
    {
        $data = new Chairman();
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

        $path = 'myuploads/chairman';

        imagehelper($request, $data, 'photo', $path);
        imagehelper($request, $data, 'citizenship', $path);

        $data->save();
        return redirect(route('staff_index'))->with(flash_added());
    }
    public function edit($id)
    {
        $chairman = Chairman::find($id);
        if($chairman != null)
        {
            if($chairman->user_id == Auth::user()->id)
            {
                if($chairman->status == "pending")
                {
                    return view('frontend.chairman.edit', compact('chairman'));
                }
                else
                {
                    return redirect(route('staff_index'));
                }
            }
        }
        else
        {
            return redirect(route('staff_index'));
        }
       
    }
    public function update(Request $request, $id)
    {
        $data = Chairman::find($id);
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
        $path = 'myuploads/chairman';
        imagehelper($request, $data, 'photo', $path);
        imagehelper($request, $data, 'citizenship', $path);
        $data->update();
        return redirect(route('staff_index'));
    }

    // SHOW FUNCTION
    public function show($id)
    {
        $chairman = Chairman::find($id);
      
        if($chairman != null)
        {
            if($chairman->user_id == Auth::user()->id)
            {
                return view('frontend.chairman.show', compact('media'));
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
