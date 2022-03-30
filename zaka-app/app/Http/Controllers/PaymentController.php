<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Payment;
 use App\Models\Selectt;
 use Illuminate\Support\Facades\Auth;
 use App\Models\Farmerie;
 use App\Models\State;
 use App\Models\Local;
 use App\Models\Metels;
 use App\Models\Client;
 use App\Models\Cattleranch;
 use App\Models\Farm;
 use App\Models\Payt;
 use App\Models\Pay;
 use App\Models\Py;
 use RealRashid\SweetAlert\Facades\Alert;

 use DB;
class PaymentController extends Controller
{
    //

    public function payment(){
       
        $user_id = DB::table('clients')->latest()->first('id')->id;
        // dd($user_id->id);
        $farmarie = Farmerie::where('client_id',$user_id)->value('price_kilo');
        // dd($farmarie);
        return view('zaka.payment', compact('farmarie'));
    }
// add  payment
public function addpayment(Request $request){
    
    $date= new Payment;  
    $date->acount_number=$request->acount_number;
    $date->acount_num=$request->acount_num;
    $date->	amount_py=$request->amount_py;
    

    Alert::success('  تهانينا', ' تم دفع زكاتك بنجاح    ');


    
    $date->save();
    
    return redirect()->back();
    
    
    }

    
    public function pay(){
       
        $user_id = DB::table('clients')->latest()->first('id')->id;
        // dd($user_id->id);
        $farm = Farm::where('client_id',$user_id)->value('store');
        // dd($farmarie);
        return view('zaka.pay', compact('farm'));
    }

    public function addpay(Request $request){
    
        $date= new Pay;  
        $date->acount_number=$request->acount_number;
        $date->acount_num=$request->acount_num;
        $date->	amount_py=$request->amount_py;
    
        Alert::success('  تهانينا', ' تم دفع زكاتك بنجاح    ');

        $date->save();
        
        return redirect()->back();
        
        
        }



        public function payt(){
       
            $user_id = DB::table('clients')->latest()->first('id')->id;
            // dd($user_id->id);
            $mett = Metels::where('client_id',$user_id)->value('pricey');
            // dd($farmarie);
            return view('zaka.payt', compact('mett'));
        }
    
        public function addp(Request $request){
        
            $date= new Payt;  
            $date->acount_number=$request->acount_number;
            $date->acount_num=$request->acount_num;
            $date->	amount_py=$request->amount_py;
            Alert::success('  تهانينا', ' تم دفع زكاتك بنجاح    ');

            
            $date->save();
            
            return redirect()->back();
            
            
            }



            public function pys(){
       
               
                return view('zaka.pys');
            }
        
            public function addpys(Request $request){
            
                $date= new Py;  
                $date->acount_number=$request->acount_number;
                $date->acount_num=$request->acount_num;
                $date->	amount_py=$request->amount_py;
            
                Alert::success('  تهانينا', ' تم دفع زكاتك بنجاح    ');

                $date->save();
                
                return redirect()->back();
                
                
                }
    


}
