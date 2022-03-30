<x-app-layout>
  <br><br><br>
<center>
<h3>احسب زكاتك</h3>
<br>
<!-- <button >

<a href="{{ route('zaka.farm') }}"  class="btn btn-success mb-3">  المزارع  المحاصيل التي تكال احسب ذكاتك </a>

</button> -->
<!-- <a href="#" data-toggle="modal" data-target="#add1" class="btn btn-success mb-3"> المزارع المحاصيل التي تكال احسب ذكاتك </a>


<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-success mb-3"> المزارع المحاصيل التي توزن احسب ذكاتك </a> -->

	<a href="#" data-toggle="modal" data-target="#add" class="btn btn-info mb-3"> انعام احسب ذكاتك </a>
  <!-- <div class="text-left"style="margin:80px 40px 40px 40px; "> -->
	<!-- <a href="#" data-toggle="modal" data-target="#Modal" class="btn btn-secondary mb-3"> معادن احسب ذكاتك </a> -->
</center>






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

  
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">رقم المشروع</label>
  <input type="text" name="projct_id" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> المساحه</label>
  <input type="text" name="area" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">العنوان</label>
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">نوع المحصول</label>
  <input type="text" name="crope_type" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div> -->

<!-- Recipients list -->
<div class="md-3">
<x-label :value="__(' اختر  ')" style="float:right;" />
<select name="crope_id" style="width: 400px; text-align:right;">
   @foreach($crops as $crop)
   <option value="{{$crop->id}}">{{$crop->crope_name}}</option>
   @endforeach
</select>
</div>
<br>

<div class="mb-3"> 
<x-label  value="{{ __(' نوع الري') }}" style="float:right" />
 
<select name="irrigate_type" style="width: 400px; text-align:right;">
<option value="مطري">  مطري   </option>
<option value="الاله">  الاله </option>
<option value="تكميلي"> تكميلي </option>
</select>
</div>

<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> سعر الكيلو</label>
  <input type="text" name="price_kilo" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<br>
<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
    
        <option value="{{ $date->id }}">{{ $date->name }}</option>
    
</select>

</div>

<br>


<button class="btn btn-info"  style="width:200px; color:white; float:right">حفظ


</button> 
						
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div> 



<!-- farm 2222222222222222222222222222222222222 -->


<div id="add1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">  
                <div class="modal-header"> 
                {{Auth::user()->name}}
    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                    <form  action="{{url('addfar')}}" method="post">
    @csrf

  
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">رقم المشروع</label>
  <input type="text" name="projct_id" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> المساحه</label>
  <input type="text" name="area" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">العنوان</label>
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">نوع المحصول</label>
  <input type="text" name="crope_type" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div> -->

<!-- Recipients list -->
<div class="md-3">
<x-label :value="__(' اختر  ')" style="float:right;" />
<select name="crope_id" style="width: 400px; text-align:right;">
   @foreach($crops as $crop)
   <option value="{{$crop->id}}">{{$crop->crope_name}}</option>
   @endforeach
</select>
</div>
<br>

<div class="mb-3"> 
<x-label  value="{{ __(' نوع الري') }}" style="float:right" />
 
<select name="irrigate_type"style="width: 400px; text-align:right;">
<option>  مطري   </option>
<option>  الاله </option>
<option>تكميلي </option>
</select>
</div>

<!-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> سعر الكيلو</label>
  <input type="text" name="price_kilo" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>
<br>
<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
    
        <option value="{{ $date->id }}">{{ $date->name }}</option>
    
</select>

</div>

<br>


<button class="btn btn-info"  style="width:200px; color:white; float:right">حفظ


</button> 
						
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div> 





<!-- model                      -->
       <div id="Modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">  
                <div class="modal-header"> 
                {{Auth::user()->name}}

    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                    <form  action="addmet" method="post" enctype="multipart/form-data" id="intervention-image-upload">
    @csrf

    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">صوره عقد الايجار</label>
  <input type="file" name="project_image" id="project_image" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>



<div class="mb-3"> 
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> العنوان</label>
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1"  style="width: 400px; text-align:right;">
</div>


<!-- Recipients list -->
<div class="md-3">
<x-label :value="__(' اختر  ')" style="float:right;" />
<select name="met_id" style="width: 400px; text-align:right;">
    @foreach ($me as $met)
        <option value="{{$met->id }}">{{ $met->met_name }}</option>
    @endforeach
</select>
</div>


<!-- <div class="mb-3"> 
<x-label  value="{{ __(' نوع  المعدن ') }}" style="float:right" />
 
<select name="metels_type"style="width: 400px; text-align:right;">
<option>  ذهب   </option>
<option>  فضه </option>
</select>
</div> -->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>


 
<div class="md-3">
<x-label :value="__('  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
 
        <option value="{{ $date->id }}">{{ $date->name }}</option>
   
</select>
</div>
<br>
<button class="btn btn-info"style="width:200px; color:white; float:right"  >حفظ</button> 				
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
                    <form  action="addcat" method="post">
    @csrf


<div class="mb-3"> 
<x-label  value="{{ __(' نوع  الانعام') }}" style="float:right" />
 
<select name="cattleranch_type" style="width: 400px; text-align:right;">
<option>  ابل   </option>
<option>  بقر </option>
<option>اغنام </option>
</select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;"> عدد الانعام</label>
  <input type="text" name="cattleranch_amount" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">العنوان  </label>
  <input type="text" name="location" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>



<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
  
        <option value="{{ $date->id }}">{{ $date->name }}</option>
   
</select>
</div>
<br>
<button class="btn btn-info" style="width:200px; color:white; float:right"  >حفظ</button> 					
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div> 
      
<center>
      <div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
           
                    <div class="card" style="width: 18rem;">








  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      زكاة الانعام 
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!-- <strong>This is the second item's accordion body.</strong>  -->


        
يمكن دفع الزكاة الواجبة نقدا (القيمة السوقية في مكان وجود الإبل )

 علما بأن بنت مخاض هي التي جاوز عمرها السنة

 وبنت لبون هي التي جاوز عمرها السنتين

 أما الحقة فهي التي جاوز عمرها 3 سنوات

 والجذعه وهي التي جاوز عمرها 4 سنوات
 

نصاب الابل : لا تجب الزكاة فيما دون الخمسة من الإبل .
نصاب البقر : لا تجب الزكاة فيما دون الثلاثين من البقر .
نصاب الماعز :  لا تجب الزكاة فيما دون الأربعين من الغنم .

(التبيع)  وهو ما أتم من البقر سنة ودخل في الثانية ذكرا كان ام انثى

(المسنة)  وهي أنثى البقر التي اتمت سنتين ودخلت في الثالثة.

يجب أن تكون الشاة سليمة خالية من العيوب ويكون عمرها ستة أشهر أو أكثر
      </div>
    </div>
  </div>
  
  




</div>
                </div>
            </div>
        </div>
    </div>
    </center>

</x-app-layout>