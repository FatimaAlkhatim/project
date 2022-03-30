<x-app-layout>
<br>
<center>
<form  action="{{url('updatac',$data->id )}}" method="post">
    @csrf


<div class="mb-6">
  <input type="text" name="cro_name" class="form-control" id="exampleFormControlInput1" value="{{$data->cro_name}}" style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="cro_price" class="form-control" id="exampleFormControlInput1"value="{{$data->cro_price}}" style="width: 400px; text-align:right;">
</div>



<br>





<button class="btn btn-info" style="width:200px; color:white;" > حفظ</button> 

<br><br>



      </x-app-layout>






