
<x-app-layout>
<br><br><br>

<center>
<form  action="{{url('addclient')}}" method="post">
    @csrf


<div class="mb-6">
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1" placeholder=" الرقم الوطني  "  style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" placeholder="   رقم الهاتف"  style="width: 400px; text-align:right;">
</div>


<br>

<div class="mb-6"  style="margin-left :120px;">
  <select  name="state_id" style="width: 400px; text-align:right;" >
  <option >اختر ولايتك</option>

  @foreach ($date as $state)
 

        <option value="{{ $state->id }}">{{ $state->state_name }}</option>

    @endforeach
  </select>
  <button class="btn btn-outline-secondary" type="button"><a href="{{url('state')}}">اضف ولايتك</a></button>
</div>
<br>
<div class="mb-6" style="margin-left :120px;">
  <select  name="local_id" style="width: 400px; text-align:right;" >
  <option >اختر محليتك</option>

  @foreach ($lo as $local)
  

        <option value="{{ $local->id }}">{{ $local->local_name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary" type="button"><a href="{{url('local')}}">اضف محليتك</a></button>
</div>

<br>

<div class="mb-3">
<!-- <x-label  value="{{ __('  نوع المزكي ') }}" /> -->
<select name="client_type" style="width: 400px; text-align:right;">

<option>نوع المزكي</option>
<option>مزارع </option>
<option>معادن  </option>
<option> انعام </option>
</select>

</div>
<br>




<button class="btn btn-info" style="width:200px; color:white;" > التالي</button> 

<br><br><br>
<div >
<!-- <button class="btn btn-info" style="width:200px; color:white;" ><a href="{{url('calco')}}" style="color:white;">

اضغط لحساب زكاتك  

</a>
</button> -->



      </x-app-layout>






