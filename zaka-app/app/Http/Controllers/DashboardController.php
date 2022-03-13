<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Reseivable;
use App\Models\Selectt;
use App\Models\State;
use App\Models\Local;
use App\Models\Farmerie;
use App\Models\Payment;
use DB;
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
         return view('admin');
    }
    
    }


    //commmitted
    public function myprofile()
   {
    $data = State::join('reseivables','reseivables.state_id','=','states.id')
    ->join('locals','locals.id','=','reseivables.local_id')
    
    ->get(['states.state_name','locals.local_name','reseivables.name','reseivables.national','reseivables.iphone','reseivables.location','reseivables.status','reseivables.reseivable_type','reseivables.image','reseivables.created_at']);

    return view('myprofile',compact('data'));
   }


   //admin
   public function postcreate()
   {
    $data = State::join('reseivables','reseivables.state_id','=','states.id')
    ->join('locals','locals.id','=','reseivables.local_id')
    
    ->get(['reseivables.id','states.state_name','locals.local_name','reseivables.name','reseivables.national','reseivables.iphone','reseivables.location','reseivables.status','reseivables.reseivable_type','reseivables.image','reseivables.created_at']);

  
    return view('postcreate',compact('data'));
   }


   
//admin 1
public function post()
{

 $data = reseivable::join('selectts','selectts.reseivable_id','=','reseivables.id')
 
 ->get(['selectts.id','reseivables.name','selectts.amount']);

 return view('post',compact('data'));
}


//overseer
   public function  overseer()
   {
    
      $data = State::join('reseivables','reseivables.state_id','=','states.id')
      ->join('locals','locals.id','=','reseivables.local_id')
       ->join('selectts','selectts.reseivable_id','=','reseivables.id')

      ->get(['selectts.amount','states.state_name','locals.local_name','reseivables.name','reseivables.national','reseivables.iphone','reseivables.location','reseivables.status','reseivables.reseivable_type','reseivables.image','reseivables.created_at']);
       $re=reseivable::all();
    
    

    return view(' overseer',compact('data','re'));
   }
   

   
   public function  over()
   {
    
      $pp = Payment::join('selectts','selectts.payment_id','=','payments.id')

      ->get(['selectts.amount','payments.amount_py']);

       
        $sum = Payment::sum('amount_py') - $sum = Selectt::sum('amount');
       
        
      
      

    $tt= Payment::all();

    return view(' over',compact('pp','tt','sum'));
   }

public function report(){
  return view('report');
}
  

   public function addamount(Request $request){
    $mount = new Selectt;
    $mount->payment_id =$request->payment_id ;
      $mount->amount =$request->amount ;
      $mount->reseivable_id =$request->reseivable_id  ;
      $mount->save();                   
      return redirect()->back();
    }



    //delete amount
public function deletesel($id){
  $data=Selectt::find($id);
  $data->delete();
  return redirect()->back();

}


//deleted reseivable

   public function deleteres($id){
     $data=reseivable::find($id);
     $data->delete();
     return redirect()->back();
   }




   //report by crope

   public function crope(){
    $data = Client::join('farmeries','farmeries.client_id','=','clients.id')
  ->get(['clients.name','farmeries.crope_type','farmeries.irrigate_type','farmeries.production_quantity']);
   return view('zaka.crope',compact('data'));
  
     }

     
     public function search(Request  $request){
      $data = Client::where('farmeries.crope_type','like','%' .$request->crope_type.'%')->join('farmeries','farmeries.client_id','=','clients.id')
    ->get(['clients.name','farmeries.crope_type','farmeries.irrigate_type','farmeries.production_quantity']);
     return view('zaka.crope',compact('data'))->withDetails($data);
    
    
       }
}
