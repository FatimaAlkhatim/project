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




                <center>
  
                <form  action="{{url('addamount')}}" method="post">
    @csrf
    

<div class="mb-3">
  <input type="text" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="  المبلغ أو الوصف"  style="width: 400px; text-align:right;" required >
</div>
<br>

<!-- Recipients list -->
<div class="md-3">
<!-- <x-label :value="__('اختر  الاسم')"  /> -->
<select name="reseivable_id" style="width: 400px; text-align:right; ">  
<option>اختر الاسم</option>

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
<table class="table col-md-6" dir="rtl">
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