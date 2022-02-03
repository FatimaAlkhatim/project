<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Models\Metels;
use App\Models\Cattleranch;
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
        $met->state_id=$request->state_id;
        $met->local_id=$request->local_id;
        $met->production_quantity=$request->production_quantity;
    
        $met->client_id=$request->client_id;
    
        
        $met->save();
                                   
        return redirect()->back();
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
        $cat->location  =$request->location  ;

         
        $cat->state_id=$request->state_id;
        $cat->local_id=$request->local_id;
        $cat->production_quantity=$request->production_quantity;
    
        $cat->client_id=$request->client_id;
    
        
        $cat->save();
                                   
        return redirect()->back();
    }
    

    
}
