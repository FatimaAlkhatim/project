<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
// use File; 
use Illuminate\Support\Facades\DB; 
use Intervention\Image\Facades\Image;
use App\Models\Client;
use App\Models\Reseivable;
use App\Models\Farmerie;
use App\Models\State;
use App\Models\Local;
use App\Models\Metels;
use App\Models\Cattleranch;
use PDF;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Exports\FarmerieExport;
use Maatwebsite\Excel\Facades\Excel;





class HomeController extends Controller
{
    //client show
 public function index( ){
            
$date=client::all();
$date=State::all();
$lo=Local::all();

return view('zaka.index',compact('date','lo'));

    }


//show state in client
public function sta(){
$date=State::all();
$lo=Local::all();
return view('zaka.index',compact('date','lo'));
}

//show local in client
// public function lo(){
// $date=Local::all();
// return view('zaka.index',compact('date'));
// }

//client add
public function addclient(Request $request){
    $name = Auth::user()->name;
    // dd($name);
$date= new client;  
$date->name=$name;
$date->national=$request->national;
$date->iphone=$request->iphone;
$date->state_id=$request->state_id;
$date->local_id=$request->local_id;
$date->client_type=$request->client_type;

$date->save();

return view('zaka.calco',compact('date'));


}


//show state local in   reseivable
public function reseivable(){
$sta=State::all();
$lo=Local::all();
return view('zaka.reseivable',compact('sta','lo'));
}


//add reseivable
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
Alert::success('تهانينا', 'تم تسجيلك بنجاح تحقق من صفحة رسائلك');

$data->save();

return redirect()->back();

}




//show client farmerie meteles catttleranch state and local in  calco
public function ind(){
$date=Client::all();
$date=Farmerie::all();
$date=Metels::all();
$date=Cattleranch::all();
$date=State::all();
$lo=Local::all();
return view('zaka.calco',compact('date','lo'));

}


//add farmerie
public function addfarm(Request $request){
$info= new farmerie; 
$info->projct_id=$request->projct_id;
$info->area=$request->area;
$info->location=$request->location;
$info->crope_type=$request->crope_type;
$info->irrigate_type=$request->irrigate_type;
$info->production_quantity=$request->production_quantity;
$info->client_id=$request->client_id;
$info->price_kilo=$request->price_kilo;

$info->save();

return view('zaka.complet',compact('info'));


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
return view('zaka.calco',compact('date','sta','lo','info','met','cat'));
}



//account of farmerie
public function complet($id){
$farmeries= Farmerie::where('id', Auth::id())->where('id', $id)->firstOrFail();
$info=Farmerie::find('id');

return view('zaka.complet',compact('info'));
}



//report of farmeries
public function show(Request $request)
{

// $fromDate = $request->fromDate;
// $toDate = $request->toDate ;
// $date = \DB::select("SELECT * FROM farmeries WHERE created_at BETWEEN '$fromDate 00:00:00' AND'$toDate 23:59:59' ");
// $query = DB::table('farmeries')
// ->where('created_at','>=',$fromDate)
// ->where('created_at','<=',$toDate)

// ->get();
// dd($query);


$data = Client::join('farmeries','farmeries.client_id','=','clients.id')
// ->('farmerie','farmerie.client_id','=','client.id')

// $result = DB::table('clients')
// ->leftJoin('farmeries','client_id',"=",'farmeries.client_id')

// ->select('clients.name as clientName')
->get(['clients.name','farmeries.irrigate_type','farmeries.production_quantity','farmeries.location','farmeries.crope_type','farmeries.created_at']);




return view('zaka.show',compact('data'));
}

// public function search(Request $request){
//     $fromDate = $request->input('fromDate ');
//     $toDate = $request->input('toDate ');
//     // $date = \DB::select("SELECT * FROM farmeries WHERE created_at BEETWEEN '$fromDate 00:00:00' AND'$toDate 23:59:59' ");
//     $query = DB::table('farmeries')->select()

//     ->get();


//     $data = Client::join('farmeries','farmeries.client_id','=','clients.id')
//     // ->('farmerie','farmerie.client_id','=','client.id')

//     // $result = DB::table('clients')
//     // ->leftJoin('farmeries','client_id',"=",'farmeries.client_id')

//     // ->select('clients.name as clientName')
//     ->get(['clients.name','farmeries.irrigate_type','farmeries.production_quantity','farmeries.location','farmeries.crope_type','farmeries.created_at']);



//     return view('zaka.show',compact('data'));
// }


// public function fileExport() 
//     {
//         return Excel::download(new FarmerieExport, 'Farmerie-show.xlsx');
//     } 

// public function downloadPdf(){

//     $date = Client::join('farmeries','farmeries.client_id','=','clients.id')

//     ->get(['clients.name','farmeries.irrigate_type','farmeries.production_quantity','farmeries.location','farmeries.crope_type','farmeries.created_at'])->toArray();



//     view()->share('employee',$date);
//     $pdf = PDF::loadView('zaka.download',  $date);
//     return $pdf->download('show.pdf');

//     }

//     public function downloadPdff(){

    
//     $data = Client::join('metels','metels.client_id','=','clients.id')

//     ->get(['clients.name','metels.metels_type','metels.production_quantity']);



//         view()->share('zaka.download2',$data);
//         $pdf = PDF::loadView('zaka.download2', ['metels' => $data]);
//         return $pdf->download('met.pdf');

//         }


//report of metels
public function report()
{
$data = Client::join('metels','metels.client_id','=','clients.id')

->get(['clients.name','metels.metels_type','metels.production_quantity','metels.created_at']);

return view('zaka.report',compact('data'));
}

//report of cattleranches
public function print()
{
$data = Client::join('cattleranches','cattleranches.client_id','=','clients.id')

->get(['clients.name','clients.iphone','cattleranches.cattleranch_type','cattleranches.cattleranch_amount','cattleranches.created_at']);

return view('zaka.print',compact('data'));
}




//report of farmeries by date
public function Search_invoices(Request $request)
{
    $start_at = date($request->start_at);
    $end_at = date($request->end_at);

        
    //   $farmeries= Farmerie::whereBetween('created_at',[$start_at,$end_at])->get();
        
$data = Client::whereBetween('farmeries.created_at',[$start_at,$end_at])->join('farmeries','farmeries.client_id','=','clients.id')

->get(['clients.name','farmeries.irrigate_type','farmeries.production_quantity','farmeries.location','farmeries.crope_type','farmeries.created_at']);
        return view('zaka.show',compact('start_at','end_at','data'))->withDetails($data);
          
} 







// report of metels by date
public function Search_invoicess(Request $request)
{


$start_at = date($request->start_at);
$end_at = date($request->end_at);


$data = Client::whereBetween('metels.created_at',[$start_at,$end_at])->join('metels','metels.client_id','=','clients.id')

->get(['clients.name','metels.metels_type','metels.production_quantity','metels.created_at']);

//   $metels= Metels::whereBetween('created_at',[$start_at,$end_at])->get();
return view('zaka.report',compact('start_at','end_at','data'))->withDetails($data);
    
} 



// report  of cattleranches by date
public function Search_invoicesss(Request $request)
{
$start_at = date($request->start_at);
$end_at = date($request->end_at);


$data = Client::whereBetween('cattleranches.created_at',[$start_at,$end_at])->join('cattleranches','cattleranches.client_id','=','clients.id')

->get(['clients.name','cattleranches.cattleranch_type','cattleranches.cattleranch_amount','clients.iphone','cattleranches.created_at']);
    
//   $cattleranches= Cattleranch::whereBetween('created_at',[$start_at,$end_at])->get();
return view('zaka.print',compact('start_at','end_at','data'))->withDetails($data);
 
} 








}






