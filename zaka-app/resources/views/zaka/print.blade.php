

<x-app-layout>
    <br><br><br><br>
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
<center>

    <div class="mb-6"> 
  <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="  التاريخ"   style="width: 400px; text-align:right;">
</div>
    <br>
<table class="table col-md-6">
    <thead>
        <tr>
      
            <th>عدد الانعام </th>
            <th>نوع الانعام</th>
            <th>الاسم</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
         
   

<td>

{{$row->cattleranch_amount}}

</td>

<td>

{{$row->cattleranch_type}}

</td>

<td>

{{$row->name}}

</td>  
        </tr>
        @endforeach
    </tbody>
</table>
</center>
</x-app-layout>