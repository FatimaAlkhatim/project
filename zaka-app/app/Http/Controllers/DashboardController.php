<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Reseivable;
use App\Models\Selectt;
class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
             return view('dashboard');
        
            }elseif(Auth::user()->hasRole('msk')){
              return view('msk');
             
            
            }elseif(Auth::user()->hasRole('overseer')){
             return view('relt');
            }elseif(Auth::user()->hasRole('committee')){
                return view('relt');
        }elseif(Auth::user()->hasRole('admin')){
         return view('relt');
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
     $date=Selectt::all();

    return view('postcreate',compact('data','date'));
   }
   public function  overseer()
   {
     $data=reseivable::all();
     $date=Selectt::all();

    return view(' overseer',compact('data','date'));
   }
  //  public function sel( ){
  //   $data=reseivable::all();
  //   return view(' overseer',compact('data'));
  //  }
  
   public function addamount(Request $request){
    $mount = new Selectt;
      $mount->amount =$request->amount ;
      $mount->reseivable_id =$request->reseivable_id;
      $mount->save();                   
      return redirect()->back();
    }
public function deletesel($id){
  $date=Selectt::find($id);
  $date->delete();
  return redirect()->back();

}

   public function deleteres($id){
     $data=reseivable::find($id);
     $data->delete();
     return redirect()->back();
   }
}
