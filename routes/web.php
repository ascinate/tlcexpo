<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExhibitorcontractorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ManagecontractorController;
use App\Http\Controllers\RequestquoteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TradeshowController;
use App\Http\Controllers\TradevenueController;
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

Route::post('showmanagement', [RequestquoteController::class, 'tradequote']);

Route::view('thankyou','thankyou');
Route::post('requestquote',[RequestquoteController::class,'requestquote']);

/////////// Dashboard pages for customers /////////////////

Route::view('dashboard','dashboard')->middleware('authverify');
Route::view('shipments','shipments')->middleware('authverify');
Route::get('shipment-details/{id}',[ShipmentController::class,'shipmentdetails'])->middleware('authverify');
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
Route::get('admin/viewcustomer/{id}',[CustomerController::class,'viewData'])->middleware('adminauth');
Route::post('updatecustomer',[CustomerController::class,'updatecustomer'])->middleware('adminauth');
Route::get('admin/deletecustomer/{id}', [CustomerController::class, 'delete'])->middleware('adminauth');

//// Tradeshows
Route::get('admin/tradeshows',[TradeshowController::class, 'index'])->middleware('adminauth');
Route::view('admin/addtradeshow','admin/addtradeshow')->middleware('adminauth');
Route::post('inserttradeshow',[TradeshowController::class,'inserttradeshow'])->middleware('adminauth');
Route::get('admin/edittradeshow/{id}',[TradeshowController::class,'showData'])->middleware('adminauth');
Route::get('admin/viewtradeshow/{id}',[TradeshowController::class,'viewData'])->middleware('adminauth');
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
Route::post('admin/getlocation',[EventController::class,'getlocation']);

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
Route::view('admin/addvenueentity', 'admin/addvenueentity')->middleware('adminauth');
Route::post('insertvenue',[VenueController::class,'insertvenue']);
Route::get('admin/editvenue/{id}',[VenueController::class,'showData'])->middleware('adminauth');
Route::post('updatevenue',[VenueController::class,'updatevenue']);
Route::get('admin/deletevenue/{id}', [VenueController::class, 'delete'])->middleware('adminauth');

/// Trade venues
Route::get('admin/tradevenues', [TradevenueController::class, 'index']);
Route::view('admin/addvenueentity', 'admin/addvenueentity')->middleware('adminauth');
Route::post('inserttradevenue',[TradevenueController::class,'inserttradevenue']);
Route::get('admin/edittradevenue/{id}',[TradevenueController::class,'showData'])->middleware('adminauth');
Route::get('admin/viewtradevenue/{id}',[TradevenueController::class,'viewData'])->middleware('adminauth');

Route::post('updatetradevenue',[TradevenueController::class,'updatetradevenue']);
Route::get('admin/deletetradevenue/{id}', [TradevenueController::class, 'delete'])->middleware('adminauth');

/// Entity table
Route::get('admin/entities', [EntityController::class, 'index']);
Route::view('admin/addentity', 'admin/addentity')->middleware('adminauth');
Route::post('insertentity',[EntityController::class,'insertentity']);
Route::get('admin/editentity/{id}',[EntityController::class,'showData'])->middleware('adminauth');
Route::get('admin/viewentity/{id}',[EntityController::class,'viewData'])->middleware('adminauth');
Route::post('updateentity',[EntityController::class,'updateentity']);
Route::get('admin/deleteentity/{id}', [EntityController::class, 'delete'])->middleware('adminauth');

/// Show Contractor
Route::get('admin/managementcontractors', [ManagecontractorController::class, 'contractors']);
Route::view('admin/addshowcontractor', 'admin/addmanagecontractor')->middleware('adminauth');
Route::post('insertcontractor',[ManagecontractorController::class,'insertcontractor']);
Route::get('admin/editshowcontractor/{id}',[ManagecontractorController::class,'showData'])->middleware('adminauth');
Route::post('updatecontractor',[ManagecontractorController::class,'updatecontractor']);
Route::get('admin/viewmanagementcontractor/{id}',[ManagecontractorController::class,'viewData'])->middleware('adminauth');
Route::get('admin/deleteshowcontractor/{id}', [ManagecontractorController::class, 'delete'])->middleware('adminauth');

/// Exhibitor Contractor
Route::get('admin/exhibitorcontractors', [ExhibitorcontractorController::class, 'index']);
Route::view('admin/addexhibitorcontractor', 'admin/addexhibitorcontractor')->middleware('adminauth');
Route::post('insertexhibitorcontractor',[ExhibitorcontractorController::class,'insertexhibitorcontractor']);
Route::get('admin/editexhibitcontractor/{id}',[ExhibitorcontractorController::class,'showData'])->middleware('adminauth');
Route::post('updateexhibitorcontractor',[ExhibitorcontractorController::class,'updateexhibitorcontractor']);
Route::get('admin/viewexhibitcontractor/{id}',[ExhibitorcontractorController::class,'viewData'])->middleware('adminauth');
Route::get('admin/deleteexhibitorcontractor/{id}', [ExhibitorcontractorController::class, 'delete'])->middleware('adminauth');
Route::post('admin/exhibitorlocation', [ExhibitorcontractorController::class, 'exhibitorlocation']);


//// Location
Route::view('admin/addlocation','admin/addlocation');
Route::get('admin/locations', [LocationController::class,'index'])->middleware('adminauth');
Route::post('insertdata',[LocationController::class,'insertdata']);
Route::post('adddata',[LocationController::class,'adddata']);
Route::get('admin/editlocation/{id}',[LocationController::class,'showData'])->middleware('adminauth');
Route::post('updatedata',[LocationController::class,'updatedata']);
Route::get('admin/viewlocation/{id}',[LocationController::class,'viewData'])->middleware('adminauth');
Route::get('admin/deletelocation/{id}', [LocationController::class, 'delete'])->middleware('adminauth');

///// Request Quote
Route::view('admin/addrequestquote', 'admin/addrequestquote')->middleware('adminauth');
Route::get('admin/quotes', [RequestquoteController::class,'index'])->middleware('adminauth');
Route::post('insertquote',[RequestquoteController::class,'insertquote']);
Route::get('admin/editrequestquote/{id}',[RequestquoteController::class,'showData'])->middleware('adminauth');
Route::post('updatequote',[RequestquoteController::class,'updatequote']);
Route::get('admin/viewrequestquote/{id}',[RequestquoteController::class,'viewData'])->middleware('adminauth');
Route::get('admin/deletequote/{id}', [RequestquoteController::class, 'delete'])->middleware('adminauth');
Route::post('admin/showmanagement', [RequestquoteController::class, 'tradequote']);


//// Roles & users
Route::view('admin/addrole','admin/addrole');
Route::get('admin/roles',[RoleController::class,'index'])->middleware('adminauth');
Route::post('insertrole',[RoleController::class,'insertrole']);
Route::get('admin/editrole/{id}',[RoleController::class,'showData'])->middleware('adminauth');
Route::post('updaterole',[RoleController::class,'updaterole']);
Route::get('admin/deleterole/{id}', [RoleController::class, 'delete'])->middleware('adminauth');

Route::view('admin/adduser','admin/adduser');
Route::get('admin/users',[AdminController::class,'users'])->middleware('adminauth');
Route::post('insertuser',[AdminController::class,'insertuser']);
Route::get('admin/edituser/{id}',[AdminController::class,'showData'])->middleware('adminauth');
Route::post('updateuser',[AdminController::class,'updateuser']);
Route::get('admin/deleteuser/{id}', [AdminController::class, 'delete'])->middleware('adminauth');

//// Loads
Route::view('admin/addload','admin/addload');
Route::get('admin/loads', [LoadController::class, 'index'])->middleware('adminauth');
Route::post('insertload', [LoadController::class, 'insertload'])->middleware('adminauth');
Route::get('admin/editload/{id}',[LoadController::class,'showData'])->middleware('adminauth');
Route::get('admin/viewload/{id}',[LoadController::class,'viewload'])->middleware('adminauth');
Route::post('updateload',[LoadController::class,'updateload']);
Route::get('admin/deleteload/{id}', [LoadController::class, 'delete'])->middleware('adminauth');

//// Tasks
Route::view('admin/addtask','admin/addtask');
Route::get('admin/tasks', [TaskController::class, 'index'])->middleware('adminauth');
Route::post('inserttask', [TaskController::class, 'inserttask'])->middleware('adminauth');
Route::get('admin/edittask/{id}',[TaskController::class,'showData'])->middleware('adminauth');
Route::get('admin/viewtask/{id}',[TaskController::class,'viewData'])->middleware('adminauth');
Route::post('updatetask',[TaskController::class,'updatetask']);
Route::get('admin/deletetask/{id}', [TaskController::class, 'delete'])->middleware('adminauth');

//// Shipment
Route::view('admin/addshipment','admin/addshipment');
Route::get('admin/shipments', [ShipmentController::class, 'index'])->middleware('adminauth');
Route::post('insertshipment', [ShipmentController::class, 'insertshipment'])->middleware('adminauth');
Route::get('admin/editshipment/{id}',[ShipmentController::class,'showData'])->middleware('adminauth');
Route::get('admin/viewshipment/{id}',[ShipmentController::class,'viewData'])->middleware('adminauth');
Route::post('updateshipment',[ShipmentController::class,'updateshipment']);
Route::get('admin/deleteshipment/{id}', [ShipmentController::class, 'delete'])->middleware('adminauth');
Route::post('admin/getloads',[ShipmentController::class, 'loads']);

//// Carriers
Route::view('admin/addcarrier','admin/addcarrier');
Route::get('admin/carriers', [CarrierController::class, 'index'])->middleware('adminauth');
Route::post('insertcarrier', [CarrierController::class, 'insertcarrier'])->middleware('adminauth');
Route::get('admin/editcarrier/{id}',[CarrierController::class,'showData'])->middleware('adminauth');
Route::get('admin/viewcarrier/{id}',[CarrierController::class,'viewData'])->middleware('adminauth');
Route::post('updatecarrier',[CarrierController::class,'updatecarrier']);
Route::get('admin/deletecarrier/{id}', [CarrierController::class, 'delete'])->middleware('adminauth');


Route::get('admin/logout', function () {
    if(session()->has('adminuser'))
    {
        session()->pull('adminuser', null);
    }
    return redirect('admin/login');
});
