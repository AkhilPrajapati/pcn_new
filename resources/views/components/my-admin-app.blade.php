

<!DOCTYPE html>
<html lang="en">
  
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Online Suchikaran</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/myassets/backend/css/app.min.css">
  <link rel="stylesheet" href="/myassets/backend/css/style.css">
  <link rel="stylesheet" href="/myassets/backend/css/components.css">
  <link rel='shortcut icon' type='image/x-icon' href='/myassets/backend/img/favicon.ico'/>
  <link rel="stylesheet" href="/myassets/backend/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/myassets/img/favicon.ico' />

  {{-- SELECT2 KO LAI --}}
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- SUMMER NOTE KO LAI --}}
  <link rel="stylesheet" href="/myassets/backend/bundles/summernote/summernote-bs4.css">
  {{-- FOR TOASTR --}}
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  
  
  <link rel="stylesheet" href="/myassets/backend/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="/myassets/backend/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  


</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li>
              <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a>
            </li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  {{-- <span style="font-size: 120%"> Hello Admin Sir</span> --}}
                  
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
                  @php                  
                  // use App\Models\User;
                  // use Illuminate\Support\Facades\Auth;
                  $image = "https://img.freepik.com/premium-vector/avatar-icon002_750950-52.jpg";
                  // $user = User::where('id', Auth::user()->id)->get();
                  $user_name = Auth::user()->name;
                  $user_photo = Auth::user()->photo;
                  @endphp
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              {{-- <img alt="image" src="/myuploada/user/{{$user->photo}}" class="user-img-radious-style"> --}}
              <img src="{{(!empty($user_photo))?url("/myuploads/user/$user_photo"):url($image)}}" class="" alt = "image" height="120%" width="120%" style="border-radius: 20%">
              <span class="d-sm-none d-lg-inline-block"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              
              <div class="dropdown-title">Hello {{$user_name}}</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              {{-- <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a>
              <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a> --}}
              <div class="dropdown-divider"></div>
              <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
          </li>
        </ul>
      </nav>

      <x-my-admin-sidebar/>

      <!-- Main Content -->
      <div class="main-content">
        {{$slot}}
       
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <footer class="main-footer">
        <div class="footer-right">
          <span>IT-LIZATION: Er.Akhil Prazapati</span>
        </div>
        <div class="footer-left">
          <span>© Copyright 2024. All rights are reserved.</span>
        </div>
      </footer>
    </div>
  </div>
  
  {{-- BASIC SCRIPTS --}}
  <script src="/myassets/backend/js/app.min.js"></script>
  <script src="/myassets/backend/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="/myassets/backend/js/page/index.js"></script>
  <script src="/myassets/backend/js/scripts.js"></script>
  <script src="/myassets/backend/js/custom.js"></script>

  
  {{-- SELECT2 ko lai rakheko --}}
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>$(document).ready(function() {$('.select2').select2();});</script>
  {{-- FOR SUMMER NOTE --}}
  <script src="/myassets/backend/bundles/summernote/summernote-bs4.js"></script>
  {{-- FOR DATA TABLE --}}
  <script src="/myassets/backend/bundles/datatables/datatables.min.js"></script>
  <script src="/myassets/backend/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/myassets/backend/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="/myassets/backend/js/page/datatables.js"></script>

  


  

  {{-- FOR TOASTR   --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
  @if(Session::has('flash'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
      case 'info': toastr.info(" {{ Session::get('flash') }} "); break;
      case 'success': toastr.success(" {{ Session::get('flash') }} "); break; 
      case 'warning': toastr.warning(" {{ Session::get('flash') }} "); break;
      case 'error': toastr.error(" {{ Session::get('flash') }} "); break;
  }
  @endif 
  </script>
</body>
</html>