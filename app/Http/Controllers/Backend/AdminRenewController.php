<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Renew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRenewController extends Controller
{
    public function update_rejection(Request $request, $id)
    {
        $request->validate([
            'rejection_reason'=>['required']
        ]);
        $renew = Renew::find($id);
        $renew->rejection_reason = $request->rejection_reason;
        $renew->status = 'rejected';
        $renew->update();
        return redirect(route('admin_renew_index'))->with(flash_updated());
    }
    public function edit_approve($id)
    {
        $renew = Renew::find($id);
        return view('backend.renew.edit_approve', compact('renew'));
    }
    public function update_approve(Request $request, $id)
    {
        $request->validate([
            'from'=>['required'],
            'to'=>['required']
        ]);

        $var_from = $request->from;
        $var_to = $request->to;
        $var_renewed_on = date('Y-m-d');
        $var_renewed_by = Auth::user()->name;
       
        // FOR MEDIA TABLE
        $new_media_id = $request->media_id;
        $media = Media::find($new_media_id);
        $media->renew = "yes";
        $media->renew_upto = $var_to;
        $media->update();

        // FOR RENEW TABLE
        $renew = Renew::find($id);
        $renew->from = $var_from;
        $renew->to = $var_to;
        $renew->status = "approved";
        $renew->renewed_on = $var_renewed_on;
        $renew->renewed_by = $var_renewed_by;
        $renew->update();
        return redirect(route('admin_renew_index'))->with(flash_updated());
    }

    public function edit_approve_update()
    {
        return view('backend.renew.edit_approve');
    }
    public function index()
    {
        $approved_renew = Renew::where('status', 'approved')->get();
        $pending_renew = Renew::where('status', 'pending')->get();
        return view('backend.renew.index', compact('approved_renew', 'pending_renew'));
    }
    public function update_status($id)
    {
        $renew = Renew::find($id);
        // $renew->status = ""
        $renew->update();
        return redirect(route('admin_renew_index'))->with(flash_updated());
    }
    public function edit($id)
    {
        return view('backend.renew.edit');

        $media = Media::find($id);
        if($media == null)
        {
            return redirect(route('admin_renew_index'))->with(flash_warning());
        }
        else
        {
            $media->renew = 'yes';
            $media->update();
            return redirect(route('admin_renew_index'))->with(flash_updated());    
        }
    }

   
 
}
