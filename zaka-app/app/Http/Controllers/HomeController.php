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
use App\Models\State;
use App\Models\Local;
use App\Models\Metels;








class HomeController extends Controller
{


      
            public function index( ){
              
                 $date=client::all();
                 $date=State::all();
                 $lo=Local::all();

                return view('zaka.index',compact('date','lo'));
                
                    }

public function sta(){
    $date=State::all();
   return view('zaka.index',compact('date'));
}
public function lo(){
    $date=Local::all();
   return view('zaka.index',compact('date'));
}
                    public function addclient(Request $request){
                        $date= new client;  
                        $date->name=$request->name;
                        $date->national=$request->national;
                        $date->iphone=$request->iphone;
                        $date->state_id=$request->state_id;
                        $date->local_id=$request->local_id;
                        $date->client_type=$request->client_type;
                        
                        $date->save();
                       
                          return redirect()->back();


                            }

                            public function reseivable(){
                                $sta=State::all();
                                $lo=Local::all();
                                return view('zaka.reseivable',compact('sta','lo'));
                            }

                            public function addreseivable(Request $request){
                                $data= new reseivable;  
                                if($request->hasFile('project_image')){
                                    $project_image = $request->file('project_image');
                                    $filename = time() . '.' . $project_image->getClientOriginalExtension();
                                    Image::make($project_image)->resize(100, 100)->save( public_path('uploads/' . $filename ) );
                                    $data->image = $filename;
                                 }else{
                                          $filename='default.png';
                                      }
                                $data->image = $filename;
                                $data->name=$request->name;
                                $data->national=$request->national;
                                $data->iphone=$request->iphone;
                                $data->location=$request->location;
                                $data->state_id=$request->state_id;
                                $data->local_id=$request->local_id;
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
                               
                                return redirect()->route('dashboard');

                            }

        // public function calco(){
        //     return view('zaka.calco');
        // }

        public function ind(){
              
            $date=Client::all();
            $date=Farmerie::all();
            $date=Metels::all();
            $date=Cattleranch::all();
            $date=State::all();
            $lo=Local::all();
           return view('zaka.calco',compact('date','lo'));
           
               }

public function addfarm(Request $request){
    $info= new farmerie; 
    $info->projct_id=$request->projct_id;
    $info->area=$request->area;
    $info->location=$request->location;
    $info->crope_type=$request->crope_type;
    $info->irrigate_type=$request->irrigate_type;
    
    $info->production_quantity=$request->production_quantity;

    $info->client_id=$request->client_id;

    
    $info->save();
                               
    return redirect('complet');;


}







public function calco(){
    $date=Client::all();
    $sta=State::all();
    $lo=Local::all();
    $info=Farmerie::all();
    return view('zaka.calco',compact('date','sta','lo','info'));
}




public function complet(){
    $info=Farmerie::all();

    return view('zaka.complet',compact('info'));
}


public function show(){
    return DB::table('clients')
    ->join('farmeries','client_id',"=",'farmeries.client_id')
    // ->select('clients.*')
    ->get();
}

}






   