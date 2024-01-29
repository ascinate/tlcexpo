<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TradeshowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
}); */

///////////////////// Userend Routes //////////////////

Route::view('/','home');
Route::view('request-a-quote','request_quote');
Route::view('why-tlc-expo','why-tlc-expo');
Route::view('about-us','about-us');
Route::view('value-added-services','value-added-services');
Route::view('preparing-for-pickup','preparing-for-pickup');
Route::view('venue-freight-supervision','venue-freight-supervision');
Route::view('post-event-pickup-prep','post-event-pickup-prep');
Route::view('contact','contact');
Route::view('events','events');
Route::view('login','login');
Route::post('customerlogin',[CustomerController::class, 'customerlogin']);
Route::view('register','register');
Route::post('addcustomer',[CustomerController::class, 'addcustomer']);

/////////// Dashboard pages for customers /////////////////

Route::view('dashboard','dashboard')->middleware('authverify');
Route::view('shipments','shipments')->middleware('authverify');
Route::view('shipment-details','shipment-details')->middleware('authverify');
Route::view('loads','loads')->middleware('authverify');
Route::view('load-details','load-details')->middleware('authverify');
Route::view('tradeshows','tradeshows')->middleware('authverify');
Route::view('tradeshow-details','tradeshow-details')->middleware('authverify');

Route::get('logout', function () {

        if(session()->has('user'))
        {
            session()->pull('user', null);
        }
        return redirect('login');
});

/////////////// Administrator Routes //////////////////

Route::view('admin/login','admin/login');
Route::post('adminlogin', [AdminController::class, 'adminlogin']);
Route::get('admin/dashboard', [AdminController::class, 'index'])->middleware('adminauth');

//// Customers
Route::get('admin/customers',[CustomerController::class, 'customers'])->middleware('adminauth');
Route::view('admin/addcustomer','admin/addcustomer')->middleware('adminauth');
Route::post('insertcustomer',[CustomerController::class,'insertcustomer'])->middleware('adminauth');
Route::get('admin/editcustomer/{id}',[CustomerController::class,'showData'])->middleware('adminauth');
Route::post('updatecustomer',[CustomerController::class,'updatecustomer'])->middleware('adminauth');

//// Tradeshows
Route::get('admin/tradeshows',[TradeshowController::class, 'index'])->middleware('adminauth');
Route::view('admin/addtradeshow','admin/addtradeshow')->middleware('adminauth');
Route::post('inserttradeshow',[TradeshowController::class,'inserttradeshow'])->middleware('adminauth');
Route::get('admin/edittradeshow/{id}',[TradeshowController::class,'showData'])->middleware('adminauth');
Route::post('updatetradeshow',[TradeshowController::class,'updatetradeshow'])->middleware('adminauth');
Route::get('admin/deletetradeshow/{id}', [TradeshowController::class, 'delete'])->middleware('adminauth');

//// Events
Route::get('admin/events',[EventController::class, 'index'])->middleware('adminauth');
Route::view('admin/addevent','admin/addevent')->middleware('adminauth');
Route::post('insertevent',[EventController::class,'insertevent'])->middleware('adminauth');
Route::get('admin/editevent/{id}',[EventController::class,'showData'])->middleware('adminauth');
Route::post('updateevent',[EventController::class,'updateevent'])->middleware('adminauth');
Route::get('admin/deleteevent/{id}', [EventController::class, 'delete'])->middleware('adminauth');

Route::get('admin/logout', function () {

    if(session()->has('adminuser'))
    {
        session()->pull('adminuser', null);
    }
    return redirect('admin/login');
});
