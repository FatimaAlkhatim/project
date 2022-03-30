

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
    <div class="print">
<center>
<h5><u> الامانة العامة لديوان الزكاة   </u></h5>
    <br>
    <h5><u>   تقرير  عن المعادن   في الفتره </u></h5>
 





    <div  class="text-right " style="padding-right:60px;">
    <button  class="print-btn btn btn-info">اطبع</button></div>
    <form action="/Search_invoicess" method="POST" role="search" autocomplete="off">
@csrf
<div class="col-lg-3" id="start_at">
                            <label for="exampleFormControlSelect1">من تاريخ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div><input class="form-control " value="{{ $start_at ?? '' }}"
                                    name="start_at" placeholder="YYYY-MM-DD" type="date">
                            </div><!-- input-group -->
                        </div>

                        <div class="col-lg-3" id="end_at">
                            <label for="exampleFormControlSelect1">الي تاريخ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div><input class="form-control " name="end_at"
                                    value="{{ $end_at ?? '' }}" placeholder="YYYY-MM-DD" type="date">
                            </div><!-- input-group -->
                        </div>
                        <br>
                        <button class="btn btn-info btn-lg">عرض</button>
                </form>

          

    <!-- <a href="{{ route('export') }}" class="btn btn-success btn-sm">Export to PDF</a> -->
<br>
<table class="table col-md-6">
    <thead>
        <tr>
 
            <th>كمية الانتاج</th>
            <th>نوع المعدن</th>
          
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

{{$row->met_name}}

</td>  

<td>

{{$row->name}}

</td>  
        </tr>
        @endforeach
    </tbody>
</table>
</center>
</div>


<script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.print-window').click(function()
        
        {

          window.print();

        });
        
      
    });
</script>


<script>
 $(document).on('click','.print-btn',function(){
    $('.print').printThis();
});
</script>

</x-app-layout>