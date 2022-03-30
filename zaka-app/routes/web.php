<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\spradController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OptionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:overseer']], function() { 
    Route::get('/dashboard/overseer', 'App\Http\Controllers\DashboardController@overseer')->name('dashboard.overseer');


});
Route::group(['middleware' => ['auth', 'role:overseer']], function() { 
    Route::get('/dashboard/over', 'App\Http\Controllers\DashboardController@over')->name('dashboard.over');


});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:committee']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});


Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
});


Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/post', 'App\Http\Controllers\DashboardController@post')->name('dashboard.post');
});

Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/crope', 'App\Http\Controllers\DashboardController@crope')->name('zaka.crope');
    Route::post('search', 'App\Http\Controllers\DashboardController@search')->name('search');
});

Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/crop', 'App\Http\Controllers\DashboardController@crop')->name('zaka.crop');
    Route::post('searchs', 'App\Http\Controllers\DashboardController@searchs')->name('searchs');

});


Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/show', 'App\Http\Controllers\HomeController@show')->name('zaka.show');
});
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/shew', 'App\Http\Controllers\DashboardController@shew')->name('zaka.shew');
    Route::post('Search_invoic', 'App\Http\Controllers\DashboardController@Search_invoic')->name('Search_invoic');

});

Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::post('Search_invoices', 'App\Http\Controllers\HomeController@Search_invoices')->name('Search_invoices');
});
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::post('Search_invoicess', 'App\Http\Controllers\HomeController@Search_invoicess')->name('Search_invoicess');
});
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::post('Search_invoicesss', 'App\Http\Controllers\HomeController@Search_invoicesss')->name('Search_invoicesss');
});

Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/report', 'App\Http\Controllers\HomeController@report')->name('zaka.report');
});

Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/print', 'App\Http\Controllers\HomeController@print')->name('zaka.print');
});

Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/cropety', 'App\Http\Controllers\OptionController@cropety')->name('zaka.cropety');
    Route::get('/zaka/cro', 'App\Http\Controllers\OptionController@cro')->name('zaka.cro');

});
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/metty', 'App\Http\Controllers\OptionController@metty')->name('zaka.metty');
});

Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/zaka/count', 'App\Http\Controllers\OptionController@count')->name('zaka.count');
});



Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
});
Route::group(['middleware' => ['auth', 'role:committee']], function() { 
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
});
Route::group(['middleware' => ['auth', 'role:overseer']], function() { 
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
});

Route::group(['middleware' => ['auth', 'role:msk']], function() { 
    Route::get('/zaka/payment', [PaymentController::class, 'payment'])->name('zaka.payment');
    Route::get('/zaka/farm', [OptionController::class, 'farm'])->name('zaka.farm');
    Route::get('/zaka/farms', [HomeController::class, 'farms'])->name('zaka.farms');
    Route::get('/zaka/metss', [HomeController::class, 'metss'])->name('zaka.metss');
    Route::get('/zaka/pay', [PaymentController::class, 'pay'])->name('zaka.pay');
    Route::get('/zaka/payt', [PaymentController::class, 'payt'])->name('zaka.payt');
    Route::get('/zaka/pys', [PaymentController::class, 'pys'])->name('zaka.pys');





});

Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});


require __DIR__.'/auth.php';


Route::get('/index', [HomeController::class,'index']);
Route::post('/addclient', [HomeController::class,'addclient']);

Route::get('/reseivable', [HomeController::class,'reseivable']);
Route::post('/addreseivable', [HomeController::class,'addreseivable']);

// Route::get('/calco', [HomeController::class,'calco']);
Route::get('/deleteres/{id}', [DashboardController::class,'deleteres']);


// Route::get('/reseivable', [HomeController::class,'reseivable']);

Route::post('/addfarm', [HomeController::class,'addfarm']);
Route::post('/addfar', [OptionController::class,'addfar']);

Route::post('/indfarm', [HomeController::class,'ind']); 
Route::post('/addmet', [spradController::class,'addmet']);
Route::post('/addcat', [spradController::class,'addcat']);
Route::post('/indd', [spradController::class,'indd']);
Route::post('/inc', [spradController::class,'inc']);
Route::get('/calco', [HomeController::class,'calco']);
Route::get('/calco', [HomeController::class,'calc']);

Route::get('/state', [LocationController::class,'state']);
Route::post('/addstate', [LocationController::class,'addstate']);
Route::post('/sta', [HomeController::class,'sta']);

Route::get('/local', [LocationController::class,'local']);
Route::post('/addlocal', [LocationController::class,'addlocal']);
Route::post('/lo', [HomeController::class,'lo']);
Route::get('/complet/{id}', [HomeController::class,'complet']);
Route::get('/met', [spradController::class,'met']);
Route::get('/calt', [spradController::class,'calt']);
Route::get('/comp', [OptionController::class,'comp']);

Route::post('/addamount', [DashboardController::class,'addamount']);
Route::post('/sel', [DashboardController::class,'sel']);
Route::get('/deletesel/{id}', [DashboardController::class,'deletesel']);

Route::post('/create',[HomeController::class,'create']);
// Route::get('/selectt', [spradController::class,'selectt']);
Route::post('/addcropety', [OptionController::class,'addcropety']);
Route::post('/addcro', [OptionController::class,'addcro']);
Route::post('/addmetty', [OptionController::class,'addmetty']);
Route::post('/addcount', [OptionController::class,'addcount']);
Route::get('/updataview/{id}', [OptionController::class,'updataview']);
Route::post('/updatacrope/{id}', [OptionController::class,'updatacrope']);

Route::get('/updatashow/{id}', [OptionController::class,'updatashow']);
Route::post('/updatacro/{id}', [OptionController::class,'updatacro']);

Route::get('/updatass/{id}', [DashboardController::class,'updatass']);
Route::post('/updatatt/{id}', [DashboardController::class,'updatatt']);




Route::get('/updataa/{id}', [OptionController::class,'updataa']);

Route::post('/updatamett/{id}', [OptionController::class,'updatamett']);





//report
Route::get('export-pdf', [HomeController::class, 'downloadPdf'])->name('export-pdf');
Route::get('export', [HomeController::class, 'downloadPdff'])->name('export');
Route::get('file-export', [HomeController::class, 'fileExport'])->name('file-export');
// Route::get('/print',[HomeController::class,'print']);
Route::post('Search_invoices', [HomeController::class,'Search_invoices']);
Route::post('Search_invoicess', [HomeController::class,'Search_invoicess']);
Route::post('Search_invoicesss', [HomeController::class,'Search_invoicesss']);
Route::post('addpayment', [PaymentController::class,'addpayment']);
Route::post('addpay', [PaymentController::class,'addpay']);
Route::post('addp', [PaymentController::class,'addp']);
Route::post('addpys', [PaymentController::class,'addpys']);



