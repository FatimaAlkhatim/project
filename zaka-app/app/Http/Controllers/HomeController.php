<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
// use File; 
use Illuminate\Support\Facades\DB; 
use Intervention\Image\Facades\Image;
use App\Models\Client;
use App\Models\Reseivable;
use App\Models\Farmerie;

class HomeController extends Controller
{



// public function state( ){
// return view('zaka.state');

//     }

//     public function statead(Request $request){
// $date= new state;

// // $date->state_id=$request->state_id;
// $date->state_name=$request->state_name;

// $date->save();
// return redirect('index');

//     }


//     public function local( ){
//         return view('zaka.local');
        
//             }
        
//         public function localad(Request $request){
//         $data= new local;
//         $data->local_name=$request->local_name;
        
//         $data->save();
//         return redirect('index');
//             }







            public function index( ){
              
                 $data=client::all();
                return view('zaka.index',compact('data'));
                
                    }


                    public function addclient(Request $request){
                        $date= new client;  
                        $date->name=$request->name;
                        $date->national=$request->national;
                        $date->iphone=$request->iphone;
                        $date->state=$request->state;
                        $date->local=$request->local;
                        $date->client_type=$request->client_type;
                        
                        $date->save();
                        return redirect()->back();

                        return redirect('index')->with('success','succsed insert');
                            }

                            public function reseivable(){
                                return view('zaka.reseivable');
                            }

                            public function addreseivable(Request $request){
                                $data= new reseivable;  
                                if($request->hasFile('project_image')){
                                    $project_image = $request->file('project_image');
                                    $filename = time() . '.' . $project_image->getClientOriginalExtension();
                                    Image::make($project_image)->resize(190, 130)->save( public_path('uploads/' . $filename ) );
                                    $data->image = $filename;
                                 }else{
                                          $filename='default.png';
                                      }
                                $data->image = $filename;
                                $data->name=$request->name;
                                $data->national=$request->national;
                                $data->iphone=$request->iphone;
                                $data->location=$request->location;
                                $data->state=$request->state;
                                $data->local=$request->local;
                                $data->status=$request->status;
                                
                                $data->reseivable_type=$request->reseivable_type;
                              
                               
    //                         if($request->image){
    //       Image::make($request->image)
    //       ->resize(300,null,function ($constraint){
    //           $constraint->aspectRatio();
    //       })

    //       ->save(public_path('uploads/user_images/'.$request->image->hashName()));
    //       $data['image']=$request->image->hashName();
    //   }
    
                                $data->save();
                               
                                return redirect()->back();

                            }

                            // public function calco(){
                            //     return view('zaka.calco');
                            // }

public function addfarm(Request $request){
    $info= new farmerie; 
    $info->projct_id=$request->projct_id;
    $info->area=$request->area;
    $info->location=$request->location;
    $info->crope_type=$request->crope_type;
    $info->irrigate_type=$request->irrigate_type;
    $info->state=$request->state;
    $info->local=$request->local;
    $info->production_quantity=$request->production_quantity;
    
    $info->save();
                               
    return redirect()->back();


}

public function show(){
    return DB::table('clients')
    ->join('farmeries','client_id',"=",'farmeries.client_id')
    // ->select('clients.*')
    ->get();
}

}






   