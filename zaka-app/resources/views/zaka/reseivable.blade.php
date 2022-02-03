

<x-app-layout>
<br><br><br>
<center>
<form  action="{{url('addreseivable')}}" method="post" enctype="multipart/form-data" id="intervention-image-upload"> 
    @csrf


<div class="mb-6">
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="الاسم" style="width: 400px; text-align:right;">
</div>

<br>

<div class="mb-6"> 
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1" placeholder="الرقم الوطني" style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1"placeholder="رقم الهاتف" style="width: 400px; text-align:right;">
</div>
<br>

<div class="mb-6"  style="margin-left :120px;">
  <select  name="state_id" style="width: 400px; text-align:right;" >
  <option >اختر ولايتك</option>

  @foreach ($sta as $state)
  <option ></option>

        <option value="{{ $state->id }}">{{ $state->name }}</option>

    @endforeach
  </select>
  <button class="btn btn-outline-secondary" type="button"><a href="{{url('state')}}">اضف ولايتك</a></button>
</div>
<br>
<div class="mb-6" style="margin-left :120px;">
  <select  name="local_id" style="width: 400px; text-align:right;" >
  <option >اختر محليتك</option>

  @foreach ($lo as $local)
  <option ></option>

        <option value="{{ $local->id }}">{{ $local->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary" type="button"><a href="{{url('local')}}">اضف محليتك</a></button>
</div>

<br>
<div class="mb-6">
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="العنوان" style="width: 400px; text-align:right;">
</div>

<br>

<div class="mb-6">
  <x-label  value="{{ __('الحاله الاجتماعيه') }}" />
                            <select name="status"style="width: 400px; text-align:right;">
                        
                            <option>متزوج</option>
                                <option>اعذب</option>
                                
                                <option> الارامل </option>

                             
  </select>
</div>

<br>
<div class="mb-6">
  <x-label  value="{{ __(' نوع المستحق') }}" />
                            <select name="reseivable_type"style="width: 400px; text-align:right;">
                        

                                <option> الارامل </option>

                                <option>الغارمين</option>
                                <option>الفقراء</option>
                                <option>المساكين</option>
                                <option>العاملين</option>
                                <option>ابن السبيل</option>
  </select>
</div>
<br>
<div class="mb-6">
  <lable>الصوره</lable>
  <input type="file" name="project_image" id="project_image" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<br>
<button class="btn btn-primary" style="width:200px;"  >حفظ</button> 

</form>
</center>

<div style=" background-color:gray;margin: 30px; padding: 10px;">

<h5 style=" witdh: 30px; text-align:center; color:white"> مربع الصوره مخصص للارامل(شهادة الوفاء) وابن السبيل(التذكره) والغارمين(اقرار شهود من المحكمه) فقط</h5>
</div>



</x-app-layout>