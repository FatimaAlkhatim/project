<x-app-layout>

        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <h3><a href="{{url('/messages')}}" style= "color:black;  padding:500px;float:center">صفحة الرسائل</a></h3>

        </h2> -->
   

    <div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- You're logged in! -->

<div class="row">
  <div class="col-sm-6 ">
    <div class="card  text-dark bg-secondary ">
    <div class="card-header" style="text-align:center;"> ....خدمات المذكين</div>

      <div class="card-body">
      <h5 style="text-align:center;"><a href="{{ url('index') }}" style="color:white; ">الذهاب الي خدمات المذكين</a></h5>
        <p class="card-text"style="  text-align:right;">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-white bg-success">
    <div class="card-header" style="text-align:center;">....خدمات المستحقين</div>

      <div class="card-body">
      <h5 style="text-align:center;"><a href="{{ url('reseivable') }}" style="color:white;  text-align:center;">الذهاب الي خدمات المستحقين</a></h5>
        <p class="card-text"style="  text-align:right;">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
