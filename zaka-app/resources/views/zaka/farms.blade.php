<x-app-layout>
<center>
    <br><br><br>
<a href="#" data-toggle="modal" data-target="#add1" class="btn btn-success mb-3"> المزارع المحاصيل التي تكال احسب ذكاتك </a>


<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-success mb-3"> المزارع المحاصيل التي توزن احسب ذكاتك </a>

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
<x-label :value="__(' نوع المحصول   ')" style="float:right;" />
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
<x-label :value="__(' نوع المحصول  ')" style="float:right;" />
<select name="cro_id" style="width: 400px; text-align:right;">
   @foreach($cros as $cro)
   <option value="{{$cro->id}}">{{$cro->cro_name}}</option>
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


















<center>
      <div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
           
                    <div class="card" style="width: 18rem;">








         <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" style="floate:left;" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       زكاة الزروع الثمار     

      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>  الزروع الثمار التي تجب فيها الزكاة 
</strong> 


        الزروع الثمار التي تجب فيها الزكاة 
1- الأقوات الأربعة وهي :(الحنطة والشعير والتمر والزبيب) وهذا مذهب ابن عمر وبعض التابعين مثل الحسن البصري وابن سيرين والشعبي وهو ما رجحه "ابو عبيد في الأموال" وزاد بعض الفقهاء الذرة فأصبحت خمسة أصناف.
2- ما يقتات ويدخر وييبس من الحبوب والثمار: وهو مذهب المالكية والشافعية .والمراد بالمقتات ما يتخذه الناس قوتا في حالة الاختيار لا في الضرورة وعليه لا زكاة في اللوز والبندق والفستق وما شابهها لان ذلك مما لا يقتات الناس به وكذلك لا زكاة في التفاح والرمان ونحوها لأنها مما لا ييبس ولا يدخر .
3- ما يدخر ويكال :وهو مذهب الحنابلة لأن الزكاة تجب فيما جمع هذه الأوصاف الكيل والبقاء واليبس من الحبوب والثمار ولا زكاة في سائر الفواكه والخضر.
4- كل ما ينبت من الأرض : وهو مذهب أبو حنيفة حيث يرى وجوب الزكاة في كل ما أخرج الله من الأرض مما يقصد بزراعته النماء وتستغل به الأرض عادة .ودليل هذا المذهب قوله تعالى: )) ومما أخرجنا لكم من الأرض)) ولم يفرق بين مخرج ومخرج .البقرة الآية 267 وقوله صلى الله عليه وسلم )) وفيما سقت السماء العشر وفيما سقي بالنضج نصف العشر)) من غير ما يبقى وما لا يبقى وما يؤكل وما لا يؤكل وما لا يقتات .
الرأي المرجح والمعمول به ونص عليه قانون الزكاة السوداني لعام 2001م كما جاء في نص المادة (24) فقرة (1) من قانون الزكاة لسنة 2001م (تجب الزكاة في الزروع والثمار بأنواعها). وذلك لأن رأي الإمام أبي حنيفة تعضده نصوص القرآن والسنة التي جاءت عامة غير مقيدة وهو أنفع للفقراء والمساكين ومصارف الزكاة الأخرى .
ما يعمل به الديوان في نصاب زكاة الزروع والثمار:
النصاب يقصد به كمية الإنتاج التي يجب أن يبلغها منتج الزروع أو الثمار لتجب فيها الزكاة وقد حددته السنة النبوية في قوله صلى الله عليه وسلم : (( ليس فيما دون خمسة أوسق صدقة )) . هذا فيما يكال أما التي توزن فقد حدد القانون نصابها ب 653 كيلو جرام اما التي لا تكال ولا توزن فنصابها ما تسوي قيمته خمسة أوسق من أوسط ما يكال ويوزن .
مقدار زكاة الزروع والثمار :
نلاحظ من الأحاديث النبوية أن عمليات الري هي الكلفة التي اعتبرتها السنة دون سواها وجعلتها مناط التفاوت في الحق الواجب على الزرع والثمر لقوله صلى الله عليه وسلم : (( فيما سقت السماء والعيون أو كان عثريا العشر وفيما سقي بالنضج نصف العشر)) .ويؤخذ هذا العشر عينا من المنتجين في مناطق الزراعة المطرية ويؤخذ نصف العشر من المحصولات المروية والأصل هو أخذ الزكاة عينا وتؤخذ نقدا مقومة بالسعر الجاري من الخضر والفاكهة والمحصولات غير القابلة للتخزين .

ولا يشترط الحول في زكاة الزروع والثمار  لقولة تعالى ( وأتوا حقه يوم حصاده ) . الانعام 141 
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