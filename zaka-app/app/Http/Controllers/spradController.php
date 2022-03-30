<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Metels;
use App\Models\Cattleranch;
use App\Models\reseivable;
use App\Models\Crope;
use App\Models\Met;
use App\Models\Client;
use DB;
class spradController extends Controller
{


    public function indd( ){
              
        $date=Client::all();
        $date=Metels::all();

       return view('zaka.calco',compact('date'));
       
           }


    public function addmet(Request  $request){

// dd($mett);


        $kilo = Met::where('id',$request->met_id)->value('mets.met_price');
        $metname = Met::where('id',$request->met_id)->value('mets.met_name');
        if($metname == 'ذهب' && $request->production_quantity >= 85 )
        {
           
                $kilo = $kilo / 2.5 ;

        }
        elseif($metname == 'فضه' && $request->production_quantity >= 595 )
        {
           
                $kilo = $kilo / 2.5 ;

        }
        else{
            $kilo = 0;
        }
        $price = $kilo * $request->production_quantity ;

// $price_kilo = Crope::where('id',$request->crope_id)->get('crope_price');
// dd($metname);
        $me= new Metels; 
    
        if($request->hasFile('project_image')){
            $project_image = $request->file('project_image');
            $filename = time() . '.' . $project_image->getClientOriginalExtension();
            Image::make($project_image)->resize(100, 100)->save( public_path('uploads/' . $filename ) );
            $met->image = $filename;
         }else{
                  $filename='default.png';
              }
        $me->image = $filename;
        $me->location =  $request->location;
        $me->met_id=$request->met_id;
      
        $me->production_quantity=$request->production_quantity;
    
        $me->client_id=$request->client_id;
        $me->pricey=$price;   
        $me->save();
                  
    

        $user_id = DB::table('clients')->latest()->first('id')->id;
        // dd($user_id->id);
        $mett = Met::where('id',$request->met_id)->value('mets.met_name');
        // dd($mett);

        return view('zaka.met',compact('me','mett'));
    }

    public function met($id){
        // $user = Auth::user(); // Retrieve the currently authenticated user...
        // $id = Auth::id(); // Retrieve the currently authenticated user's ID...
    
        $met=Metels::where('id', Auth::id())->where('id', $id)->firstOrFail();
       
         $met=Metels::find('id');
         $user_id = DB::table('clients')->latest()->first('id')->id;
         // dd($user_id->id);
         $mett = Met::where('id',$request->met_id)->value('met_name');
         
        return view('zaka.met', compact('met','mett'));
    }
    
    public function inc( ){
              
        $date=Client::all();
        $date=Cattleranch::all();

       return view('zaka.calco',compact('date'));
       
           }

    public function addcat(Request $request){
        $cat= new Cattleranch; 
    
        $cat->cattleranch_type =$request->cattleranch_type ;
        $cat->cattleranch_amount  =$request->cattleranch_amount  ;
        $cat->location  =$request->location ;
        $cat->client_id=$request->client_id;
        $cat->save();                   
        return view('zaka.calt',compact('cat'));
    }
    

    public function calt($id){
        $cat=Cattleranch::where('id', Auth::id())->where('id', $id)->firstOrFail();
        $cat=Cattleranch::find('id');
        return view('zaka.calt',compact('cat'));
    }


public function selectt(){
    return view('selectt');
}

}
