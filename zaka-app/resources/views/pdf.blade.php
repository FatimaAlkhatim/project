

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
<table class="table col-md-6">
    <thead>
        <tr>
            <th>كمية الانتاج</th>
            <th>نوع الري</th>
            <th>نوع المحصول</th>
            <th>الاسم</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
         
   
<td>

{{$row->production_quantity}}

</td>
<td>

{{$row->irrigate_type}}

</td>

<td>

{{$row->crope_type}}

</td>

<td>

{{$row->name}}

</td>  
 
        </tr>
        @endforeach
    </tbody>
</table>
</center>



</body>
</html>
</x-app-layout>