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
    <a href="{{ route('dashboard.over') }}" class="btn btn-secondary btn-sm">صفحة الدفع</a>

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
  
<form  action="{{url('addamount')}}" method="post">
    @csrf
    

<div class="mb-3">
  <input type="text" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="  المبلغ أو الوصف"  style="width: 400px; text-align:right;">
</div>
<br>

<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('اختر  الاسم')"  />
<select name="reseivable_id" style="width: 400px; text-align:right;">  
    @foreach ($re as $reseivable)
        <option value="{{ $reseivable->id }}">{{ $reseivable->name }}</option>
    @endforeach
</select>
</div>
<br>

<br>
<button class="btn btn-info" style="width:200px; color:white; " >حفظ</button> 
  </form>
  </center>

<!--  -->



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

<!-- <h2>HTML Table</h2> -->
<center>
<table class="table col-md-6">
<thead>
<tr>


<th >المبلغ  </th>
<th >  الاسم </th>





</tr>
</thead>

<tbody>
@foreach($data as $row)
<tr>


<td>{{$row->amount}}</td>
<td>{{$row->name}}</td>


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