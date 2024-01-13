

<x-my-user-dashboard>
    <div class="app-main" id="main">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Chairman</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('chairman_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="media_id">Choose Related Media</span></label>
                                    <select name="media_id" id="media_id" class="form-control">
                                        @foreach ($media as $media)
                                        <option value="{{$media->id}}">{{$media->domain}}</option>
                                        @endforeach                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="name">Chairman Name *</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="nepali_name">Chairman Name (in Nepali) *</label>
                                    <input type="text" id="nepali_name" name="nepali_name" class="form-control" value="{{old('nepali_name')}}">
                                    <span class="text-danger">@error('nepali_name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="address">Address *</label>
                                    <input type="text" id="address" name="address" class="form-control" value="{{old('address')}}">
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
                                    <input type="date" id="appointment_date" name="appointment_date" class="form-control" value="{{old('appointment_date')}}">
                                    <span class="text-danger">@error('appointment_date'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="email">Email Id *</label>
                                    <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}">
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="contact">Contact Number *</label>
                                    <input type="text" id="contact" name="contact" class="form-control" value="{{old('contact')}}">
                                    <span class="text-danger">@error('contact'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="citizen_number">Citizen Number *</label>
                                    <input type="text" id="citizen_number" name="citizen_number" class="form-control" value="{{old('citizen_number')}}">
                                    <span class="text-danger">@error('citizen_number'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="citizen_district">Citizen Issued District *</label>
                                    <input type="text" id="citizen_district" name="citizen_district" class="form-control" value="{{old('citizen_district')}}">
                                    <span class="text-danger">@error('citizen_district'){{$message}}@enderror</span>
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="photo">Profile Photo *</label>
                                    <input type="file" id="photo" name="photo" class="form-control" value="{{old('photo')}}">
                                    <span class="text-danger">@error('photo'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="bfg">
                                    <label for="citizenship">Citizenship / (any national ID) *</label>
                                    <input type="file" id="citizenship" name="citizenship" class="form-control" value="{{old('citizenship')}}">
                                    <span class="text-danger">@error('citizenship'){{$message}}@enderror</span>
                                </div>
                            </div>                           
                        </div>

                        <div class="com-md-12 mt-3">
                            <button type="submit" class="btn btn-primary my-3">Save Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-my-user-dashboard>


