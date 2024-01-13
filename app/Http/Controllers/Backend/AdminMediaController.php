<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Rejection;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMediaController extends Controller
{
 
    public function show($id)
    {
        $media = Media::find($id);
        $staff = Staff::where('media_id', $media->id)->orderBy('name', 'asc')->get();
        return view('backend.media.show', compact('media', 'staff'));
    }
   
    public function index()
    {
        $media_data = Media::orderBy('domain', 'ASC')->get();
        return view('backend.media.index', compact('media_data'));
    }
    public function approve($id)
    {
        $media = Media::find($id);
        if($media == null)
        {
            return redirect(route('admin_media_index'));
        }
        elseif($media->status == "approved")
        {
            return redirect(route('admin_media_index'));
        }
        else
        {
            return view('backend.media.approve', compact('media'));
        }


    }
    public function approve_update(Request $request, $id)
    {
        
        $media = Media::find($id);

        if($request->status == "approved")
        {
            $media->status = "approved";
            $media->update();
            return redirect(route('admin_media_index'))->with(flash_approved());            
        }
        elseif($request->status == "rejected")
        {
            // MEDIA TABLE
            $media->status = "rejected";
            $media->update();

            // REJECTION TABLE
            $counter = Count($request->reason);

            for($i=0; $i<$counter; $i++)
            {
                $varData = new Rejection();
                $varData->media_id = $request->media_id;
                $varData->reason = $request->reason[$i];
                $varData->save();
            }
            return redirect(route('admin_media_index'))->with(flash_rejected());
        }
    }
}
