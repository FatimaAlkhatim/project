<x-app-layout>
  <br><br><br>

<center></center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
                 <div>
                  
                  @foreach($calt as $cattleranches)
                  @if($cattleranches->cattleranch_type == 'ابل')

                  @if($cattleranches->cattleranch_amount <=9 )

                  <h3> شاة</h3>

                  @elseif($cattleranches->cattleranch_amount <=14 )
                  <h3> شاتان</h3>

                  
                  @elseif($cattleranches->cattleranch_amount <=19 )
                  <h3> ثلاث شياه</h3>

                  @elseif($cattleranches->cattleranch_amount <=24 )
                  <h3> اربع شياه</h3>
                  
                  @elseif($cattleranches->cattleranch_amount <=35 )
                  <h3>  بنت مخاض</h3>

                  @elseif($cattleranches->cattleranch_amount <=45 )
                  <h3>  بنت لبون</h3>

                  @elseif($cattleranches->cattleranch_amount <=60 )
                  <h3>  حقه</h3>
                  
                  @elseif($cattleranches->cattleranch_amount <=75 )
                  <h3> جذعه </h3>
                  
                  @elseif($cattleranches->cattleranch_amount <=90 )
                  <h3> بنتا لبون </h3>
                  @elseif($cattleranches->cattleranch_amount <=120 )
                  <h3> حقتان </h3>
                  @elseif($cattleranches->cattleranch_amount <=129 )
                  <h3> ثلاث بنات لبون </h3>
                  @elseif($cattleranches->cattleranch_amount <=139 )
                  <h3> حقه زايد بنتا لبون</h3>
                  @elseif($cattleranches->cattleranch_amount <=149)
                  <h3> حقتان زايد  بنت لبون </h3>
                  
                  @elseif($cattleranches->cattleranch_amount <=159 )
                  <h3>  ثلاث حقاق  </h3>
                  
                  @elseif($cattleranches->cattleranch_amount <=169 )
                  <h3>   اربع بنات لبون </h3>
                  @elseif($cattleranches->cattleranch_amount <=179 )
                  <h3>  ثلا ث بنات لبون  زايد حقه  </h3>
                  
                  @elseif($cattleranches->cattleranch_amount <=189 )
                  <h3>    بنتا لبون  زايد حقتان  </h3>
                  
                  @elseif($cattleranches->cattleranch_amount <=199 )
                  <h3>  ثلا ث حقاق  زايد بنت لبون  </h3>
                  @elseif($cattleranches->cattleranch_amount <=209 )
                  <h3>  اربع حقاق او   خمس بنات لبون  </h3>
                  
                  
                
  
                
                  @endif
                  @endif

                  @if($cattleranches->cattleranch_type == 'بقر')
                  @if($cattleranches->cattleranch_amount <=29 )
                  <h3>  لا زكاة عليها </h3>


                  @elseif($cattleranches->cattleranch_amount <=39 )
                  <h3>   تبيع </h3>
                  @elseif($cattleranches->cattleranch_amount <=59 )
                  <h3>   مسنه </h3>
                  @elseif($cattleranches->cattleranch_amount <=79 )
                  <h3>   تبيعان </h3>
                  @elseif($cattleranches->cattleranch_amount <=89 )
                  <h3>   مسنتان </h3>

                  @elseif($cattleranches->cattleranch_amount <=99 )
                  <h3>   ثلاث اتبعه </h3>
                  @elseif($cattleranches->cattleranch_amount <=109 )
                  <h3>   مسنه و تبيعان </h3>
                  @elseif($cattleranches->cattleranch_amount <=119 )
                  <h3>   مسنتان وتبيع </h3>
                  @elseif($cattleranches->cattleranch_amount <=129)
                  <h3>   ثلاث مسنات او اربعه اتبعه </h3>

                  @endif
                  @endif
                  

                  @if($cattleranches->cattleranch_type == 'اغنام')
                  @if($cattleranches->cattleranch_amount <=39 )
                  <h3>  لا زكاة عليها </h3>


                  @elseif($cattleranches->cattleranch_amount <=120 )
                  <h3>  شاة   </h3>

                  @elseif($cattleranches->cattleranch_amount <=200 )
                  <h3>  شاتان   </h3>
                  @elseif($cattleranches->cattleranch_amount <=399 )
                  <h3>  ثلاث شياه   </h3>
                  @elseif($cattleranches->cattleranch_amount <=499 )
                  <h3>    اربعه شياه </h3>
                  @elseif($cattleranches->cattleranch_amount <=599 )
                  <h3>  خمسة شياه   </h3>


                  @endif
                  @endif
                  


                  @endforeach
                  </div>
            <!-- end of value of farmers  -->


            </div>
            </div>
        </div>
    </div>
    </center>
    </x-app-layout>
