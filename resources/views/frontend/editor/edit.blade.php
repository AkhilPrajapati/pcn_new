

<x-my-user-dashboard>
    <div class="app-main" id="main">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Edit Editor Details
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('editor_update', [$editor->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="name">Editor Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{$editor->name}}">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="nepali_name">Editor Name (in Nepali) *</label>
                                    <input type="text" id="nepali_name" name="nepali_name" class="form-control" value="{{$editor->nepali_name}}">
                                    <span class="text-danger">@error('nepali_name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="address">Address *</label>
                                    <input type="text" id="address" name="address" class="form-control" value="{{$editor->address}}">
                                    <span class="text-danger">@error('address'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="male">Gender *</label><br>
                                    <input type="radio" name="gender" id="male" value="male">
                                    <label for="male">Male</label>&nbsp;
                                    <input type="radio" name="gender" id="female" value="female">
                                    <label for="female">Female</label>&nbsp;
                                    <input type="radio" name="gender" id="other" value="other">
                                    <label for="other">Other</label>&nbsp;
                                    <span class="text-danger">@error('gender')<br>{{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="appointment_date">Appointment Date *</label>
                                    <input type="date" id="appointment_date" name="appointment_date" class="form-control" value="{{$editor->appiontment_date}}">
                                    <span class="text-danger">@error('appointment_date'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="email">Email Id *</label>
                                    <input type="text" id="email" name="email" class="form-control" value="{{$editor->email}}">
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="contact">Contact Number *</label>
                                    <input type="text" id="contact" name="contact" class="form-control" value="{{$editor->contact}}">
                                    <span class="text-danger">@error('contact'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="citizen_number">Citizen Number *</label>
                                    <input type="text" id="citizen_number" name="citizen_number" class="form-control" value="{{$editor->citizen_number}}">
                                    <span class="text-danger">@error('citizen_number'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="citizen_district">Citizen Issued District *</label>
                                    <input type="text" id="citizen_district" name="citizen_district" class="form-control" value="{{$editor->citizen_district}}">
                                    <span class="text-danger">@error('citizen_district'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="photo">Profile Photo *</label>
                                    <input type="file" id="photo" name="photo" class="form-control">
                                    <span class="text-danger">@error('photo'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="citizenship">Citizenship / (any national identity) *</label>
                                    <input type="file" id="citizenship" name="citizenship" class="form-control">
                                    <span class="text-danger">@error('citizenship'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="see_marksheet">see_marksheet *</label>
                                    <input type="file" id="see_marksheet" name="see_marksheet" class="form-control" >
                                    <span class="text-danger">@error('see_marksheet'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="see_character">see_character *</label>
                                    <input type="file" id="see_character" name="see_character" class="form-control" value="">
                                    <span class="text-danger">@error('see_character'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="see_certificate">see_certificate *</label>
                                    <input type="file" id="see_certificate" name="see_certificate" class="form-control" value="">
                                    <span class="text-danger">@error('see_certificate'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="slc_marksheet">slc_marksheet *</label>
                                    <input type="file" id="slc_marksheet" name="slc_marksheet" class="form-control" value="">
                                    <span class="text-danger">@error('slc_marksheet'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="slc_character">slc_character *</label>
                                    <input type="file" id="slc_character" name="slc_character" class="form-control" value="">
                                    <span class="text-danger">@error('slc_character'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="slc_certificate">slc_certificate *</label>
                                    <input type="file" id="slc_certificate" name="slc_certificate" class="form-control">
                                    <span class="text-danger">@error('slc_certificate'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="bachlor_marksheet">bachlor_marksheet *</label>
                                    <input type="file" id="bachlor_marksheet" name="bachlor_marksheet" class="form-control" value="">
                                    <span class="text-danger">@error('bachlor_marksheet'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="bachlor_character">bachlor_character *</label>
                                    <input type="file" id="bachlor_character" name="bachlor_character" class="form-control" value="">
                                    <span class="text-danger">@error('bachlor_character'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bfg">
                                    <label for="bachlor_certificate">bachlor_certificate *</label>
                                    <input type="file" id="bachlor_certificate" name="bachlor_certificate" class="form-control" value="">
                                    <span class="text-danger">@error('bachlor_certificate'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="com-md-12 mt-3">
                            <button type="submit" class="btn btn-primary my-3">Update Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-my-user-dashboard>


