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
               
                <div class="text-right">
    <a href="{{ route('dashboard.over') }}" class="btn btn-secondary btn-sm">صفحة التوزيع</a>

    </div>


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
  
  <th> التاريخ</th>
  <th> الصوره</th>
  
    <th>نوع المستحق</th>
    <th> الحاله الاجتماعية</th>
  
    <th> الموقع</th>
    <th>رقم الهاتف</th>
    <th>الرقم الوطني</th>
    <th> المحلية</th>
    <th> الولايه</th>
    <th >الاسم  </th>
    

    
    
  </tr>
  </thead>
 
  <tbody>
  @foreach($data as $row)
  <tr>
  
  <td>{{$row->created_at}}</td >  
  <td>
  <img src="/uploads/{{
    $row->image}}">
  </td > 
   
     <td>{{$row->reseivable_type}}</td >  
      <td>{{$row->status}}</td >    
     
    <td>{{$row->location}}</td>
    <td>{{$row->iphone}}</td>
    <td>{{$row->national}}</td>
    <td>{{$row->local_name}}</td>
    <td>{{$row->state_name}}</td>
    <td>{{$row->name}}</td >   
   
  </tr>
  @endforeach
  <tbody>

</table>
</center>
</body>
</html>

<br><br><br>

<center>
  



                </div>
            </div>
        </div>
    </div>
</x-app-layout>