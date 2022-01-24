

<x-app-layout>

<center>
<form  action="{{url('addreseivable')}}" method="post" enctype="multipart/form-data" id="intervention-image-upload"> 
    @csrf
<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الرقم</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="width: 500px;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الاسم</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<!-- <div class="mb-3"> 
  <label for="exampleFormControlInput1"  class="form-label">  البريد الالكتروني</label>
  <input type="email" name="email "class="form-control" id="exampleFormControlInput1"  style="width: 500px; text-align:right;">
</div> -->
<div class="mb-3"> 
  <label for="exampleFormControlInput1" style=";" class="form-label"> الرقم الوطني</label>
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الرقم الهاتف</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
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
  <label for="exampleFormControlInput1" class="form-label"> الموقع</label>
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الحالة الاجتماعية</label>
  <input type="text" name="status" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>





<div class="mb-3">
  <x-label  value="{{ __(' نوع المستحق') }}" />
                            <select name="reseivable_type"style="width: 400px; text-align:right;">
                        

                                <option> الارامل </option>

                                <option><a href ="{{url('index')}}">الغارمين</a></option>
                                <option><a href="{{url('index')}}">الفقراء</a></option>
                                <option>المساكين</option>
                                <option>العاملين</option>
                                <option>ابن السبيل</option>
  </select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">صوره</label>
  <input type="file" name="project_image" id="project_image" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<button class="btn btn-primary" style="width:200px;">حفظ</button> 

</form>
</center>

<div style=" background-color:gray;margin: 30px; padding: 10px;">

<h5 style=" witdh: 30px; text-align:center; color:white"> مربع الصوره مخصص للارامل(شهادة الوفاء) وابن السبيل(التذكره) والغارمين(اقرار شهود من المحكمه) فقط</h5>
</div>



</x-app-layout>