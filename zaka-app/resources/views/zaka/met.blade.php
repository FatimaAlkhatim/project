

<x-app-layout>
  <br><br><br>

<center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
                
                  <form action="met,$metels->id">
                  @csrf
                  <div>
                  @if($met->production_quantity >= 85)
                
                  @if($met->metels_type == 'ذهب')
                  
                  <h3> زكاتك{{$met->production_quantity *25/ 2.5 / 100}}</h3>
                
                  @endif
                  @endif

                  @if($met->production_quantity >= 595)
               
                @if($met->metels_type == 'فضه')
                
                <h3> زكاتك {{$met->production_quantity * 322.54/ 2.5 /100 }}</h3>
              
                @endif
                @endif
                
                <table  class="table col-md-6" style="padding-right:60px; ">
<thead>
        <tr >
       
          
            <th >نوع المعدن</th>
            <th> كمية الانتاج </th>
            
          
        </tr>
</thead>
  <tr>
    <td>
    {{$met->metels_type}}    </td>
    <td>
    {{$met->production_quantity }}
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
