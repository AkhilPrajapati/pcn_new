<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FiscalYear;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Renew;
use Illuminate\Support\Facades\Auth;

class RenewController extends Controller
{
    public function edit($id)
    {
        $media = Media::find($id);
        $renew = Renew::find($id);
        $fiscal_year = FiscalYear::all();

        if($renew == null)
        {
            return redirect(route('renew_index'))->with(flash_warning());
        }
        elseif($renew->user_id != Auth::user()->id)
        {
            return redirect(route('renew_index'))->with(flash_warning());
        }
        elseif($renew->status != "approved")
        {
            return view('frontend.renew.edit', compact('renew', 'media', 'fiscal_year'));
        }
        else
        {
            return redirect(route('renew_index'))->with(flash_warning());
        }
    }
    public function update(Request $request, $id)
    {

        // FOR MEDIA TABLE
        $media_id_new = $request->media_id;
        $media = Media::find($media_id_new);
        $media->renew = "pending";
        $media->update();

        //FOR RENEW TABLE
        $renew_data = Renew::find($id);

        $renew_data->fiscal_year = $request->fiscal_year;
        $renew_data->remark = $request->remark;
        $renew_data->status = "pending";
        $renew_data->rejection_reason = "";
    
        $path = 'myuploads/renew';
        imagehelper($request, $renew_data, 'application', $path);
        imagehelper($request, $renew_data, 'audit_report', $path);
        imagehelper($request, $renew_data, 'company_renewal', $path);
        imagehelper($request, $renew_data, 'minute', $path);
        imagehelper($request, $renew_data, 'payment_voucher', $path);
        imagehelper($request, $renew_data, 'tax_clearance', $path);

        $renew_data->update();
        return redirect(route('renew_index'))->with(flash_updated());

    }








    
    public function index()
    {
        $media_data = Media::where('user_id', Auth::user()->id)->where('renew', 'no')->get();
        $renew_data = Renew::where('user_id', Auth::user()->id)->latest()->get();
        return view('frontend.renew.index', compact('media_data', 'renew_data'));
    }
    public function create($id)
    {
        $media = Media::find($id);
        $fiscal_year = FiscalYear::all();
        if($media == null)
        {
            return redirect(route('renew_index'))->with(flash_warning());
        }
        elseif($media->user_id != Auth::user()->id)
        {
            return redirect(route('renew_index'))->with(flash_warning());
        }
        elseif($media->renew != "no")
        {
            return redirect(route('renew_index'))->with(flash_warning());
        }
        else
        {
            return view('frontend.renew.create', compact('media', 'fiscal_year'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'application'=>['required'],
            'audit_report'=>['required'],
            'company_renewal'=>['required'],
            'fiscal_year'=>['required'],
            'from'=>[],
            'media_id'=>[],
            'minute'=>['required'],
            'payment_voucher'=>['required'],
            'remark'=>[],
            'renewed_on'=>[],
            'renewed_by'=>[],
            'status'=>[],
            'tax_clearance'=>['required'],
            'to'=>[],
        ]);

        // FOR MEDIA TABLE
        $media_id_new = $request->media_id;
        $media = Media::find($media_id_new);
        $media->renew = "pending";
        $media->update();

        //FOR RENEW TABLE
        $renew_data = new Renew();
        $renew_data->media_id = $request->media_id;
        $renew_data->user_id = Auth::user()->id;
        $renew_data->fiscal_year = $request->fiscal_year;
        $renew_data->remark = $request->remark;
        $renew_data->status = "pending";
      
        $path = 'myuploads/renew';
        imagehelper($request, $renew_data, 'application', $path);
        imagehelper($request, $renew_data, 'audit_report', $path);
        imagehelper($request, $renew_data, 'company_renewal', $path);
        imagehelper($request, $renew_data, 'minute', $path);
        imagehelper($request, $renew_data, 'payment_voucher', $path);
        imagehelper($request, $renew_data, 'tax_clearance', $path);

        $renew_data->save();
        return redirect(route('renew_index'))->with(flash_added());
    }
   



    
}
