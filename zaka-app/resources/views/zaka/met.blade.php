

<x-app-layout>
  <br><br><br>

<center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
               
                 
                  <div>
                  
                
                 
                  
                  <h3> زكاتك{{$me->pricey}} جنيه</h3>
   
<br>
                  
                <table  class="table col-md-6" style="padding-right:60px; ">
<thead>
        <tr >
       
          
            <th> كمية الانتاج </th>
            
            <th >نوع المعدن</th>
          
        </tr>
</thead>
  <tr>
   
    <td>
    {{$me->production_quantity }}
    </td>
  
  <td>
  {{$mett}}
  </td>
</tr>
</table>






<div class="text-right">
    <a href="{{ route('zaka.payt') }}" class="btn btn-secondary btn-sm"> ادفع زكاتك <i class="fa fa-credit-card"></i> </a>

    </div>


                  
                  </div>
            </div>
            </div>
        </div>
    </div>
    </center>

    </x-app-layout>
