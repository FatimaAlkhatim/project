<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Crope;
use App\Models\Met;
use App\Models\Client;
use App\Models\Reseivable;
use App\Models\Farmerie;
use App\Models\State;
use App\Models\Local;
use App\Models\Metels;
use App\Models\Cattleranch;
use App\Models\Acount;
use App\Models\Farm;
use App\Models\Cro;
use DB;


class OptionController extends Controller
{
    public function cropety(){
        $data=Crope::all();

        return view('zaka.cropety',compact('data'));
    }

    public function addcropety(Request $request){
        $cro= new Crope;  
        $cro->crope_name=$request->crope_name;
        $cro->crope_price=$request->crope_price;

        $cro->save();
        return redirect()->back();
    }


    public function metty(){
        $data=Met::all();

        return view('zaka.metty',compact('data'));
    }
    public function addmetty(Request $request){
        $mett= new Met;  
        $mett->met_name=$request->met_name; 
        $mett->met_price=$request->met_price;
        $mett->save();
        return redirect()->back();

    }

    
//show client farmerie meteles catttleranch state and local in  calco
public function calco($id){
    $clients=Client::where('id', Auth::id())->where('id', $id)->firstOrFail();
    $date=Client::find('id');
    
    $sta=State::all();
    $lo=Local::all();
    $info=Farmerie::all();
    $met=Metels::all();
    $cat=Cattleranch::all();
    $data=Crope::all();
    $data=Met::all();
    
    return view('zaka.calco',compact('date','sta','lo','info','met','cat','data'));
    }

    public function count(){

        $data = Client::join('acounts','acounts.client_id','=','clients.id')
    
      ->get(['clients.name','acounts.acount_number','acounts.acount','acounts.bank']);

        
        $cli=Client::all();
    
        return view('zaka.count',compact('data','cli'));
    }

    public function addcount(Request $request){
        $count= new Acount;   
        $count->client_id=$request->client_id;
        $count->acount_number=$request->acount_number;
        $count->acount=$request->acount;
        $count->bank=$request->bank;


        $count->save();

        return redirect()->back();
    }


    public function updataview($id){
        $data=crope::find($id);
        return view('zaka.updataview',compact('data'));
    }

    public function updatacrope( Request $request, $id){
        $data=crope::find($id);
        $data->crope_name=$request->crope_name;
        $data->crope_price=$request->crope_price;

        $data->save();
        return redirect()->back();

    }
   
    public function updataa($id){
        $data=met::find($id);
        return view('zaka.updataa',compact('data'));
    }

    public function  updatamett( Request $request, $id){
        $data=met::find($id);
        $data->met_name=$request->met_name;
        $data->met_price=$request->met_price;

        $data->save();
        return redirect()->back();
    


    }

    // public function zahap(){
    //     return view('zaka.zahap');
    // }

    
public function farm(){
   $date= Client::all();
    
   
   $crops=Crope::all();

    return view('zaka.farm',compact('date','crops'));
}

//add farmerie
public function addfar(Request $request){
   
    $kilo = Cro::where('id',$request->cro_id)->value('cros.cro_price');

    $inname = $request->irrigate_type;
    // dd($inname);
    if($inname == 'مطري' && $request->production_quantity >= 600)
    {
       
        $kilo = $kilo / 10 / 100 ;
    
    
    }
    
    elseif($inname == 'الاله' && $request->production_quantity >= 600){
        
        $kilo = $kilo / 5 /100 ;
    
    }
    elseif($inname == 'تكميلي' && $request->production_quantity >= 600){
        
        $kilo = $kilo / 7.5 / 100 ;
    }
    
    else{
        $kilo = 0;
    }
    
    $price = $kilo * $request->production_quantity ;
    // dd($price);
    $far= new Farm; 
    $far->projct_id=$request->projct_id;
    $far->projct_id=$request->projct_id;
    $far->area=$request->area; 
    $far->location=$request->location;
    $far->cro_id=$request->cro_id;
    $far->irrigate_type=$request->irrigate_type;
    $far->production_quantity=$request->production_quantity;
    $far->client_id=$request->client_id;
    $far->store=$price;   
    
    $far->save();

    $user_id = DB::table('clients')->latest()->first('id')->id;
    // dd($user_id->id);
    $farr = Cro::where('id',$request->cro_id)->value('cros.cro_name');
    // dd($farr);
    
    return view('zaka.comp',compact('far','farr'));
}

//account of farm
public function comp($id){
    $farms= Farm::where('id', Auth::id())->where('id', $id)->firstOrFail();
    
    $far=Farm::find('id');
    
    
    return view('zaka.comp',compact('far'));
    }

   





    public function cro(){
        $data=Cro::all();

        return view('zaka.cro',compact('data'));
    }

    public function addcro(Request $request){
        $cro= new Cro;  
        $cro->cro_name=$request->cro_name;
        $cro->cro_price=$request->cro_price;

        $cro->save();
        return redirect()->back();
    }



    public function updatashow($id){
        $data=cro::find($id);
        return view('zaka.updatashow',compact('data'));
    }

    

    public function  updatacro( Request $request, $id){
        $data=cro::find($id);
        $data->cro_name=$request->cro_name;
        $data->cro_price=$request->cro_price;

        $data->save();
        return redirect()->back();

    }

}
