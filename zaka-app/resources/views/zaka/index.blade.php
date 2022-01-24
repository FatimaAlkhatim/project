<x-app-layout>

<center>
<form  action="{{url('addclient')}}" method="post">
    @csrf
<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الرقم</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="width: 500px;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الاسم</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<!-- <div class="mb-3"> 
  <label for="exampleFormControlInput1"  class="form-label">  البريد الالكتروني</label>
  <input type="email" name="email "class="form-control" id="exampleFormControlInput1"  style="width: 500px; text-align:right;">
</div> -->
<div class="mb-3"> 
  <label for="exampleFormControlInput1" style=";" class="form-label"> الرقم الوطني</label>
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الرقم الهاتف</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الولايه</label>
  <input type="text" name="state" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">المحلية</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>



<div class="mb-3">
  <x-label  value="{{ __(' نوع المذكي') }}" />
                            <select name="client_type"style="width: 400px; text-align:right;">
                        

                                <option>          مزارع       </option>

                                <option>معادن</option>
                                <option>انعام </option>
                            </select>
</div>
<button class="btn btn-info" style="width:200px; color:white;" >حفظ</button> 

<br><br><br>
<div >
	<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-success mb-3"> المزارع احسب ذكاتك </a>
 
	<a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary mb-3"> انعام احسب ذكاتك </a>
  <!-- <div class="text-left"style="margin:80px 40px 40px 40px; "> -->
	<a href="#" data-toggle="modal" data-target="#Modal" class="btn btn-secondary mb-3"> معادن احسب ذكاتك </a>
</div>
</form>
</center>
<br><br>




<div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">  
                <div class="modal-header"> 
                {{Auth::user()->name}}
    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                    <form  action="{{url('addfarm')}}" method="post">
    @csrf

  <!-- <label for="exampleFormControlInput1"  class="form-label">   الاسم</label>
  <input type="text" name="name "class="form-control" id="exampleFormControlInput1"  style="width: 500px; text-align:right;"> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">رقم المشروع</label>
  <input type="text" name="projct_id" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> المساحه</label>
  <input type="text" name="area" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">الموقع</label>
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">نوع المحصول</label>
  <input type="text" name="crope_type" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3"> 
<x-label  value="{{ __(' نوع الري') }}" style="float:right" />
 
<select name="irrigate_type"style="width: 400px; text-align:right;">
<option>  مطري   </option>
<option>  الاله </option>
<option>تكميلي </option>
</select>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="float:right;">الولايه</label>
  <input type="text" name="state" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="float:right;">المحلية</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">قيمة الانتاج</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>


<button class="btn btn-info" style="float:center;" >حفظ</button> 
						
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div>


      <div id="Modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">  
                <div class="modal-header"> 
                {{Auth::user()->name}}

    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                    <form  action="" method="post">
    @csrf
<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الرقم</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="width: 500px;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">رقم المشروع</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<!-- <div class="mb-3"> 
  <label for="exampleFormControlInput1"  class="form-label">  البريد الالكتروني</label>
  <input type="email" name="email "class="form-control" id="exampleFormControlInput1"  style="width: 500px; text-align:right;">
</div> -->
<div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> المساحه</label>
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">الموقع</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">نوع المحصول</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3"> 
<x-label  value="{{ __(' نوع الري') }}" style="float:right" />
 
<select name="client_type"style="width: 400px; text-align:right;">
<option>  مطري   </option>
<option>  الاله </option>
<option>تكميبي </option>
</select>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="float:right;">الولايه</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="float:right;">المحلية</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">قيمة الانتاج</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>


<button class="btn btn-info" style="float:center;" >حفظ</button> 				
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div>


      <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">  
                <div class="modal-header"> 
                {{Auth::user()->name}}

    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                    <form  action="" method="post">
    @csrf
<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">الرقم</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="width: 500px;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">رقم المشروع</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<!-- <div class="mb-3"> 
  <label for="exampleFormControlInput1"  class="form-label">  البريد الالكتروني</label>
  <input type="email" name="email "class="form-control" id="exampleFormControlInput1"  style="width: 500px; text-align:right;">
</div> -->
<div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> المساحه</label>
  <input type="text" name="national" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">الموقع</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">نوع المحصول</label>
  <input type="text" name="iphone" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3"> 
<x-label  value="{{ __(' نوع الري') }}" style="float:right" />
 
<select name="client_type"style="width: 400px; text-align:right;">
<option>  مطري   </option>
<option>  الاله </option>
<option>تكميبي </option>
</select>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="float:right;">الولايه</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="float:right;">المحلية</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">قيمة الانتاج</label>
  <input type="text" name="local" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>


<button class="btn btn-info" style="float:center;" >حفظ</button> 					
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div>



      </x-app-layout>