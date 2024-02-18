<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    //
    public function index()
    {
        $data = Location::all();
        return view('admin/locations',['datas'=>$data]);
    }

    public function showData($id)
    {
        $data = Location::find($id);
        return view('admin/editlocation',['data'=>$data]);
    }

    public function viewData($id)
    {
        $data = Location::find($id);
        return view('admin/viewlocation',['data'=>$data]);
    }

    public function insertdata(Request $request)
    {
        $location = new Location();
        $location->location_descripton = $request->location_descripton;
        $location->location_type = $request->location_type;
        $location->loading_requirements = @implode(",", $request->loading_requirements);
        $location->billing_address = $request->billing_address;
        $location->public_scales_on_site = $request->public_scales_on_site;
        $location->google_autocomplete = $request->google_autocomplete;
        $location->address_line_1 = $request->address_line_1;
        $location->address_line_2 = $request->address_line_2;
        $location->city = $request->city;
        $location->state = $request->state;
        $location->zipcode = $request->zipcode;
        $location->country = $request->country;
        $location->timezone = $request->timezone;
        $location->observes_dst = $request->observes_dst;
        $location->days_open = @implode(",", $request->days_open);
        $location->open_hours = $request->open_hours;
        $location->closed_at = $request->closed_at;
        $location->check_in_deadline = $request->check_in_deadline;
        $location->notify_contact = $request->notify_contact;
        $location->driver_instructions = $request->driver_instructions;
        $location->google_map_url = $request->google_map_url;

        $location->save();
        return redirect('admin/locations');
    }

    public function updatedata(Request $request)
    {
        $location = Location::find($request->id);

       $location->location_descripton = $request->location_descripton;
       $location->location_type = $request->location_type;
       $location->loading_requirements = @implode(",", $request->loading_requirements);
       $location->billing_address = $request->billing_address;
       $location->public_scales_on_site = $request->public_scales_on_site;
       $location->google_autocomplete = $request->google_autocomplete;
       $location->address_line_1 = $request->address_line_1;
       $location->address_line_2 = $request->address_line_2;
       $location->city = $request->city;
       $location->state = $request->state;
       $location->zipcode = $request->zipcode;
       $location->country = $request->country;
       $location->timezone = $request->timezone;
       $location->observes_dst = $request->observes_dst;
       $location->days_open = @implode(",", $request->days_open);
       $location->open_hours = $request->open_hours;
       $location->closed_at = $request->closed_at;
       $location->check_in_deadline = $request->check_in_deadline;
       $location->notify_contact = $request->notify_contact;
       $location->driver_instructions = $request->driver_instructions;
       $location->google_map_url = $request->google_map_url;


        $location->save();
        return redirect('admin/locations');
    }

    public function delete($id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect('admin/locations');
    }
}
