
<x-app-layout>
<form  action="{{url('addfarm')}}" method="post">
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

<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">نوع المحصول</label>
  <input type="text" name="crope_type" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div> -->

<!-- Recipients list -->
<div class="md-3">
<x-label :value="__(' اختر  ')" style="float:right;" />
<select name="crope_id" style="width: 400px; text-align:right;">
    <!-- @foreach ($date as $crope) -->
        <option value="{{ $date->crope_price }}">{{ $date->crope_name }}</option>
    <!-- @endforeach -->
</select>
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

<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> سعر الكيلو</label>
  <input type="text" name="price_kilo" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<br>
<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('اختر  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
    
        <option value="{{ $date->id }}">{{ $date->name }}</option>
    
</select>

</div>

<br>


<button class="btn btn-info"  style="width:200px; color:white; float:right">حفظ


</button> 
						
						</form>

                        <x-app-layout>