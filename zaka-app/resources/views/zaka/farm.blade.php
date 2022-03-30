<x-app-layout>
  
<center>
<!-- <form  action="{{url('addfarrm')}}" method="post">
    @csrf

  
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">رقم المشروع</label>
  <input type="text" name="projct_id" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> المساحه</label>
  <input type="text" name="area" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">العنوان</label>
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>





<br>

<div class="mb-3"> 
<x-label  value="{{ __(' نوع الري') }}" style="float:right" />
 
<select name="irrigate_type"style="width: 400px; text-align:right;">
<option>  مطري   </option>
<option>  الاله </option>
<option>تكميلي </option>
</select>
</div>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<br>



<br>


<button class="btn btn-info"  style="width:200px; color:white; float:right">حفظ


</button> 
						
						</form> -->


    <form  action="{{url('addfar')}}" method="post">
    @csrf


<div class="mb-6">
  <input type="text" name="projct_id" class="form-control" id="exampleFormControlInput1" placeholder="  رقم المشروع  "  style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="area" class="form-control" id="exampleFormControlInput1" placeholder="   المساحه "  style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="   العنوان "  style="width: 400px; text-align:right;">
</div>


<br>

<div class="mb-3"> 
<x-label  value="{{ __(' نوع الري') }}"  />
 
<select name="irrigate_type"style="width: 400px; text-align:right;">
<option>  مطري   </option>
<option>  الاله </option>
<option>تكميلي </option>
</select>
</div>
<br>

<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('   نوع المحصول  ')"  />
<select name="crope_id" style="width: 400px; text-align:right;">
   @foreach($crops as $crop)
   <option value="{{$crop->id}}">{{$crop->crope_name}}</option>
   @endforeach
</select>
</div>
<br>

<div class="mb-6">
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" placeholder="    كمية الانتاج"  style="width: 400px; text-align:right;">
</div>

<br>

<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('  اسمك')"  />
<select name="client_id" style="width: 400px; text-align:right;">  
    @foreach($date as $client)
        <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
</select>
</div>


<br>
<button class="btn btn-info" style="width:200px; color:white;" > حفظ</button> 

</center>
</x-app-layout>