<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">




                <center>
  
                <form  action="{{url('updatatt',$data->id )}}" method="post">
    @csrf
    

<div class="mb-3">
  <input type="text" name="amount" class="form-control" id="exampleFormControlInput1"value="{{$data->amount}}" style="width: 400px; text-align:right;">
</div>
<br>


<br>

<button class="btn btn-info" style="width:200px; color:white; " >حفظ</button> 
  </form>
  </center>

<!--  -->





                </div>
            </div>
        </div>
    </div>
</x-app-layout>