<x-app-layout>
    <br><br><br>
    
<center>
<h3>ادفع زكاتك</h3>

<form  action= "{{url('addpayment')}}"  method="post">
   @csrf




<div class="mb-6">
 <input type="text" name="card_num" value="34534534" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
 <input type="text" name="card_number" class="form-control" id="exampleFormControlInput1" placeholder=" ادخل رقم بطاقتك"  style="width: 400px; text-align:right;">
</div>


<br>


<br>

<div class="mb-6">
 <input type="text" name="iphone_py" class="form-control" id="exampleFormControlInput1" placeholder=" ادخل رقم الهاتف"  style="width: 400px; text-align:right;">
</div>
<br>

<div class="mb-6">
 <input type="text" name="amount_py" class="form-control" id="exampleFormControlInput1" placeholder=" ادخل المبلغ"  style="width: 400px; text-align:right;">
</div>
<br>


<br> <br>
<button class="btn btn-info" style="width:200px; color:white;" >حفظ</button> 

</div>
</form>
</center>
</x-app-layout>