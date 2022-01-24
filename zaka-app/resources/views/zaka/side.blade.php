

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<link rel="stylesheet" href="{{asset('css/settings.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

{{-- start nav --}}
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">

                <div class="sidebar-header">

                    <h2 class="text-danger text-center m-4 "><i class="fa fa-tachometer-alt fa-x4 text-danger"></i>
                        &nbsp; <span style="color: black;">ذكاة <span class="text-danger">السودان</span> </span></h2>
                </div>
                <!-- sidebar-head  -->


                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>الاعدادات</span>
                        </li>
                        <li class="sidebar-dropdown ">
                            <a href="#">
                                <i class="fas fa-home"></i>
                                <span>الصفحة الرئيسية</span>
                                {{--                       <span class="badge badge-pill badge-warning">جديد</span>--}}
                            </a>
                            <div class="sidebar-submenu" style="display: none;">
                                <ul>
{{--                                    <li>--}}
{{--                                        <a href='{{ url("/customers/create") }}'>اضافة مشترك--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href='{{ url('/') }}'>واجهة الموقع</a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href='{{ url('/customers/trashed') }}'>الحسابات المحذوفة</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-users-cog"></i>
                                <span>المستخدمين</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{url('/messages')}}">قائمة المستخدمين</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/addUser')}}">اضافة مستخدم</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
{{--                                                <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-users-cog"></i>
                                <span>متقدم</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">ترحيل الحسابات</a>
                                    </li>
                                    <li>
                                        <a href="#">تصفير الصناديق</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="head-menu">
                            <span>اوامر</span>
                        </li>
                        <li>
                            <a href="{{ url('/home') }}">
                                <i class="fas fa-user-tag"></i>
                                <span>الاحصائيات</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/settings/branches')}}">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>مسؤولي القطاعات</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url("/branch")}}">
                                <i class="fas fa-store-alt"></i>
                                <span>اضافة قطاع</span>
                                 <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url("/editTelegram")}}">
                                                        <i class="fa fa-chart-line"></i>
                                <i class="fab fa-telegram-plane"></i>
                                <span>اعدادات التلغرام</span>
                                 <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/register')}}">
                                <i class="fas fa-user-plus"></i>
                                <span>اضافة مستخدم</span>
                                 <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url("/prices")}}">
                                <i class="fa fa-shopping-cart"></i>
                                <span>تحرير الاسعار</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class="fas fa-search-location"></i>
                                <span> اضافة مركز</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class="far fa-credit-card"></i>
                                <span> اضافة بطاقة</span>
                            </a>
                        </li>--}}

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <!-- <div class="sidebar-footer"> -->
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="#">
                    <i class="fa fa-power-off"></i>
                </a>

            </div>
        </nav>
        {{-- end nav --}}

    
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>