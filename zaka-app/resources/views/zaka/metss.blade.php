
<x-app-layout>
<center>
    <br><br><br>

	<a href="#" data-toggle="modal" data-target="#Modal" class="btn btn-secondary mb-3"> معادن احسب ذكاتك </a>
    </center>


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









    <center>
      <div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
           
                    <div class="card" style="width: 18rem;">






    <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      زكاة  الذهب والفضه 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      تجب الزكاة على المسلم عند بلوغ ماله النصاب، وهو ما يعادل قيمة 85 غرام من الذهب (عيار 21) بعملة بلده. فهل تملك النصاب؟  - ( 161288 جنيه)

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

 