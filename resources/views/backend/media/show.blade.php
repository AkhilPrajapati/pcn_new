<x-my-admin-app>
    <div class="container">
        <div class="card">
            <div class="card-header my-3">
                <h4>Details of <b>{{$media->domain}}</b></h4> 
            </div>
            <div class="card-body">
                <table class="table" border="1" style="background-color: ghostwhite">
                    <tr>
                        <th  width="30%">Attributes</th>
                        <th>Data Records</th>                        
                    </tr>
                    <tr>
                        <th>D-protocol</th>
                        <td>{{$media->dprotocol}}</td>
                    </tr>
                    <tr>
                        <th>Domain</th>
                        <td>{{$media->domain}}</td>
                    </tr>
                    <tr>
                        <th>NameServer-1</th>
                        <td>{{$media->name_server1}}</td>
                    </tr>
                    <tr>
                        <th>NameServer-2</th>
                        <td>{{$media->name_server2}}</td>
                    </tr>
                    <tr>
                        <th>Server Type</th>
                        <td>{{$media->server_type}}</td>
                    </tr>
                    <tr>
                        <th>Registration Date</th>
                        <td>{{$media->registration_date}}</td>
                    </tr>
                    <tr>
                        <th>doi_registration_number</th>
                        <td>{{$media->doi_registration_number}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$media->province}}, {{$media->district}}, {{$media->municipality}}, {{$media->ward}}, {{$media->tole}}</td>
                    </tr>
                    <tr>
                        <th>company</th><td>{{$media->company}}</td>
                    </tr>
                    <tr>
                        <th>company_pan_vat_number</th><td>{{$media->company_pan_vat_number}}</td>

                    </tr>
                    <tr>
                        <th>company_registration_number</th><td>{{$media->company_registration_number}}</td>

                    </tr>
                    <tr>
                        <th>company_contact</th><td>{{$media->company_contact}}</td>
                    
                    </tr>

                    <tr>
                        <th>company_email</th><td>{{$media->company_email}}</td>

                    </tr>
                    <tr>
                        <th>director</th><td>{{$media->director}}</td>

                    </tr>
                    <tr>
                        <th>director_nepali</th><td>{{$media->director_nepali}}</td>
                    </tr>
                    <tr>
                        <th>director_gender</th><td>{{$media->director_gender}}</td>

                    </tr>
                    <tr><th>director_citizen_number</th>
                        <td>{{$media->director_citizen_number}}</td>
                    </tr>

                    <tr>
                        <th>director_citizen_district</th>
                        <td>{{$media->director_citizen_district}}</td>

                    </tr>
                    <tr>
                        <th>director_contact</th>
                        <td>{{$media->director_contact}}</td>
                    </tr>
                    <tr>
                        <th>director_email</th>
                        <td>{{$media->director_email}}</td>                   
                    </tr>
                    <tr>
                        <th>editor</th><td>{{$media->editor}}</td>

                    </tr>
                    <tr>
                        <th>editor_nepali</th><td>{{$media->editor_nepali}}</td>

                    </tr>
                    <tr>
                        <th>editor_gender</th><td>{{$media->editor_gender}}</td>

                    </tr>
                    <tr>
                        <th>editor_citizen_number</th><td>{{$media->editor_citizen_number}}</td>
                    </tr>
                    <tr>
                        <th>editor_citizen_district</th><td>{{$media->editor_citizen_district}}</td>
                    </tr>
                    <tr>
                        <th>editor_contact</th><td>{{$media->editor_contact}}</td>
                    </tr>
                    <tr>
                        <th>editor_email</th><td>{{$media->editor_email}}</td>
                    </tr>
                    <tr>
                        <th>language</th><td>{{$media->language}}</td>
                    </tr>
                    <tr>
                        <th>fiscal_year</th><td>{{$media->fiscal_year}}</td>
                    </tr>
                    <tr>
                        <th>bachlor_in_jmc</th><td>{{$media->bachlor_in_jmc}}</td>
                    </tr>
                    <tr>
                        <th>is_black_listed</th><td>{{$media->is_black_listed}}</td>

                    </tr>
                    <tr>
                        <th>Old Domain</th><td>{{$media->old_domain}}: {{$media->domain_changed_date}}</td>
                    </tr>
                    <tr>
                        <th>Old Company</th><td>{{$media->old_company}}: {{$media->company_changed_date}}</td>

                    </tr>
                    <tr>
                        <th>Old Editor</th><td>{{$media->old_editor}}: {{$media->editor_changed_date}}</td>
                    </tr>
                    <tr>
                        <th>Links</th><td>{{$media->link_facebook}}, {{$media->link_youtube}}, {{$media->link_twitter}}</td>
                    </tr>

                    @php
                        $image = "https://luminfire.com/wp-content/uploads/2023/07/Blue-Laravel-Icon.png";
                    @endphp

                    <tr>
                        <th>application</th>
                        <td>
                            <img src="{{(!empty($media->application))?url("/myuploads/media/$media->domain/$media->application"):url($image)}}" height="100" width="100">
                        </td>
                    </tr>
                    <tr>
                        <th>black_listed_request_letter</th>
                        <td>
                            <img src="{{(!empty($media->black_listed_request_letter))?url("/myuploads/media/$media->domain/$media->black_listed_request_letter"):url($image)}}" height="100" width="100">
                        </td>
                    </tr>
                    <tr>
                        <th>company_registration_proof</th>
                        <td>
                            <img src="{{(!empty($media->company_registration_proof))?url("/myuploads/media/$media->domain/$media->company_registration_proof"):url($image)}}" height="100" width="100">
                        </td>
                    </tr>
                    <tr>
                        <th>decision</th>
                        <td>
                            <img src="{{(!empty($media->decision))?url("/myuploads/media/$media->domain/$media->decision"):url($image)}}" height="100" width="100">
                        </td>

                    </tr> 
                    <tr>
                        <th>director_photo</th>
                        <td>
                            <img src="{{(!empty($media->director_photo))?url("/myuploads/media/$media->domain/$media->director_photo"):url($image)}}" height="100" width="100">
                        </td>

                    </tr>
                    <tr>
                        <th>director_signature</th>
                        <td><img src="{{(!empty($media->director_signature))?url("/myuploads/media/$media->domain/$media->director_signature"):url($image)}}" height="100" width="100"></td>
                    </tr>  
                    <tr>
                        <th>domain_detail</th>
                        <td>
                            <img src="{{(!empty($media->domain_detail))?url("/myuploads/media/$media->domain/$media->domain_detail"):url($image)}}" height="100" width="100">
                        </td>

                    </tr>  
                    <tr>
                        <th>editor_photo</th>
                        <td>
                            <img src="{{(!empty($media->editor_photo))?url("/myuploads/media/$media->domain/$media->editor_photo"):url($image)}}" height="100" width="100">
                        </td>

                    </tr>                
                    <tr>
                        <th>editor_citizenship</th>
                        <td>
                            <img src="{{(!empty($media->editor_citizenship))?url("/myuploads/media/$media->domain/$media->editor_citizenship"):url($image)}}" height="100" width="100">
                        </td>
                    </tr>                    
                    <tr>
                        <th>media_registration_proof</th>
                        <td>
                            <img src="{{(!empty($media->media_registration_proof))?url("/myuploads/media/$media->domain/$media->media_registration_proof"):url($image)}}" height="100" width="100">
                        </td>
                    </tr>
                    <tr>
                        <th>niyamawali</th>
                        <td><img src="{{(!empty($media->niyamawali))?url("/myuploads/media/$media->domain/$media->niyamawali"):url($image)}}" height="100" width="100"></td>
                    </tr>
                    <tr>
                        <th>pan_vat_proof</th>
                        <td><img src="{{(!empty($media->pan_vat_proof))?url("/myuploads/media/$media->domain/$media->pan_vat_proof"):url($image)}}" height="100" width="100"></td>
                    </tr>
                    <tr>
                        <th>prabandh_patra</th>
                        <td><img src="{{(!empty($media->prabandh_patra))?url("/myuploads/media/$media->domain/$media->prabandh_patra"):url($image)}}" height="100" width="100"></td>
                    </tr>
                    <tr>
                        <th>payment_voucher</th>
                        <td><img src="{{(!empty($media->payment_voucher))?url("/myuploads/media/$media->domain/$media->payment_voucher"):url($image)}}" height="100" width="100"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-my-admin-app>