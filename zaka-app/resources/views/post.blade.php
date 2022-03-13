<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for New Blog post') }}
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
  <th>العمليات</th>

  <th >المبلغ  </th>
  <th >  الاسم </th>

  <th >الرقم  </th>

    

  </tr>
  </thead>
 
  <tbody>
  @foreach($data as $row)
  <tr>
  <td><a href="{{url('deletesel',$row->id)}}" class="btn btn-danger">حذف</a></td > 

    <td>{{$row->amount}}</td>
    <td>{{$row->name}}</td>

    <td>{{$row->id}}</td>
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