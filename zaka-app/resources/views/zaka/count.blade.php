<x-app-layout>
<br> <br>
<center>
<form  action="{{url('addcount')}}" method="post">
    @csrf


<!-- Recipients list -->
<div class="md-3">
<!-- <x-label :value="__('اختر  الاسم')"  / > -->
<select name="client_id" style="width: 400px; text-align:right;">  
<option >اختر الاسم</option>

    @foreach ($cli as $client)
        <option value="{{ $client->id }}">{{ $client->name }}</option>
    @endforeach
</select>

</div>
<br>

<div class="mb-6">
  <input type="text" name="acount_number" class="form-control" id="exampleFormControlInput1" placeholder="  رقم الحساب   "  style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="acount" class="form-control" id="exampleFormControlInput1" placeholder="  الرصيد   "  style="width: 400px; text-align:right;">
</div>

<br>
<div class="mb-6">
  <input type="text" name="bank" class="form-control" id="exampleFormControlInput1" placeholder="  البنك   "  style="width: 400px; text-align:right;">
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
  <th> البنك </th>
  <th> الرصيد </th>

    <th> رقم الحساب</th>
    <th >الاسم  </th>
    
  </tr> 
  </thead>
 
   <tbody>
    
  @foreach($data as $row)
  <tr>
    
 
  
  
  <td>{{$row->bank}}</td > 
  <td>{{$row->acount}}</td > 
  <td>{{$row->acount_number}}</td > 
 <td>{{$row->name}}</td >   
    
   
  </tr>
  @endforeach
  <tbody> 

</table>
</center>
</body>
</html>

      </x-app-layout>






