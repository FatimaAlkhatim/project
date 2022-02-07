<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/d.css') }}">

 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" href="{{asset('css/settings.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" dir="rlt">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
           





            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        </aside>
  <div class="settings-box hide-settings">
    <div class="toggle-settings"><i class="fas fa-cog "></i></div>
    <div class="setting-content chiller-theme toggled">

        {{-- start nav --}}
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">

                <div class="sidebar-header">

                    <h2 class="text-danger text-center m-4 "><i class="fa fa-tachometer-alt fa-x4 text-danger"></i>
                        &nbsp; <span style="color: black;">زكاة <span class="text-danger">السودان</span> </span></h2>
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
                                <span> الصفحه الرئيسيه </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                    <a href="{{url('/dashboard')}}">الصفحه الرئيسيه</a>

                                    </li>
                                    <li>

                                    <a href="{{url('/messages')}}">صفحة الرسائل </a>


          

                                    </li>

                                </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <!-- <div class="sidebar-footer"> -->
               

            </div>
        </nav>
        {{-- end nav --}}

    </div>
</div>



  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper">
     Content Header (Page header) -->
   
    <!-- /.content-header -->

    
    <!-- /.content -->
  </div> 
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

 

<script>
@if (session('status'))
//alert('{{ session('status') }}');
swal({
  title: '{{ session('status') }}',
  text: "You clicked the button!",
  icon: '{{ session('statuscode') }}',
   button: "ok",

});
@endif
</script>

</script>
<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>
      <br>
      <h5>الرجاء زيارة صفحتنا علي الروابط اعلاه</h5>

      <!-- Linkedin -->
      <!-- <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a> -->
      <!-- Github -->
      <!-- <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a> -->
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <!-- <span style="color: black;"> ذكاة <span class="text-danger">السودان </span></span> -->
    <span style="color: black;font-size: 25px; "> زكاة <span class="text-danger">السودان </span>(2022)</span>
  </div>
  <!-- Copyright -->
</footer>
  <!-- /.control-sidebar -->
  <script src="{{ asset('js/jquery-2.2.1.min.js.js') }}"></script>

        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

    </body>
</html>

