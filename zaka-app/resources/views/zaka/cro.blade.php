<x-app-layout>
<br><br><br>
<center>
<form  action="{{url('addcro')}}" method="post">
    @csrf


<div class="mb-6">
  <input type="text" name="cro_name" class="form-control" id="exampleFormControlInput1" placeholder="   اسم المحصول "  style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="cro_price" class="form-control" id="exampleFormControlInput1" placeholder="  سعر المحصول  "  style="width: 400px; text-align:right;">
</div>



<br>





<button class="btn btn-info" style="width:200px; color:white;" > حفظ</button> 

<br><br>




<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

 <!-- <h2>HTML Table</h2>  -->
<center>
<table class="table col-md-6">
  <thead>
  <tr>
  
  <th> تعديل </th>
    <th> سعر المحصول</th>
    <th >اسم المحصول  </th>
    
  </tr> 
  </thead>
 
   <tbody>
    
  @foreach($data as $cro)
  <tr>
    
 
  <td><a class="btn btn-info" href="{{url('updatashow',$cro->id)}}">تعديل</a></td > 

  <td>{{$cro->cro_price}}</td > 
 <td>{{$cro->cro_name}}</td >   
    
   
  </tr>
  @endforeach
  <tbody> 

</table>
</center>
</body>
</html>



</x-app-layout>






