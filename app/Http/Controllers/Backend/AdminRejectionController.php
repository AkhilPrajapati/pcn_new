<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Rejection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class AdminRejectionController extends Controller
{
    public function index()
    {
        $media = Media::where('status', 'rejected')->orderBy('domain', 'ASC')->get();
        $rejection = Rejection::all();
        return view('backend.rejection.index', compact('media', 'rejection'));
    }
    public function create($id)
    {
        $media = Media::find($id);
        if ($media == null)
        {
            return redirect(route('admin_media_index'))->with(flash_warning());
        }
        elseif($media->status == "approved")
        {
            return redirect(route('admin_media_index'))->with(flash_warning());
        }
        else
        {
            return view('backend.rejection.create', compact('media'));
        }
    }


    public function store(Request $request)
    {
        $counter = Count($request->reason);

        for($i=0; $i<$counter; $i++)
        {
            $varData = new Rejection();
            $varData->user_id = Auth::user()->id;
            $varData->media_id = $request->media_id;
            $varData->reason = $request->reason[$i];
            $varData->save();
        }
        return redirect(route('admin_media_index'));
    }
    public function delete($id)
    {
        $data = Rejection::find($id);
        $data->delete();
        return redirect(route('admin_rejection_index'));
    }


}
