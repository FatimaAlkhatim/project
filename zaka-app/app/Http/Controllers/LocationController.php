<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\State;
use App\Models\Local;

class LocationController extends Controller
{
    public function state(){
        return view('zaka.state');
    }

public function addstate(Request $request){
    $sta= new State;  
    $sta->name=$request->name;
    $sta->save();

    if(Auth::user()->hasRole('user')){
        return redirect('reseivable');
   
       }
       
       elseif(Auth::user()->hasRole('msk')){
        return redirect('index');
        
       
       }         
        // return redirect()->back();
}

    public function local(){
        return view('zaka.local');
    }
    public function addlocal(Request $request){
        $lo= new Local; 
        $lo->name=$request->name;
        $lo->save();
        if(Auth::user()->hasRole('user')){
            return redirect('reseivable');
       
           }
           
           elseif(Auth::user()->hasRole('msk')){
            return redirect('index');
            
           
           } 
            // return redirect('calco');

              
        // return redirect()->back();

    }
    
}
