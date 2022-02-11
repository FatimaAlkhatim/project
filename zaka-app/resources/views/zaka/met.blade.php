<x-app-layout>
  <br><br><br>

<center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
                 <div>
                  
                  @foreach($met as $metels)  
                  @if($metels->production_quantity <= 85)
                
                  @if($metels->metels_type == 'ذهب')
                  
                  <h3>{{$metels->production_quantity * 2.5 / 100}}</h3>
                
                  @endif
                  @endif

                  @if($metels->production_quantity <= 595)
                
                @if($metels->metels_type == 'فضه')
                
                <h3>{{$metels->production_quantity * 2.5 /100 }}</h3>
              
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
