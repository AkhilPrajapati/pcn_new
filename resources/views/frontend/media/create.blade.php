<x-my-user-dashboard>

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>Add Media Details</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('media_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="dprotocol">Media</span></label>
                                    <select name="dprotocol" id="dprotocol" class="form-control" value="{{old('dprotocol')}}">
                                        <option value="HTTP">HTTP</option>
                                        <option value="HTTPS">HTTPS</option>
                                    </select>
                                    <span class="text-danger">@error('dprotocol'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain">Domain *</label>
                                    <input type="text" id="domain" name="domain" class="form-control" value="{{old('domain')}}">
                                    <span class="text-danger">@error('domain'){{$message}}@enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain_nepali">Nepali Domain *</label>
                                    <input type="text" id="domain_nepali" name="domain_nepali" class="form-control" value="{{old('domain_nepali')}}">
                                    <span class="text-danger">@error('domain_nepali'){{$message}}@enderror</span>
        
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="name_server1">Name Server-1 *</label>
                                    <input type="text" id="name_server1" name="name_server1" class="form-control" value="{{old('name_server1')}}">
                                    <span class="text-danger">@error('name_server1'){{$message}}@enderror</span>
        
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="name_server2">Name Server-2 *</label>
                                    <input type="text" id="name_server2" name="name_server2" class="form-control" value="{{old('name_server2')}}">
                                    <span class="text-danger">@error('name_server2'){{$message}}@enderror</span>
        
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="server_type">Server Type *</label>
                                    <input type="text" id="server_type" name="server_type" class="form-control" value="{{old('server_type')}}">
                                    <span class="text-danger">@error('server_type'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="redirection">Redirection</label>
                                    <input type="text" id="redirection" name="redirection" class="form-control" value="{{old('redirection')}}">
                                    <span class="text-danger">@error('redirection'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="doi_registration_number">doi_registration_number *</label>
                                    <input type="text" id="doi_registration_number" name="doi_registration_number" class="form-control" value="{{old('doi_registration_number')}}">
                                    <span class="text-danger">@error('doi_registration_number'){{$message}}@enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="province">Province</span></label>
                                    <select name="province" id="province-dd" class="form-control" value="{{old('province')}}">
                                        <option value="">-- Select State --</option>
                                        @foreach ($provinces as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="district">District</span></label>
                                    <select name="district" id="district-dd" class="form-control" value="{{old('district')}}" required>
                                        <option value="">-- Select District --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="municipality">Municipality</span></label>
                                    <select name="municipality" id="municipality-dd" class="form-control" value="{{old('municipality')}}" required>
                                        <option value="">-- Select Municipality --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="ward">Ward *</span></label>
                                    <input type="text" id="ward" name="ward" class="form-control" value="{{old('ward')}}" required>
                                    <span class="text-danger">@error('ward'){{$message}}@enderror</span>
                                    {{-- <select name="ward" id="ward-dd" class="form-control" >
                                        <option value="">-- Select Ward --</option>
                                    </select> --}}
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="tole">Tole</label>
                                    <input type="text" id="tole" name="tole" class="form-control" value="{{old('tole')}}">
                                    <span class="text-danger">@error('tole'){{$message}}@enderror</span>
                                </div>
                            </div>
                         
                            <div class="col-md-4 mt-3">
                                <label for="yes_black_listed">Is Blacklisted *</label>
                                <div class="bfg mt-1">
                                    <input type="radio" name="is_black_listed" id="no_black_listed" value="no">
                                    <label for="no_black_listed">No</label>&nbsp;
                                    <input type="radio" name="is_black_listed" id="yes_black_listed" value="yes">
                                    <label for="yes_black_listed">Yes</label>&nbsp;
                                    <span class="text-danger">@error('is_black_listed')<br>{{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="fiscal_year">Fiscal Year</span></label>
                                    <select name="fiscal_year" id="fiscal_year" class="form-control" value="{{old('fiscal_year')}}" required>
                                        <option value="">Choose Year</option>
                                        @foreach ($var_fiscal_year as $fiscal_year)
                                        <option value="{{$fiscal_year->fiscal_year}}">{{$fiscal_year->fiscal_year}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('dprotocol'){{$message}}@enderror</span>
                                </div>
                            </div>         
                            <div class="col-md-4 mt-3">
                                <label for="bachlor_in_jmc">Bachlor In JMC</label>
                                <div class="bfg mt-1">
                                    <input type="radio" name="bachlor_in_jmc" id="yes_bachlor_in_jmc" value="yes">
                                    <label for="yes_bachlor_in_jmc">Yes</label>&nbsp;
                                    <input type="radio" name="bachlor_in_jmc" id="no_bachlor_in_jmc" value="no">
                                    <label for="no_bachlor_in_jmc">No</label>&nbsp;
                                    <span class="text-danger">@error('bachlor_in_jmc')<br>{{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company">Company</span></label>
                                    <input type="text" id="company" name="company" class="form-control" value="{{old('company')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_pan_vat_number">Company PAN/VAT Number</span></label>
                                    <input type="text" id="company_pan_vat_number" name="company_pan_vat_number" class="form-control" value="{{old('company_pan_vat_number')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_registration_number">Company Registration No.</span></label>
                                    <input type="text" id="company_registration_number" name="company_registration_number" class="form-control" value="{{old('company_registration_number')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_contact">Company Contact</span></label>
                                    <input type="tel" id="company_contact" name="company_contact" class="form-control" value="{{old('company_contact')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_email">company_email</span></label>
                                    <input type="email" id="company_email" name="company_email" class="form-control" value="{{old('company_email')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor">Editor *</span></label>
                                    <input type="text" id="editor" name="editor" class="form-control" value="{{old('editor')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_nepali">editor_nepali</span></label>
                                    <input type="text" id="editor_nepali" name="editor_nepali" class="form-control" value="{{old('editor_nepali')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_gender">Editor Gender *</span></label>
                                    <div class="bfg mt-1">
                                        <input type="radio" name="editor_gender" id="editor_gender_male" value="male">
                                        <label for="editor_gender_male">Male</label>&nbsp;
                                        <input type="radio" name="editor_gender" id="editor_gender_female" value="female">
                                        <label for="editor_gender_female">Female</label>&nbsp;
                                        <input type="radio" name="editor_gender" id="editor_gender_other" value="other">
                                        <label for="editor_gender_other">Other</label>&nbsp;
                                        <span class="text-danger">@error('editor_gender')<br>{{$message}}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_citizen_number">editor_citizen_number</span></label>
                                    <input type="text" id="editor_citizen_number" name="editor_citizen_number" class="form-control" value="{{old('editor_citizen_number')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_citizen_district">editor_citizen_district</span></label>
                                    <input type="text" id="editor_citizen_district" name="editor_citizen_district" class="form-control" value="{{old('editor_citizen_district')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_email">editor_email</span></label>
                                    <input type="text" id="editor_email" name="editor_email" class="form-control" value="{{old('editor_email')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_contact">editor_contact</span></label>
                                    <input type="text" id="editor_contact" name="editor_contact" class="form-control" value="{{old('editor_contact')}}">
                                </div>
                            </div>
                           
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director">director</span></label>
                                    <input type="text" id="director" name="director" class="form-control" value="{{old('director')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_nepali">director_nepali</span></label>
                                    <input type="text" id="director_nepali" name="director_nepali" class="form-control" value="{{old('director_nepali')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_gender">director_gender</span></label>
                                    <div class="bfg mt-1">
                                        <input type="radio" name="director_gender" id="director_gender_male" value="male">
                                        <label for="director_gender_male">Male</label>&nbsp;
                                        <input type="radio" name="director_gender" id="director_gender_female" value="female">
                                        <label for="director_gender_female">Female</label>&nbsp;
                                        <input type="radio" name="director_gender" id="director_gender_other" value="other">
                                        <label for="director_gender_other">Other</label>&nbsp;
                                        <span class="text-danger">@error('director_gender')<br>{{$message}}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_citizen_number">director_citizen_number</span></label>
                                    <input type="text" id="director_citizen_number" name="director_citizen_number" class="form-control" value="{{old('director_citizen_number')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_citizen_district">director_citizen_district</span></label>
                                    <input type="text" id="director_citizen_district" name="director_citizen_district" class="form-control" value="{{old('director_citizen_district')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_contact">director_contact</span></label>
                                    <input type="text" id="director_contact" name="director_contact" class="form-control" value="{{old('director_contact')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_email">director_email</span></label>
                                    <input type="text" id="director_email" name="director_email" class="form-control" value="{{old('director_email')}}">
                                </div>
                            </div> 
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="language">Language</span></label>
                                    <input type="text" id="language" name="language" class="form-control" value="{{old('language')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="old_domain">old_domain *</label>
                                    <input type="text" id="old_domain" name="old_domain" class="form-control" value="{{old('old_domain')}}">
                                    <span class="text-danger">@error('old_domain'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain_changed_date">domain_changed_date *</label>
                                    <input type="date" id="domain_changed_date" name="domain_changed_date" class="form-control" value="{{old('domain_changed_date')}}">
                                    <span class="text-danger">@error('domain_changed_date'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="old_company">old_company *</label>
                                    <input type="text" id="old_company" name="old_company" class="form-control" value="{{old('')}}">
                                    <span class="text-danger">@error('old_company'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_changed_date">company_changed_date *</label>
                                    <input type="date" id="company_changed_date" name="company_changed_date" class="form-control" value="{{old('company_changed_date')}}">
                                    <span class="text-danger">@error('company_changed_date'){{$message}}@enderror</span>
                                </div>
                            </div>     
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="old_editor">Old Editor</label>
                                    <input type="text" id="old_editor" name="old_editor" class="form-control" value="{{old('old_editor')}}">
                                    <span class="text-danger">@error('old_editor'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_changed_date">Editor Changed Date</label>
                                    <input type="date" id="editor_changed_date" name="editor_changed_date" class="form-control" value="{{old('editor_changed_date')}}">
                                    <span class="text-danger">@error('editor_changed_date'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="link_youtube">link_youtube</span></label>
                                    <input type="text" id="link_youtube" name="link_youtube" class="form-control" value="{{old('link_youtube')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="link_facebook">link_facebook</span></label>
                                    <input type="text" id="link_facebook" name="link_facebook" class="form-control" value="{{old('link_facebook')}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="link_twitter">link_twitter</span></label>
                                    <input type="text" id="link_twitter" name="link_twitter" class="form-control" value="{{old('link_twitter')}}">
                                </div>
                            </div>
                        </div>

                       {{-- IMAGE ROW --}}
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="application">application</label>
                                    <input type="file" id="application" name="application" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="black_listed_request_letter">black_listed_request_letter (if yes)</label>
                                    <input type="file" id="black_listed_request_letter" name="black_listed_request_letter" class="form-control" value="{{old('black_listed_request_letter')}}">
                                    <span class="text-danger">@error('black_listed_request_letter'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="company_registration_proof">company_registration_proof</label>
                                    <input type="file" id="company_registration_proof" name="company_registration_proof" class="form-control">
                                    <span class="text-danger">@error('company_registration_proof'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="decision">decision</label>
                                    <input type="file" id="decision" name="decision" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="domain_detail">domain_detail</label>
                                    <input type="file" id="domain_detail" name="domain_detail" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_photo">director_photo</label>
                                    <input type="file" id="director_photo" name="director_photo" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_citizenship">director_citizenship</label>
                                    <input type="file" id="director_citizenship" name="director_citizenship" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="director_signature">director_signature</label>
                                    <input type="file" id="director_signature" name="director_signature" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_photo">editor_photo</label>
                                    <input type="file" id="editor_photo" name="editor_photo" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="editor_citizenship">editor_citizenship</label>
                                    <input type="file" id="editor_citizenship" name="editor_citizenship" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="media_registration_proof">Media Registration Proof *</label>
                                    <input type="file" id="media_registration_proof" name="media_registration_proof" class="form-control">
                                    <span class="text-danger">@error('media_registration_proof'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="niyamawali">Niyamawali *</label>
                                    <input type="file" id="niyamawali" name="niyamawali" class="form-control">
                                </div>
                            </div>
                           
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="pan_vat_proof">pan_vat_proof</label>
                                    <input type="file" id="pan_vat_proof" name="pan_vat_proof" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="payment_voucher">payment_voucher</label>
                                    <input type="file" id="payment_voucher" name="payment_voucher" class="form-control">
                                    <span class="text-danger">@error('black_listed_request_letter'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="prabandh_patra">prabandh_patra</label>
                                    <input type="file" id="prabandh_patra" name="prabandh_patra" class="form-control">
                                    <span class="text-danger">@error('black_listed_request_letter'){{$message}}@enderror</span>
                                </div>
                            </div>
                           
                           
                          


                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary my-3">Save Record</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // FOR DISTRICTS 
            $('#province-dd').change(function(event){
                var idCountry = this.value; ////  alert(idCountry);
                $('#district-dd').html('');
                $.ajax({
                    url: "{{url('api/fetch-districts')}}",
                    
                    type: 'POST',
                    dataType: 'json',
                    data: {province_id: idCountry, _token:"{{csrf_token()}}"},
                    success: function(response){ 

                        // console.log(response);
                        $('#district-dd').html('<option value="">-- Select District --</option>');
                        $.each(response.districts, function(index, val){
                            $('#district-dd').append('<option value="'+val.id+'"> '+val.name+' </option>');
                        });
                        $('#municipality-dd').html('<option value="">-- Select Municipality --</option>');
                    }
                })
            });//end of district section

            // FOR MUINICIPALITY
            $('#district-dd').change(function(event){
                var idDistrict= this.value; 
                $('#municipality-dd').html('');
    
                $.ajax({
                    url: "{{url('api/fetch-municipalities')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {district_id: idDistrict, _token:"{{csrf_token()}}"},
                    success: function(response){
                        $('#municipality-dd').html('<option value="">-- Select Municipality --</option>');
                        $.each(response.municipalities, function(index, val){
                            $('#municipality-dd').append('<option value="'+val.id+'"> '+val.name+' </option>');
                        }); 
                    }
                })
            });//end of municipality section

            // FOR WARDS
            $('#municipality-dd').change(function(event){
                var idX = this.value; 
                $('#ward-dd').html('');
                $.ajax({
                    url: "{{url('api/fetch-wards')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {municipality_id: idX, _token:"{{csrf_token()}}"},
                    success: function(response){
                        $('#ward-dd').html('<option value="">-- Select Ward --</option>');
                        $.each(response.wards, function(index, val){
                            $('#ward-dd').append('<option value="'+val.id+'"> '+val.name+' </option>');
                        });
                    }
                })
            });//End of ward secttion


        });
    </script>


   
    



</x-my-user-dashboard>


