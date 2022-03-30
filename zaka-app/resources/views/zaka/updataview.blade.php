<x-app-layout>
<br>
<center>
<form  action="{{url('updatacrope',$data->id )}}" method="post">
    @csrf


<div class="mb-6">
  <input type="text" name="crope_name" class="form-control" id="exampleFormControlInput1" value="{{$data->crope_name}}" style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="crope_price" class="form-control" id="exampleFormControlInput1" value="{{$data->crope_price}}" style="width: 400px; text-align:right;">
</div>



<br>





<button class="btn btn-info" style="width:200px; color:white;" > حفظ</button> 

<br><br>



      </x-app-layout>






