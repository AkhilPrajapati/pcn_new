<x-my-user-dashboard>

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Media Details</h3>               
                </div>
                <div class="card-body">
                    <form action="{{route('media_update', [$media->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="dprotocol">Media</span></label>
                                    <select name="dprotocol" id="dprotocol" class="form-control" value="">
                                        <option value="HTTP" {{$media->dprotocol == 'HTTP' ? 'selected' : ''}}>HTTP</option>
                                        <option value="HTTPS"{{$media->dprotocol == 'HTTPS' ? 'selected' : ''}}>HTTPS</option>
                                    </select>
                                    <span class="text-danger">@error('dprotocol'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain">Domain *</label>
                                    <input type="text" id="domain" name="domain" class="form-control" value="{{$media->domain}}">
                                    <span class="text-danger">@error('domain'){{$message}}@enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain_nepali">Nepali Domain *</label>
                                    <input type="text" id="domain_nepali" name="domain_nepali" class="form-control" value="{{$media->domain_nepali}}">
                                    <span class="text-danger">@error('domain_nepali'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="name_server1">Name Server-1 *</label>
                                    <input type="text" id="name_server1" name="name_server1" class="form-control" value="{{$media->name_server1}}">
                                    <span class="text-danger">@error('name_server1'){{$message}}@enderror</span>
        
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="name_server2">Name Server-2 *</label>
                                    <input type="text" id="name_server2" name="name_server2" class="form-control" value="{{$media->name_server2}}">
                                    <span class="text-danger">@error('name_server2'){{$message}}@enderror</span>
        
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="server_type">Server Type *</label>
                                    <input type="text" id="server_type" name="server_type" class="form-control" value="{{$media->server_type}}">
                                    <span class="text-danger">@error('server_type'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="redirection">Redirection *</label>
                                    <input type="text" id="redirection" name="redirection" class="form-control" value="{{$media->redirection}}">
                                    <span class="text-danger">@error('redirection'){{$message}}@enderror</span>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="doi_registration_number">doi_registration_number *</label>
                                    <input type="text" id="doi_registration_number" name="doi_registration_number" class="form-control" value="{{$media->doi_registration_number}}">
                                    <span class="text-danger">@error('doi_registration_number'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="province">Province</span></label>
                                    <select name="province" id="province" class="form-control" value="{{$media->province}}">
                                        <option value="Bagmati">Bagmati</option>
                                        <option value="Koshi">Koshi</option>
                                        <option value="Lumbini">Lumbini</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="district">district</span></label>
                                    <select name="district" id="District" class="form-control" value="{{$media->district}}">
                                        <option value="Rupandehi">Rupandehi</option>
                                        <option value="Kathmandu">Kathmandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="municipality">Municipality</span></label>
                                    <select name="municipality" id="municipality" class="form-control" value="{{$media->municipality}}">
                                        <option value="Kathmandu">Kathmandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                        <option value="Lalitpur">Lalitpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="ward">Ward</span></label>
                                    <select name="ward" id="ward" class="form-control" value="{{$media->ward}}">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="tole">tole *</label>
                                    <input type="text" id="tole" name="tole" class="form-control" value="{{$media->tole}}">
                                    <span class="text-danger">@error('tole'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="language">Language *</label>
                                    <input type="text" id="language" name="language" class="form-control" value="{{$media->language}}">
                                    <span class="text-danger">@error('language'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="fiscal_year">Fiscal Year</span></label>
                                    <select name="fiscal_year" id="fiscal_year" class="form-control" value="{{old('fiscal_year')}}" required>

                                        <option value="">Choose Year</option>
                                        @foreach ($var_fiscal_year as $fiscal_year)
                                        <option value="{{$fiscal_year->fiscal_year}}" {{$media->fiscal_year == $fiscal_year->fiscal_year ? 'selected' : ''}}>{{$fiscal_year->fiscal_year}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('dprotocol'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="old_domain">old_domain *</label>
                                    <input type="text" id="old_domain" name="old_domain" class="form-control" value="{{$media->old_domain}}">
                                    <span class="text-danger">@error('old_domain'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain_changed_date">domain_changed_date *</label>
                                    <input type="date" id="domain_changed_date" name="domain_changed_date" class="form-control" value="{{$media->domain_changed_date}}">
                                    <span class="text-danger">@error('domain_changed_date'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="old_company">old_company *</label>
                                    <input type="text" id="old_company" name="old_company" class="form-control" value="{{$media->old_company}}">
                                    <span class="text-danger">@error('old_company'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_changed_date">company_changed_date *</label>
                                    <input type="date" id="company_changed_date" name="company_changed_date" class="form-control" value="{{$media->company_changed_date}}">
                                    <span class="text-danger">@error('company_changed_date'){{$message}}@enderror</span>
                                </div>
                            </div>              
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="old_editor">old_editor *</label>
                                    <input type="text" id="old_editor" name="old_editor" class="form-control" value="{{$media->old_editor}}">
                                    <span class="text-danger">@error('old_editor'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_changed_date">editor_changed_date *</label>
                                    <input type="date" id="editor_changed_date" name="editor_changed_date" class="form-control" value="{{$media->editor_changed_date}}">
                                    <span class="text-danger">@error('editor_changed_date'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="bachlor_in_jmc">Bachlor In JMC</label>
                                <div class="bfg mt-1">
                                    <input type="radio" name="bachlor_in_jmc" id="yes_bachlor_in_jmc" value="yes" {{$media->bachlor_in_jmc == 'yes'? 'checked':''}}>
                                    <label for="yes_bachlor_in_jmc">Yes</label>&nbsp;
                                    <input type="radio" name="bachlor_in_jmc" id="no_bachlor_in_jmc" value="no" {{$media->bachlor_in_jmc == 'no'? 'checked':''}}>
                                    <label for="no_bachlor_in_jmc">No</label>&nbsp;
                                    <span class="text-danger">@error('bachlor_in_jmc')<br>{{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="yes_black_listed">Is Blacklisted *</label>
                                <div class="bfg mt-1">
                                    <input type="radio" name="is_black_listed" id="yes_black_listed" value="yes"  {{$media->is_black_listed == 'yes'? 'checked':''}}>
                                    <label for="yes_black_listed">Yes</label>&nbsp;
                                    <input type="radio" name="is_black_listed" id="no_black_listed" value="no" {{$media->is_black_listed == 'no'? 'checked':''}}>
                                    <label for="no_black_listed">No</label>&nbsp;
                                    <span class="text-danger">@error('is_black_listed')<br>{{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company">Company</span></label>
                                    <input type="text" id="company" name="company" class="form-control" value="{{$media->company}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_pan_vat_number">Company PAN/VAT Number</span></label>
                                    <input type="text" id="company_pan_vat_number" name="company_pan_vat_number" class="form-control" value="{{$media->company_pan_vat_number}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_registration_number">Company Registration No.</span></label>
                                    <input type="text" id="company_registration_number" name="company_registration_number" class="form-control" value="{{$media->company_registration_number}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_contact">company_contact</span></label>
                                    <input type="tel" id="company_contact" name="company_contact" class="form-control" value="{{$media->company_contact}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_email">company_email</span></label>
                                    <input type="email" id="company_email" name="company_email" class="form-control" value="{{$media->company_email}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director">director</span></label>
                                    <input type="text" id="director" name="director" class="form-control" value="{{$media->director}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_nepali">director_nepali</span></label>
                                    <input type="text" id="director_nepali" name="director_nepali" class="form-control" value="{{$media->director_nepali}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_gender">director_gender</span></label>
                                    <input type="text" id="director_gender" name="director_gender" class="form-control" value="{{$media->director_gender}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_citizen_number">director_citizen_number</span></label>
                                    <input type="text" id="director_citizen_number" name="director_citizen_number" class="form-control" value="{{$media->director_citizen_number}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_citizen_district">director_citizen_district</span></label>
                                    <input type="text" id="director_citizen_district" name="director_citizen_district" class="form-control" value="{{$media->director_citizen_district}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_contact">director_contact</span></label>
                                    <input type="text" id="director_contact" name="director_contact" class="form-control" value="{{$media->director_contact}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_email">director_email</span></label>
                                    <input type="text" id="director_email" name="director_email" class="form-control" value="{{$media->director_email}}">
                                </div>
                            </div> 
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor">Editor</span></label>
                                    <input type="text" id="editor" name="editor" class="form-control" value="{{$media->editor}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_nepali">editor_nepali</span></label>
                                    <input type="text" id="editor_nepali" name="editor_nepali" class="form-control" value="{{$media->editor_nepali}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_gender">editor_gender</span></label>
                                    <input type="text" id="editor_gender" name="editor_gender" class="form-control" value="{{$media->editor_gender}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_citizen_number">editor_citizen_number</span></label>
                                    <input type="text" id="editor_citizen_number" name="editor_citizen_number" class="form-control" value="{{$media->editor_citizen_number}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_citizen_district">editor_citizen_district</span></label>
                                    <input type="text" id="editor_citizen_district" name="editor_citizen_district" class="form-control" value="{{$media->editor_citizen_district}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_contact">editor_contact</span></label>
                                    <input type="text" id="editor_contact" name="editor_contact" class="form-control" value="{{$media->editor_contact}}">
                                </div>
                            </div> 
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_email">editor_email</span></label>
                                    <input type="text" id="editor_email" name="editor_email" class="form-control" value="{{$media->editor_email}}">
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="link_youtube">link_youtube</span></label>
                                    <input type="text" id="link_youtube" name="link_youtube" class="form-control" value="{{$media->link_youtube}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="link_facebook">link_facebook</span></label>
                                    <input type="text" id="link_facebook" name="link_facebook" class="form-control" value="{{$media->link_facebook}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="link_twitter">link_twitter</span></label>
                                    <input type="text" id="link_twitter" name="link_twitter" class="form-control" value="{{$media->link_twitter}}">
                                </div>
                            </div>
                        </div>
                        @php
                        $image = "https://styles.redditmedia.com/t5_2uakt/styles/communityIcon_fmttas2xiy351.png";
                        @endphp
                         <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="application">application</label>
                                    <input type="file" id="application" name="application" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->application))?url("/myuploads/media/$media->domain/$media->application"):url($image)}}" alt="" height="80" width="100" id="show_application">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="black_listed_request_letter">black_listed_request_letter (if blacklisted)</label>
                                    <input type="file" id="black_listed_request_letter" name="black_listed_request_letter" class="form-control" value="{{old('black_listed_request_letter')}}">
                                    <span class="text-danger">@error('black_listed_request_letter'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->black_listed_request_letter))?url("/myuploads/media/$media->domain/$media->black_listed_request_letter"):url($image)}}" alt="" height="80" width="100" id="show_black_listed_request_letter">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_registration_proof">company_registration_proof</label>
                                    <input type="file" id="company_registration_proof" name="company_registration_proof" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->company_registration_proof))?url("/myuploads/media/$media->domain/$media->company_registration_proof"):url($image)}}" alt="" height="80" width="100" id="show_company_registration_proof">
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="decision">decision</label>
                                    <input type="file" id="decision" name="decision" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->decision))?url("/myuploads/media/$media->domain/$media->decision"):url($image)}}" alt="" height="80" width="100" id="show_decision">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain_detail">domain_detail</label>
                                    <input type="file" id="domain_detail" name="domain_detail" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->domain_detail))?url("/myuploads/media/$media->domain/$media->domain_detail"):url($image)}}" alt="" height="80" width="100" id="show_domain_detail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_photo">director_photo</label>
                                    <input type="file" id="director_photo" name="director_photo" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->director_photo))?url("/myuploads/media/$media->domain/$media->director_photo"):url($image)}}" alt="" height="80" width="100" id="show_director_photo">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_citizenship">director_citizenship</label>
                                    <input type="file" id="director_citizenship" name="director_citizenship" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->director_citizenship))?url("/myuploads/media/$media->domain/$media->director_citizenship"):url($image)}}" alt="" height="80" width="100" id="show_director_citizenship">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_signature">director_signature</label>
                                    <input type="file" id="director_signature" name="director_signature" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->director_signature))?url("/myuploads/media/$media->domain/$media->director_signature"):url($image)}}" alt="" height="80" width="100" id="show_director_signature">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_photo">editor_photo</label>
                                    <input type="file" id="editor_photo" name="editor_photo" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->editor_photo))?url("/myuploads/media/$media->domain/$media->editor_photo"):url($image)}}" alt="" height="80" width="100" id="show_editor_photo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="media_registration_proof">media_registration_proof</label>
                                    <input type="file" id="media_registration_proof" name="media_registration_proof" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->media_registration_proof))?url("/myuploads/media/$media->domain/$media->media_registration_proof"):url($image)}}" alt="" height="80" width="100" id="show_media_registration_proof">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_citizenship">editor_citizenship</label>
                                    <input type="file" id="editor_citizenship" name="editor_citizenship" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->editor_citizenship))?url("/myuploads/media/$media->domain/$media->editor_citizenship"):url($image)}}" alt="" height="80" width="100" id="show_editor_citizenship">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="niyamawali">niyamawali</label>
                                    <input type="file" id="niyamawali" name="niyamawali" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->niyamawali))?url("/myuploads/media/$media->domain/$media->niyamawali"):url($image)}}" alt="" height="80" width="100" id="show_niyamawali">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="pan_vat_proof">pan_vat_proof</label>
                                    <input type="file" id="pan_vat_proof" name="pan_vat_proof" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->pan_vat_proof))?url("/myuploads/media/$media->domain/$media->pan_vat_proof"):url($image)}}" alt="" height="80" width="100" id="show_pan_vat_proof">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="payment_voucher">payment_voucher</label>
                                    <input type="file" id="payment_voucher" name="payment_voucher" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->payment_voucher))?url("/myuploads/media/$media->domain/$media->payment_voucher"):url($image)}}" alt="" height="80" width="100" id="show_payment_voucher">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="prabandh_patra">prabandh_patra</label>
                                    <input type="file" id="prabandh_patra" name="prabandh_patra" class="form-control" value="null">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <img src="{{(!empty($media->prabandh_patra))?url("/myuploads/media/$media->domain/$media->prabandh_patra"):url($image)}}" alt="" height="80" width="100" id="show_prabandh_patra">
                                </div>
                            </div>
                        </div>
                       
                       
                       
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary my-3">Update Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#application').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_application').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#black_listed_request_letter').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_black_listed_request_letter').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#company_registration_proof').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_company_registration_proof').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#media_registration_proof').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_media_registration_proof').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#decision').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_decision').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#domain_detail').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_domain_detail').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#director_photo').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_director_photo').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#director_citizenship').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_director_citizenship').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#director_signature').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_director_signature').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#registration_proof').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_registration_proof').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#editor_photo').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_editor_photo').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#editor_citizenship').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_editor_citizenship').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#niyamawali').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_niyamawali').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#pan_vat_proof').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_pan_vat_proof').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#payment_voucher').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_payment_voucher').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#prabandh_patra').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_prabandh_patra').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#registration_proof').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_registration_proof').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#rejection_reason').change(function(e)
            {
                var reader = new FileReader();
                reader.onload = function(e)
                {
                    $('#show_rejection_reason').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    
</x-my-user-dashboard>



