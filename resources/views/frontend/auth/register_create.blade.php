<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="/myassets/user_dashboard/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="/myassets/user_dashboard/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="/myassets/user_dashboard/css/style.css" />
</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="/myassets/user_dashboard/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="register p-5">
                                        <h2 class="mb-2">Press Council Nepal</h2>
                                        <p>Welcome and Please register your account.</p>
                                        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" class="mt-sm-5">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Full Name *</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{old('name')}}">
                                                        <span class="text-danger mt-0">@error('name'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="address" class="control-label">Address</label>
                                                        <input type="text" name="text" class="form-control">
                                                        <span class="text-danger mt-0">@error('text'){{$message}}@enderror</span>
                                                    </div>
                                                </div> --}}
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Email *</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                                                        <span class="text-danger mt-0">@error('email'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact *</label>
                                                        <input type="text" name="contact" class="form-control" placeholder="Contact" value="{{old('contact')}}">
                                                        <span class="text-danger mt-0">@error('contact'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Password *</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                        <span class="text-danger mt-0">@error('password'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="password_confirmation" class="control-label">Confirm Password *</label>
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                                        <span class="text-danger mt-0">@error('password_confirmation'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                            <label class="form-check-label" for="gridCheck">
                                                                I accept terms & policy
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 mt-3">
                                                        <button type="submit" class="btn btn-primary text-uppercase">Register</button>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-12  mt-3">
                                                    <p>Already have an account ? <a href="/login"> Login</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="/myassets/user_dashboard/img/bg/login.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->



    <!-- plugins -->
    <script src="/myassets/user_dashboard/js/vendors.js"></script>

    <!-- custom app -->
    <script src="/myassets/user_dashboard/js/app.js"></script>
</body>

</html>