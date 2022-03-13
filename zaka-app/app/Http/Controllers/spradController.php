<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Metels;
use App\Models\Cattleranch;
use App\Models\reseivable;

class spradController extends Controller
{


    public function indd( ){
              
        $date=Client::all();
        $date=Metels::all();

       return view('zaka.calco',compact('date'));
       
           }


    public function addmet(Request $request){
        $met= new Metels; 
    
        if($request->hasFile('project_image')){
            $project_image = $request->file('project_image');
            $filename = time() . '.' . $project_image->getClientOriginalExtension();
            Image::make($project_image)->resize(100, 100)->save( public_path('uploads/' . $filename ) );
            $met->image = $filename;
         }else{
                  $filename='default.png';
              }
        $met->image = $filename;
        $met->location =  $request->location;
        $met->metels_type=$request->metels_type;
      
        $met->production_quantity=$request->production_quantity;
    
        $met->client_id=$request->client_id;
    
        
        $met->save();
                                   
        return view('zaka.met',compact('met'));
    }

    public function met($id){
        // $user = Auth::user(); // Retrieve the currently authenticated user...
        // $id = Auth::id(); // Retrieve the currently authenticated user's ID...
    
        $met=Metels::where('id', Auth::id())->where('id', $id)->firstOrFail();
        $met=Metels::find('id');

        return view('zaka.met', compact('met'));
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
