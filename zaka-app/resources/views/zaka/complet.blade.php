<x-app-layout>
  <br><br><br>

<center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
                 <div>
                  
                  @foreach($info as $farmeries)
                  @if($farmeries->production_quantity <= 653)
                
                  @if($farmeries->irrigate_type == 'مطري')
                  
                  <h3> وزن{{$farmeries->production_quantity * 10 / 100 }}</h3>
                
  
                  @elseif($farmeries->irrigate_type == 'الاله')
                
                  <h3> وزن{{$farmeries->production_quantity * 5 / 100 }}</h3>
                  @else
                  <h3> وزن{{$farmeries->production_quantity * 7.5 / 100}}</h3>
  
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
