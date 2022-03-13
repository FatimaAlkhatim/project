<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Payment;
 use App\Models\Selectt;
 use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //

    public function payment(){

        return view('zaka.payment');
    }
// add  payment
public function addpayment(Request $request){
    $date= new Payment;  
    $date->card_number=$request->card_number;
    $date->card_num=$request->card_num;
    $date->iphone_py=$request->iphone_py;
    $date->amount_py=$request->amount_py; 
   

    
    $date->save();
    
    return redirect()->back();
    
    
    }

    
 

}
