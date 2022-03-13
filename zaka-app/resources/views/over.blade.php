<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">




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

<!-- <h2>HTML Table</h2> -->
<!-- <center>
<table class="table col-md-6">
<thead>
<tr>


<th >المبلغ  </th>




</tr>
</thead>

<tbody> -->
<!-- @foreach($pp as $row)
<tr>

<td>{{$row->amount}}</td>

</tr>




@endforeach
<tbody> -->




</table>



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

<!-- <h2>HTML Table</h2> -->
<center>
<table class="table col-md-6">
  <thead>
  <tr>
  
  
  <th> رقم البطاقه</th>
    <th> البطاقه</th>
    <th> رقم الهاتف</th>
    <th >المبلغ  </th>
    

    
    
  </tr>
  </thead>
 
  <tbody>
  @foreach($tt as $payment)
  <tr>
  
 
  
     <td>{{$payment->card_number}}</td >  
      <td>{{$payment->card_num}}</td >    
     
    <td>{{$payment->iphone_py}}</td>
    <td>{{$payment->amount_py}}</td>
  
  </tr>
 
     
       
  @endforeach
  
       
       
 
  @php
  echo 'payment','','', $sum ;
  @endphp
      
  
         
  <tbody>

</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>