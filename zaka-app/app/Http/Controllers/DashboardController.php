<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Reseivable;
class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
             return view('dashboard');
        
            }elseif(Auth::user()->hasRole('msk')){
              return view('msk');
             
            
            }elseif(Auth::user()->hasRole('overseer')){
             return view('dashboard');
            }elseif(Auth::user()->hasRole('committee')){
                return view('dashboard');
        }elseif(Auth::user()->hasRole('admin')){
         return view('dashboard');
    }
    
    }
    public function myprofile()
   {
     $data=reseivable::all();
    return view('myprofile',compact('data'));
   }

   public function postcreate()
   {
     $data=reseivable::all();

    return view('postcreate',compact('data'));
   }
   public function  overseer()
   {
     $data=reseivable::all();
    return view(' overseer',compact('data'));
   }
  

   public function deleteres($id){
     $data=reseivable::find($id);
     $data->delete();
     return redirect()->back();
   }
}
