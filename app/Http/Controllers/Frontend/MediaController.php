<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Editor;
use App\Models\FiscalYear;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Media;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Ward;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class MediaController extends Controller
{
    public function show($id)
    {
        $media = Media::find($id);
        if($media == null)
        {
            return redirect(route('media_index'));
        }
        elseif($media->user_id == Auth::user()->id)
        {
            return view('frontend.media.show', compact('media'));
        }
        else
        {
            return redirect(route('media_index'));
        }
    }
   
    public function index()
    {
        $media = Media::where('user_id', Auth::user()->id)->latest()->get();        
        return view('frontend.media.index', compact('media'));
    }
    public function create()
    {
        $data['provinces'] = Province::get(['name', 'id']);
        $var_fiscal_year = FiscalYear::all();
        return view('frontend.media.create', $data, compact('var_fiscal_year'));
    }

    public function fetchDistrict(Request $request)
    {
        $data['districts'] = District::where('province_id', $request->province_id)->get(['name', 'id']);
        return response()->json($data);
    }
    public function fetchMunicipality(Request $request)
    {
        $data['municipalities'] = Municipality::where('district_id', $request->district_id)->get(['name', 'id']);
        return response()->json($data);
    }
    public function fetchWard(Request $request)
    {
        $data['wards'] = Ward::where('municipality_id', $request->municipality_id)->get(['name', 'id']);
        return response()->json($data);
    }




    public function store(Request $request)
    {
 
            $this->validate($request,
                [
            //         'bachlor_in_jmc'=>'required',
            //         'company' => 'required',
            //         'company_registration_number'=>'required | unique:media,company_registration_number',
            //         'company_pan_vat_number'=>'required | unique:media,company_pan_vat_number',
            //         'company_contact' => 'required | unique:media,company_contact',
            //         'company_email' => 'email | unique:media,company_email',
            //         'director' => 'required',
            //         'director_contact' => 'required | unique:media,director_contact',
            //         'director_email' => 'required | email | unique:media,director_email',
            //         'director_nepali' => 'required',
            //         'director_citizen_number' => 'required | unique:media,director_citizen_number',
            //         'director_citizen_district' => 'required',
            //         'doi_registration_number'=>'required | unique:media,doi_registration_number',
                    'domain' => 'required | unique:media,domain',
            //         'dprotocol'=> 'required',
            //         'editor' => 'required',
            //         'editor_email' => 'required | email | unique:media,editor_email',
            //         'editor_contact' => 'required | unique:media,editor_email',
            //         'editor_citizen_number' => 'required | unique:media,editor_citizen_number',
            //         'editor_citizen_district' => 'required',
            //         'editor_nepali' => 'required',
                    'is_black_listed' => 'required',
            //         'language' => 'required',
            //         'missed_document' => '',
                    'name_server1' => 'required',
                    'name_server2' => 'required',
            //         'redirection'=>'required',
            //         'registration_date'=>'required',
            //         'renew'=> 'required',
            //         'server_type' => 'required',
                ]
            );
    
            $media = new Media();
            $media->status = "pending";
            $media->user_id = Auth::user()->id;
            
            $new_domain = trimhelper($request, $media);

            $media->registration_date = date('Y-m-d');
            $media->dprotocol = $request->dprotocol;
            $media->domain_nepali = $request->domain_nepali;
            $media->name_server1 = $request->name_server1;
            $media->name_server2 = $request->name_server2;
            $media->server_type = $request->server_type;
            $media->redirection = $request->redirection;
            $media->company = $request->company;
            $media->company_pan_vat_number = $request->company_pan_vat_number;
            $media->company_registration_number = $request->company_registration_number;
            $media->company_contact = $request->company_contact;
            $media->company_email = $request->company_email;
            $media->doi_registration_number = $request->doi_registration_number;
            $media->director = $request->director;
            $media->director_gender = $request->director_gender;
            $media->director_nepali = $request->director_nepali;
            $media->director_citizen_district = $request->director_citizen_district;
            $media->director_citizen_number = $request->director_citizen_number;
            $media->director_contact = $request->director_contact;
            $media->director_email = $request->director_email;
            $media->editor = $request->editor;
            $media->editor_nepali = $request->editor_nepali;
            $media->editor_citizen_number = $request->editor_citizen_number;
            $media->editor_citizen_district = $request->editor_citizen_district;
            $media->editor_contact = $request->editor_contact;
            $media->editor_email = $request->editor_email;

            $media->province = $request->province;
            $media->district = $request->district;
            $media->municipality = $request->municipality;
            $media->ward = $request->ward;
            $media->tole = $request->tole;
            $media->link_youtube = $request->link_youtube;
            $media->link_facebook = $request->link_facebook;
            $media->link_twitter = $request->link_twitter;
            $media->language = $request->language;
            $media->fiscal_year = $request->fiscal_year;
            $media->editor_gender = $request->editor_gender;
            $media->bachlor_in_jmc = $request->bachlor_in_jmc;
            $media->old_domain = $request->old_domain;
            $media->old_company = $request->old_company;
            $media->old_editor = $request->old_editor;
            $media->domain_changed_date = $request->domain_changed_date;
            $media->company_changed_date = $request->company_changed_date;
            $media->editor_changed_date = $request->editor_changed_date;
            $media->is_black_listed = $request->is_black_listed;

            imagehelper($request, $media, 'application', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'black_listed_request_letter', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'company_registration_proof', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'decision', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'domain_detail', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'director_photo', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'director_citizenship', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'director_signature', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'editor_photo', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'editor_citizenship', 'myuploads/media/'.$new_domain);         
            imagehelper($request, $media, 'media_registration_proof', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'niyamawali', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'pan_vat_proof', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'payment_voucher', 'myuploads/media/'.$new_domain);
            imagehelper($request, $media, 'prabandh_patra', 'myuploads/media/'.$new_domain);

            $media->save();

            return redirect(route('media_index'))->with(flash_added());
    }
    public function edit($id)
    {
        $media = Media::find($id);
        $var_fiscal_year = FiscalYear::all();

        if($media == null)
        {
            return redirect(route('media_index'))->with(flash_warning());
        }
        elseif($media->user_id != Auth::user()->id)
        {
            return redirect(route('media_index'))->with(flash_warning());
        }
        elseif($media->status == "approved")
        {
            return redirect(route('media_index'))->with(flash_warning());
        }
        else
        {
            return view('frontend.media.edit', compact('media', 'var_fiscal_year'));
        }
    }
    public function update(Request $request, $id)
    {
        $media = Media::find($id);
       
        $new_domain = trimhelper($request, $media);

        // $media->registration_date = date('Y-m-d');
        $media->status = "pending";
        $media->dprotocol = $request->dprotocol;
        $media->domain_nepali = $request->domain_nepali;
        $media->name_server1 = $request->name_server1;
        $media->name_server2 = $request->name_server2;
        $media->server_type = $request->server_type;
        $media->redirection = $request->redirection;
        $media->company = $request->company;
        $media->company_pan_vat_number = $request->company_pan_vat_number;
        $media->company_registration_number = $request->company_registration_number;
        $media->company_contact = $request->company_contact;
        $media->company_email = $request->company_email;
        $media->doi_registration_number = $request->doi_registration_number;
        $media->director = $request->director;
        $media->director_gender = $request->director_gender;
        $media->director_nepali = $request->director_nepali;
        $media->director_citizen_district = $request->director_citizen_district;
        $media->director_citizen_number = $request->director_citizen_number;
        $media->director_contact = $request->director_contact;
        $media->director_email = $request->director_email;
        $media->editor = $request->editor;
        $media->editor_nepali = $request->editor_nepali;
        $media->editor_citizen_number = $request->editor_citizen_number;
        $media->editor_citizen_district = $request->editor_citizen_district;
        $media->editor_contact = $request->editor_contact;
        $media->editor_email = $request->editor_email;

        $media->province = $request->province;
        $media->district = $request->district;
        $media->municipality = $request->municipality;
        $media->ward = $request->ward;
        $media->tole = $request->tole;
        $media->link_youtube = $request->link_youtube;
        $media->link_facebook = $request->link_facebook;
        $media->link_twitter = $request->link_twitter;
        $media->language = $request->language;
        $media->fiscal_year = $request->fiscal_year;
        $media->editor_gender = $request->editor_gender;
        $media->bachlor_in_jmc = $request->bachlor_in_jmc;
        $media->old_domain = $request->old_domain;
        $media->old_company = $request->old_company;
        $media->old_editor = $request->old_editor;
        $media->domain_changed_date = $request->domain_changed_date;
        $media->company_changed_date = $request->company_changed_date;
        $media->editor_changed_date = $request->editor_changed_date;
        $media->is_black_listed = $request->is_black_listed;

        imagehelper($request, $media, 'application', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'black_listed_request_letter', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'company_registration_proof', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'decision', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'domain_detail', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'director_photo', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'director_citizenship', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'director_signature', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'editor_photo', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'editor_citizenship', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'media_registration_proof', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'niyamawali', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'pan_vat_proof', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'payment_voucher', 'myuploads/media/'.$new_domain);
        imagehelper($request, $media, 'prabandh_patra', 'myuploads/media/'.$new_domain);

        $media->update();
        return redirect(route('media_index'))->with(flash_updated());
    }

   
}
