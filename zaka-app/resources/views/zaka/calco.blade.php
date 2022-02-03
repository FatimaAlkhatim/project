<x-app-layout>
  <br><br><br>
<center>


<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-success mb-3"> المزارع احسب ذكاتك </a>
 
	<a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary mb-3"> انعام احسب ذكاتك </a>
  <!-- <div class="text-left"style="margin:80px 40px 40px 40px; "> -->
	<a href="#" data-toggle="modal" data-target="#Modal" class="btn btn-secondary mb-3"> معادن احسب ذكاتك </a>
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
  <select  name="state_id" style="width: 400px; text-align:right;" >
  <option >اختر ولايتك</option>

  @foreach ($sta as $state)
  <option ></option>

        <option value="{{ $state->id }}">{{ $state->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary" style="margin-left: 290px;" type="button"><a href="{{url('state')}}">اضف ولايتك</a></button>
</div>
<br>
<div class="mb-3">
  <select  name="local_id" style="width: 400px; text-align:right;" >
  <option >اختر محليتك</option>

  @foreach ($lo as $local)
  <option ></option>

        <option value="{{ $local->id }}">{{ $local->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary" style="margin-left: 290px;" type="button"><a href="{{url('local')}}">اضف محليتك</a></button>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>


<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('اختر  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
    @foreach ($date as $client)
        <option value="{{ $client->id }}">{{ $client->name }}</option>
    @endforeach
</select>
</div>
<br>
<button class="btn btn-info"  style="width:200px; color:white; float:right"  >حفظ</button> 
						
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



<div class="mb-3"> 
<x-label  value="{{ __(' نوع  المعدن ') }}" style="float:right" />
 
<select name="metels_type"style="width: 400px; text-align:right;">
<option>  ذهب   </option>
<option>  فضه </option>
</select>
</div>

<div class="mb-3">
  <select  name="state_id" style="width: 400px; text-align:right;" >
  <option >اختر ولايتك</option>

  @foreach ($sta as $state)
  <option ></option>

        <option value="{{ $state->id }}">{{ $state->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary"style="margin-left: 290px;" type="button"><a href="{{url('state')}}">اضف ولايتك</a></button>
</div>
<br>
<div class="mb-3">
  <select  name="local_id" style="width: 400px; text-align:right;" >
  <option >اختر محليتك</option>

  @foreach ($lo as $local)
  <option > </option>

        <option value="{{ $local->id }}">{{ $local->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary"style="margin-left: 290px;" type="button" ><a href="{{url('local')}}">اضف محليتك</a></button>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>


 
<div class="md-3">
<x-label :value="__('اختر  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
    @foreach ($date as $client)
        <option value="{{ $client->id }}">{{ $client->name }}</option>
    @endforeach
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

<div class="mb-3">
  <select  name="state_id" style="width: 400px; text-align:right;" >
  <option >اختر ولايتك</option>

  @foreach ($sta as $state)
  <option > </option>

        <option value="{{ $state->id }}">{{ $state->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary"style="margin-left: 290px;" type="button"><a href="{{url('state')}}">اضف ولايتك</a></button>
</div>
<br>
<div class="mb-3">
  <select  name="local_id" style="width: 400px; text-align:right;" >
  <option >اختر محليتك</option>

  @foreach ($lo as $local)
  <option></option>

        <option value="{{ $local->id }}">{{ $local->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-outline-secondary" style="margin-left: 290px;" type="button"><a href="{{url('local')}}">اضف محليتك</a></button>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"style="float:right;">كمية الانتاج</label>
  <input type="text" name="production_quantity" class="form-control" id="exampleFormControlInput1" style="width: 400px; text-align:right;">
</div>



<!-- Recipients list -->
<div class="md-3">
<x-label :value="__('اختر  اسمك')" style=" float:right"  />
<select name="client_id" style="width: 400px; text-align:right;">  
    @foreach ($date as $client)
        <option value="{{ $client->id }}">{{ $client->name }}</option>
    @endforeach
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
         <!-- value -->
                <div>
                  
                @foreach($info as $farmeries)
                @if($farmeries->production_quantity >= 653)
              
                @if($farmeries->irrigate_type == 'مطري')
                
                <h3>{{$farmeries->production_quantity * 10 / 100}}</h3>
                

                @elseif($farmeries->irrigate_type == 'الاله')

              
              
                <h3>{{$farmeries->production_quantity * 5 / 100}}</h3>
                @else
                <h3>{{$farmeries->production_quantity * 7.5 / 100}}</h3>

                @endif
                @endif
                
                @endforeach
                </div>
          <!-- end of value div  -->
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