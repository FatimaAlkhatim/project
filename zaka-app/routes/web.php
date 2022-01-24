<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessagesController;


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
    return view('welcome');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:overseer']], function() { 
    Route::get('/dashboard/overseer', 'App\Http\Controllers\DashboardController@overseer')->name('dashboard.overseer');
});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:committee']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});


Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
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
Route::post('/addfarm', [HomeController::class,'addfarm']);
Route::get('show',[HomeController::class,'show']);
