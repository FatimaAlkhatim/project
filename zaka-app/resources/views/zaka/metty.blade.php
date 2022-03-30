<x-app-layout>
<br>
<center>
<form  action="{{url('addmetty')}}" method="post">
    @csrf


<div class="mb-6">
  <input type="text" name="met_name" class="form-control" id="exampleFormControlInput1" placeholder="   اسم المعدن "  style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="met_price" class="form-control" id="exampleFormControlInput1" placeholder="  سعر المعدن  "  style="width: 400px; text-align:right;">
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
    <th> سعر المعدن</th>
    <th >اسم المعدن  </th
    
  </tr> 
  </thead>
 
   <tbody>
    
  @foreach($data as $met)
  <tr>
    
 
  
  <td><a class="btn btn-info" href="{{url('updataa',$met->id)}}">تعديل</a></td > 
  <td>{{$met->met_price}}</td > 
 <td>{{$met->met_name}}</td >   
    
   
  </tr>
  @endforeach
  <tbody> 

</table>
</center>
</body>
</html>

      </x-app-layout>






