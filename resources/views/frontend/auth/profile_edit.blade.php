
<x-my-user-dashboard>

   

<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!--mail-Compose-contant-start-->
        <div class="row account-contant">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            {{-- FIRST COLUMN --}}
                            <div class="col-xl-4 pb-xl-0 pb-5 border-right">
                                <div class="page-account-profil pt-5">
                                    <h3 class="text-center">Account Settings</h3>
                                    <div class="profile-img text-center rounded-circle">
                                        <div class="pt-5">
                                            <div class="bg-img m-auto">
                                                @php
                                                $image = "https://static.vecteezy.com/system/resources/previews/009/749/878/original/woman-profile-mascot-illustration-female-avatar-icon-cartoon-girl-head-face-business-user-logo-free-vector.jpg";
                                                @endphp
                                                <img src="{{(!empty($user->photo))?url("/myuploads/user/$user->photo"):url($image)}}" class="img-fluid">
                                            </div>
                                            <div class="profile pt-4">
                                                <h4 class="mb-1">{{$user->name}}</h4>
                                                <p>{{$user->email}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-5 profile-counter">
                                        <ul class="nav justify-content-center text-center">
                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">02</h4>
                                                    <p>Medias</p>
                                                </div>
                                            </li>
                                            <li class="nav-item border-right px-3">
                                                <div>
                                                    <h4 class="mb-0">22</h4>
                                                    <p>Staffs</p>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div>
                                                    <h4 class="mb-0">22</h4>
                                                    <p>Staffs</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profile-btn text-center">
                                        {{-- <div><button class="btn btn-danger">Delete Account</button></div> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- SECOND COLUMN --}}
                            <div class="col-xl-8 col-md-6 col-12 border-t border-right">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Edit Your Personal Details</h5>
                                    </div>
                                    <div class="p-4">
                                        <form action="{{route('profile_update')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                                                    <span class="text-danger mt-0">@error('name'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}">
                                                    <span class="text-danger mt-0">@error('email'){{$message}}@enderror</span>
                                                </div>
                                                
                                                <div class="form-group col-md-12">
                                                    <label for="contact">Contact</label>
                                                    <input type="text" name="contact" class="form-control" id="contact" value="{{$user->contact}}">
                                                    <span class="text-danger mt-0">@error('contact'){{$message}}@enderror</span>
                                                </div>
                                                
                                                <div class="form-group col-md-12">
                                                    <label for="address">Address</label>
                                                    <input type="text" name="address" class="form-control" id="address" value="{{$user->address}}">
                                                    <span class="text-danger mt-0">@error('address'){{$message}}@enderror</span>
                                                </div>
                                                
                                                <div class="form-group col-md-12">
                                                    <label for="photo">Profile Photo</label>
                                                    <input type="file" name="photo" class="form-control" id="photo" value="{{$user->photo}}">
                                                    <span class="text-danger mt-0">@error('photo'){{$message}}@enderror</span>
                                                </div>
                                                <div class="form-group col-md-12 mt-3">
                                                    <button type="submit" class="btn btn-primary">Update Information</button>
                                                </div>
                                            </div>
                                           
                                         
                                        
                                        
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-4 col-md-6 border-t col-12">
                                <div class="page-account-form">
                                    <div class="form-titel border-bottom p-3">
                                        <h5 class="mb-0 py-2">Your External Link</h5>
                                    </div>
                                    <div class="p-4">
                                        <form>
                                            <div class="form-group">
                                                <label for="fb">Facebook URL:</label>
                                                <input type="text" class="form-control" id="fb" value="https://www.facebook.com/">
                                            </div>
                                            <div class="form-group">
                                                <label for="tr">Twitter URL:</label>
                                                <input type="text" class="form-control" id="tr" value="https://twitter.com/">
                                            </div>

                                            <div class="form-group">
                                                <label for="br">Blogger URL:</label>
                                                <input type="text" class="form-control" id="br" value="https://www.blogger.com/">
                                            </div>

                                            <div class="form-group">
                                                <label for="go">Google+ URL:</label>
                                                <input type="text" class="form-control" id="go" value="https://plus.google.com/discover">
                                            </div>

                                            <div class="form-group">
                                                <label for="li">LinkedIn URL:</label>
                                                <input type="text" class="form-control" id="li" value="https://in.linkedin.com/">
                                            </div>

                                            <div class="form-group">
                                                <label for="we">Website URL:</label>
                                                <input type="text" class="form-control" id="we" value="https://yourwebsite.com/">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save & Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--mail-Compose-contant-end-->
    </div>
    <!-- end container-fluid -->
</div>
 


</x-my-user-dashboard>




