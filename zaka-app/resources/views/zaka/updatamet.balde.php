<x-app-layout>
<br>
<center>
<form  action="{{url('updatamett',$data->id )}}" method="post">
    @csrf


<div class="mb-6">
  <input type="text" name="met_name" class="form-control" id="exampleFormControlInput1" value="{{data->met_name}}" style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="met_price" class="form-control" id="exampleFormControlInput1" value="{{data->met_price}}"  style="width: 400px; text-align:right;">
</div>



<br>





<button class="btn btn-info" style="width:200px; color:white;" > حفظ</button> 



<br><br>

</center>
</body>
</html>

      </x-app-layout>






