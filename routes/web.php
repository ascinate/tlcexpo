<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagecontractorController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TradeshowController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\WhytlcController;
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

Route::get('/',[HomeController::class,'index']);
Route::view('request-a-quote','request_quote');
Route::get('why-tlc-expo',[WhytlcController::class, 'front']);
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

/////////////// Administrator Routes
Route::view('admin/login','admin/login');
Route::post('adminlogin', [AdminController::class, 'adminlogin']);
Route::get('admin/dashboard', [AdminController::class, 'index'])->middleware('adminauth');

//// Customers
Route::get('admin/customers',[CustomerController::class, 'customers'])->middleware('adminauth');
Route::view('admin/addcustomer','admin/addcustomer')->middleware('adminauth');
Route::post('insertcustomer',[CustomerController::class,'insertcustomer'])->middleware('adminauth');
Route::get('admin/editcustomer/{id}',[CustomerController::class,'showData'])->middleware('adminauth');
Route::post('updatecustomer',[CustomerController::class,'updatecustomer'])->middleware('adminauth');
Route::get('admin/deletecustomer/{id}', [CustomerController::class, 'delete'])->middleware('adminauth');

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
Route::get('admin/viewevent/{id}',[EventController::class,'viewData'])->middleware('adminauth');
Route::post('updateevent',[EventController::class,'updateevent'])->middleware('adminauth');
Route::get('admin/deleteevent/{id}', [EventController::class, 'delete'])->middleware('adminauth');

//// Whytlc
Route::get('admin/whytlc',[WhytlcController::class, 'index'])->middleware('adminauth');
Route::get('admin/editwhytlc/{id}',[WhytlcController::class,'showData'])->middleware('adminauth');
Route::post('updatewhytlc',[WhytlcController::class,'updatewhytlc'])->middleware('adminauth');
Route::get('admin/deletewhytlc/{id}', [WhytlcController::class, 'delete'])->middleware('adminauth');

//// Home
Route::view('admin/edithome','admin/edithome')->middleware('adminauth');
Route::post('updatehome',[HomeController::class,'updatehome']);

//// Testimonials
Route::get('admin/testimonials', [TestimonialController::class, 'index']);
Route::view('admin/addtestimonial', 'admin/addtestimonial')->middleware('adminauth');
Route::post('inserttestimonial',[TestimonialController::class,'inserttestimonial']);
Route::get('admin/edittestimonial/{id}',[TestimonialController::class,'showData'])->middleware('adminauth');
Route::post('updatetestimonial',[TestimonialController::class,'updatetestimonial']);
Route::get('admin/deletetestimonial/{id}', [TestimonialController::class, 'delete'])->middleware('adminauth');

/// Venues
Route::get('admin/venues', [VenueController::class, 'venues']);
Route::view('admin/addvenue', 'admin/addvenue')->middleware('adminauth');
Route::post('insertvenue',[VenueController::class,'insertvenue']);
Route::get('admin/editvenue/{id}',[VenueController::class,'showData'])->middleware('adminauth');
Route::post('updatevenue',[VenueController::class,'updatevenue']);
Route::get('admin/deletevenue/{id}', [VenueController::class, 'delete'])->middleware('adminauth');

/// Show Contractor
Route::get('admin/managementcontractors', [ManagecontractorController::class, 'contractors']);
Route::view('admin/addshowcontractor', 'admin/addmanagecontractor')->middleware('adminauth');
Route::post('insertcontractor',[ManagecontractorController::class,'insertcontractor']);
Route::get('admin/editshowcontractor/{id}',[ManagecontractorController::class,'showData'])->middleware('adminauth');
Route::post('updatecontractor',[ManagecontractorController::class,'updatecontractor']);
Route::get('admin/deleteshowcontractor/{id}', [ManagecontractorController::class, 'delete'])->middleware('adminauth');


Route::get('admin/logout', function () {

    if(session()->has('adminuser'))
    {
        session()->pull('adminuser', null);
    }
    return redirect('admin/login');
});
