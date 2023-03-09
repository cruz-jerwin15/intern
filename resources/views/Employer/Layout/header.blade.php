<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('employerassets/imgs/template/favicon.svg')}}">

    <link href="{{asset('employerassets/css/style.css?version=2.0')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <title>Employer - CareerIn </title>
  </head>
  <body>   
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{asset('employerassets/imgs/template/loading.gif')}}" alt="jobBox"></div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar"> 
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="/"><h3>CareerIn</h3></a></div><span class="btn btn-grey-small ml-10">Employer area</span>
          </div>
          <div class="header-search"> 
            
          </div>
          <div class="header-menu d-none d-md-block">
            
          </div>
          <div class="header-right">
            <div class="block-signin">
              <div class="dropdown d-inline-block"><a class="btn btn-notify" id="dropdownNotify" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownNotify">
                  <li><a class="dropdown-item active" href="#">10 notifications</a></li>
                  <li><a class="dropdown-item" href="#">12 messages</a></li>
                </ul>
              </div>
              @php
                  $profile_link = 'profile/'.session()->get('profile');
            @endphp
              <div class="member-login"><img alt="" src="{{asset($profile_link)}}">
                <div class="info-member"> <strong class="color-brand-1">
                    {{session()->get('firstname')}}  {{session()->get('lastname')}}
                </strong>
                  <div class="dropdown"><a class="font-xs color-text-paragraph-2 icon-down" id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">Employer</a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownProfile">
                      <li><a class="dropdown-item" href="/account-settings">Profiles</a></li>
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-search mobile-header-border mb-30">
              {{-- <form action="#">
                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
              </form> --}}
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="main-menu">
                    @php
                        $dashboard="";
                        $candidate="";
                        $assessment="";
                        $message="";
                        $profiles="";
                    @endphp
                    @if(session()->get('page')=="dashboard")
                        @php
                        $dashboard="active";
                        @endphp
                    @elseif(session()->get('page')=="class")
                        @php
                        $candidate="active";
                        @endphp
                    @elseif(session()->get('page')=="assessment")
                        @php
                        $assessment="active";
                        @endphp
                    @elseif(session()->get('page')=="profile")
                        @php
                        $profiles="active";
                        @endphp
                    @endif
                    <li> <a class="dashboard2 {{$dashboard}}" href="/coordinator_dashboard"><img src="{{asset('employerassets/imgs/page/dashboard/dashboard.svg')}}" alt="jobBox"><span class="name">Dashboard</span></a>
                    </li>
                    <li> <a class="dashboard2 {{$candidate}}" href="/manage_class"><img src="{{asset('employerassets/imgs/page/dashboard/candidates.svg')}}" alt="jobBox"><span class="name">Class</span></a>
                    </li>
                   
                    <li> <a class="dashboard2 {{$assessment}}" href="/coordinator_assessment"><img src="{{asset('employerassets/imgs/page/dashboard/jobs.svg')}}" alt="jobBox"><span class="name">Assessment</span></a>
                    </li>
                    <li> <a class="dashboard2 {{$message}}" href="/employer-message"><img src="{{asset('employerassets/imgs/page/dashboard/cv-manage.svg')}}" alt="jobBox"><span class="name">Message</span></a>
                    </li>
                    <li> <a class="dashboard2 {{$profiles}}" href="/employer_profile"><img src="{{asset('employerassets/imgs/page/dashboard/profiles.svg')}}" alt="jobBox"><span class="name">Account</span></a>
                    </li>
                    <li> <a class="dashboard2" href="/logout"><img src="{{asset('employerassets/imgs/page/dashboard/logout.svg')}}" alt="jobBox"><span class="name">Logout</span></a>
                    </li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
              <h6 class="mb-10">Your Account</h6>
              <ul class="mobile-menu font-heading">
                <li><a href="/employer-profile">Profile</a></li>
                <li><a href="/logout">Sign Out</a></li>
              </ul>
              <div class="mb-15 mt-15"> <a class="btn btn-default icon-edit hover-up" href="/employer-job-post">Post Job</a></div>
            </div>
            <div class="site-copyright">Copyright 2022 &copy; CareerIn. </div>
          </div>
        </div>
      </div>
    </div>
    <main class="main">
      <div class="nav"><a class="btn btn-expanded"></a>
        <nav class="nav-main-menu">
          <ul class="main-menu">
            @php
                        $dashboard="";
                        $candidate="";
                        $assessment="";
                        $message="";
                        $profiles="";
                    @endphp
                    @if(session()->get('page')=="dashboard")
                        @php
                        $dashboard="active";
                        @endphp
                    @elseif(session()->get('page')=="class")
                        @php
                        $candidate="active";
                        @endphp
                     @elseif(session()->get('page')=="assessment")
                     @php
                     $assessment="active";
                     @endphp
                    @elseif(session()->get('page')=="profile")
                    @php
                    $profiles="active";
                    @endphp
                    @endif
                    <li> <a class="dashboard2 {{$dashboard}}" href="/coordinator_dashboard"><img src="{{asset('employerassets/imgs/page/dashboard/dashboard.svg')}}" alt="jobBox"><span class="name">Dashboard</span></a>
                    </li>
                    <li> <a class="dashboard2 {{$candidate}}" href="/manage_class"><img src="{{asset('employerassets/imgs/page/dashboard/candidates.svg')}}" alt="jobBox"><span class="name">Class</span></a>
                    </li>
                   
                    <li> <a class="dashboard2 {{$assessment}}" href="/coordinator_assessment"><img src="{{asset('employerassets/imgs/page/dashboard/jobs.svg')}}" alt="jobBox"><span class="name">Assessment</span></a>
                    </li>
                    <li> <a class="dashboard2 {{$message}}" href="/employer-message"><img src="{{asset('employerassets/imgs/page/dashboard/cv-manage.svg')}}" alt="jobBox"><span class="name">Message</span></a>
                    </li>
                    <li> <a class="dashboard2 {{$profiles}}" href="/employer_profile"><img src="{{asset('employerassets/imgs/page/dashboard/profiles.svg')}}" alt="jobBox"><span class="name">Account</span></a>
                    </li>
                    <li> <a class="dashboard2" href="/logout"><img src="{{asset('employerassets/imgs/page/dashboard/logout.svg')}}" alt="jobBox"><span class="name">Logout</span></a>
                    </li>
          </ul>
        </nav>
        <div class="border-bottom mb-20 mt-20"></div>
        
        
      </div>
      @yield('content')
    </main>
    <script src="{{asset('employerassets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('employerassets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('employerassets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('employerassets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/jquery.circliful.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/charts/index.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/charts/xy.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/charts/Animated.js')}}"></script>
    <script src="{{asset('employerassets/js/plugins/armcharts5-script.js')}}"></script>
    <script src="{{asset('employerassets/js/main.js?v=1.0')}}"></script>
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('employerassets/js/demo/datatables-demo.js')}}"></script>

  </body>
</html>