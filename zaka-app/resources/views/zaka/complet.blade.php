
<x-app-layout>
  <br><br><br>

<center>
<div class="py-12 mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!-- value of farmers -->
                 <div>
                   <!DOCTYPE html>
                   <html lang="en">
                   <head>
                     <meta charset="UTF-8">
                     <meta http-equiv="X-UA-Compatible" content="IE=edge">
                     <meta name="viewport" content="width=device-width, initial-scale=1.0">
                     <title>Document</title>
                   </head>
                   <body>
              
                  <h3>زكاتك  {{$info->price_kilo }} جنيه</h3>
                
                 
                
               

<table  class="table col-md-6" style="padding-right:60px;">
<thead>
        <tr>
       
            <th>كمية الانتاج</th>
            <th>نوع الري</th>
            <th> نوع المحصول</th>

            
          
        </tr>
</thead>
  <tr>
    <td> {{$info->production_quantity }}</td>
    <td>
    {{$info->irrigate_type }}
    </td>
    <td>
    {{$fa }}
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
