<x-app-layout>
<br><br><br>
<center>
  
<form  action="{{url('addclient')}}" method="post">
    @csrf

<div class="mb-6">
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" الاسم"  style="width: 400px; text-align:right;">
</div>


<br>
<div class="mb-6"> 
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1" placeholder=" الرقم الوطني"   style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1"placeholder="  رقم الهاتف" style="width: 400px; text-align:right; ">
</div><br>

<div class="mb-3 " style="margin-left :120px;">
  <select  name="state_id" style="width: 400px; text-align:right;" >
  <option >اختر ولايتك</option>
  @foreach ($date as $state)
  <option ></option>

        <option value="{{ $state->id }}">{{ $state->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary" type="button"><a href="{{url('state')}}">اضف ولايتك</a></button>
</div>
<br>
<div class="mb-3" style="margin-left :120px;">
  <select  name="local_id" style="width: 400px; text-align:right ;" >
  <option >اختر محليتك</option>

  @foreach ($lo as $local)
  <option ></option>

        <option value="{{ $local->id }}">{{ $local->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary" type="button"><a href="{{url('local')}}">اضف محليتك</a></button>
</div>

<br>

<div class="mb-3">
  <x-label  value="{{ __(' نوع المذكي') }}" />
                            <select name="client_type" style="width: 400px; text-align:right;">
                        

                                <option>مزارع</option>
                                <option>معادن</option>
                                <option>انعام </option>
                                <!-- <option > <a href="{{url('calco')}}"class="btn btn-primary">go</a> </option> -->

                            </select>
</div>


<button class="btn btn-info" style="width:200px; color:white;" >حفظ</button> 

<br><br><br>
<div >
<button class="btn btn-info" style="width:200px; color:white;" ><a href="{{url('calco')}}"class="btn btn-primary">اضغط لحساب زكاتك  

</a>
</button>



      </x-app-layout>