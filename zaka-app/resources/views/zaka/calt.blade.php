
<x-app-layout>
  <br><br><br>

<center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
                 <div>
                  
                  @if($cat->cattleranch_type == 'ابل')

                  @if($cat->cattleranch_amount <=9 )

                  <h3> زكاتك شاة</h3>

                  @elseif($cat->cattleranch_amount <=14 )
                  <h3>  زكاتك شاتان</h3>

                  
                  @elseif($cat->cattleranch_amount <=19 )
                  <h3> زكاتك ثلاث شياه</h3>

                  @elseif($cat->cattleranch_amount <=24 )
                  <h3>  زكاتك اربع شياه</h3>
                  
                  @elseif($cat->cattleranch_amount <=35 )
                  <h3>   زكاتك بنت مخاض</h3>

                  @elseif($cat->cattleranch_amount <=45 )
                  <h3>  زكاتك بنت لبون</h3>

                  @elseif($cat->cattleranch_amount <=60 )
                  <h3>  زكاتك حقه</h3>
                  
                  @elseif($cat->cattleranch_amount <=75 )
                  <h3> زكاتك جذعه </h3>
                  
                  @elseif($cat->cattleranch_amount <=90 )
                  <h3>  زكاتك بنتا لبون </h3>
                  @elseif($cat->cattleranch_amount <=120 )
                  <h3> زكاتك حقتان </h3>
                  @elseif($cat->cattleranch_amount <=129 )
                  <h3> زكاتك  ثلاث بنات لبون </h3>
                  @elseif($cat->cattleranch_amount <=139 )
                  <h3>  زكاتك حقه زايد بنتا لبون</h3>
                  @elseif($cat->cattleranch_amount <=149)
                  <h3>  زكاتك حقتان زايد  بنت لبون </h3>
                  
                  @elseif($cat->cattleranch_amount <=159 )
                  <h3>  زكاتك  ثلاث حقاق  </h3>
                  
                  @elseif($cat->cattleranch_amount <=169 )
                  <h3>  زكاتك   اربع بنات لبون </h3>
                  @elseif($cat->cattleranch_amount <=179 )
                  <h3> زكاتك  ثلا ث بنات لبون  زايد حقه  </h3>
                  
                  @elseif($cat->cattleranch_amount <=189 )
                  <h3>  زكاتك  بنتا لبون  زايد حقتان  </h3>
                  
                  @elseif($cat->cattleranch_amount <=199 )
                  <h3>  زكاتك  ثلا ث حقاق  زايد بنت لبون  </h3>
                  @elseif($cat->cattleranch_amount <=209 )
                  <h3>  زكاتك  اربع حقاق او   خمس بنات لبون  </h3>
                  
                  
                
  
                
                  @endif
                  @endif

                  @if($cat->cattleranch_type == 'بقر')
                  @if($cat->cattleranch_amount <=29 )
                  <h3>   لا زكاة عليها </h3>


                  @elseif($cat->cattleranch_amount <=39 )
                  <h3>   زكاتك  تبيع </h3>
                  @elseif($cat->cattleranch_amount <=59 )
                  <h3>   زكاتك  مسنه </h3>
                  @elseif($cat->cattleranch_amount <=79 )
                  <h3> زكاتك   تبيعان </h3>
                  @elseif($cat->cattleranch_amount <=89 )
                  <h3>  زكاتك   مسنتان </h3>

                  @elseif($cat->cattleranch_amount <=99 )
                  <h3>   زكاتك  ثلاث اتبعه </h3>
                  @elseif($cat->cattleranch_amount <=109 )
                  <h3>  زكاتك   مسنه و تبيعان </h3>
                  @elseif($cat->cattleranch_amount <=119 )
                  <h3>   زكاتك  مسنتان وتبيع </h3>
                  @elseif($cat->cattleranch_amount <=129)
                  <h3> زكاتك  ثلاث مسنات او اربعه اتبعه </h3>

                  @endif
                  @endif
                  

                  @if($cat->cattleranch_type == 'اغنام')
                  @if($cat->cattleranch_amount <=39 )
                  <h3>  لا زكاة عليها </h3>


                  @elseif($cat->cattleranch_amount <=120 )
                  <h3>  زكاتك شاة   </h3>

                  @elseif($cat->cattleranch_amount <=200 )
                  <h3>  زكاتك شاتان   </h3>
                  @elseif($cat->cattleranch_amount <=399 )
                  <h3> زكاتك  ثلاث شياه   </h3>
                  @elseif($cat->cattleranch_amount <=499 )
                  <h3>  زكاتك  اربعه شياه </h3>
                  @elseif($cat->cattleranch_amount <=599 )
                  <h3>  زكاتك خمسة شياه   </h3>


                  @endif
                  @endif
              
                  
                  <table  class="table col-md-6" style="padding-right:60px; ">
<thead>
        <tr >
       
          
            <th >نوع الانعام</th>
            <th>عدد الانعام </th>
            
          
        </tr>
</thead>
  <tr>
    <td>
    {{$cat->cattleranch_type}}
    </td>
    <td>
    {{$cat->cattleranch_amount}}
    </td>
  </tr>
</table>

     
<div class="text-right">
    <a href="{{ route('zaka.payment') }}" class="btn btn-secondary btn-sm"> ادفع زكاتك <i class="fa fa-credit-card"></i> </a>

    </div>
      
                
                  </div>
          
            </div>
            </div>
        </div>
    </div>
    </center>

    
    </x-app-layout>
