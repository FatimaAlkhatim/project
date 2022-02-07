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
<center>
<table class="table col-md-6">
  <thead>
  <tr>
  
  <th> التاريخ</th>
  <th> الصوره</th>
    <th>نوع المستحق</th>
    <th> الحاله الاجتماعية</th>
     <th> المحلية</th>
    <th> الولايه</th>
    <th> الموقع</th>
    <th>رقم الهاتف</th>
    <th>الرقم الوطني</th>
    <th >الاسم  </th>
  </tr>
  </thead>
 
  <tbody>
  @foreach($data as $reseivable)
  <tr>
  
  <td>{{$reseivable->created_at}}</td >  
  <td>
  <img src="/uploads/{{
    $reseivable->image}}">
  </td >  
  <td>{{$reseivable->reseivable_type}}</td >  
  <td>{{$reseivable->status}}</td >    
  <td>{{$reseivable->local_id}}</td >   
    <td>{{$reseivable->state_id}}</td>
    <td>{{$reseivable->location}}</td>
    <td>{{$reseivable->iphone}}</td>
    <td>{{$reseivable->national}}</td>
    <td>{{$reseivable->name}}</td>
  </tr>
  @endforeach
  <tbody>

</table>
</center>
</body>
</html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>