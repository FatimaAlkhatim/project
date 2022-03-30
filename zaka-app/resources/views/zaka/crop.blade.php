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
                <div class="print">
<center>
    <h5><u> الامانة العامة لديوان الزكاة   </u></h5>
    <br>
    <h5><u>   تقرير عن الزروع   حسب نوع المحاصيل التي تكال   </u></h5>
  
    

    
    <div  class="text-right " style="padding-right:60px;">
    <button  class="print-btn  btn btn-info">اطبع</button>

</div>
  
    <form  action="/searchs" method="post">
    @csrf

<!-- Recipients list -->
<div class="mb-3 " >
<x-label :value="__(' انواع المحاصيل')"  />
<select name="cro_id" id="cro_id" style="width: 400px; text-align:right;">  
@foreach($data as $row)
        <option value="{{$row->id}}">{{$row->cro_name}}</option>
    @endforeach
</select>
</div>
<center>
<table class="table col-md-6" style="padding-right:60px;  text-align:center; ">
<thead>
<tr>
<th>كمية الانتاج</th>
<th>نوع الري</th>
<th>نوع المحصول</th>
<th>الاسم</th>
<th>رقم المحصول</th>
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
{{$row->cro_name}}
</td>

<td>
{{$row->name}}
</td>  
<td>
{{$row->id}}
</td>  
 
</tr>
@endforeach
</tbody>
</table>
</center>
<br>
<!-- <input type="text" id="crope_id" name="crope_id"  style=" text-align:right;"> -->
<br>
<br>
<button class="btn btn-info btn-lg">عرض</button>
</form>
</center>

<script>
 $(document).on('click','.print-btn',function(){
    $('.print').printThis();
});
</script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout> 