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


@include('zaka.side')

<center>
<form  action="" method="post">
    @csrf
<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الرقم</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="width: 500px;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">رقم المشروع</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<!-- <div class="mb-3"> 
  <label for="exampleFormControlInput1"  class="form-label">  البريد الالكتروني</label>
  <input type="email" name="email "class="form-control" id="exampleFormControlInput1"  style="width: 500px; text-align:right;">
</div> -->
<div class="mb-3"> 
  <label for="exampleFormControlInput1" style=";" class="form-label"> المساحه</label>
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الموقع</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">نوع المحصول</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<div class="mb-3">
  <x-label  value="{{ __(' نوع الري') }}" />
                            <select name="client_type"style="width: 400px; text-align:right;">
                        

                                <option>  مطري   </option>

                                <option>  الاله </option>
                                <option>تكميبي </option>
                            </select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الولايه</label>
  <input type="text" name="state" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">المحلية</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">كمية الانتاج</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">قيمة الانتاج</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>


<button class="btn btn-light" style="with:100px;" >حفظ</button> 

</form>
</center>



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
</body>
</html>