

<x-app-layout>

<center>
<form  action="{{url('addlocal')}}" method="post"> 
    @csrf


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">اسم محليتك</label>
  <input type="text" name="local_name" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<button class="btn btn-primary" style="width:200px;" >حفظ</button> 

</form>
</center>





</x-app-layout>