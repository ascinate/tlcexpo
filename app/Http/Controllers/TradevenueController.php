<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tradevenue;

class TradevenueController extends Controller
{
    //
    public function index()
    {
        $data = Tradevenue::all();
        return view('admin/tradevenues',['datas'=>$data]);
    }

    public function showData($id)
    {
        $data = Tradevenue::find($id);
        return view('admin/editvenueentity',['data' => $data]);
    }

    public function viewData($id)
    {
        $data = Tradevenue::find($id);
        return view('admin/viewvenueentity',['data' => $data]);
    }

    public function inserttradevenue(Request $request)
    {
        $venue = new Tradevenue();
        $venue->entity_id = $request->entity_id;

        $showfloor = array('area_name' => $request->area_name,
                        'square_feet' => $request->square_feet);

        $loading = array('location_description' => $request->location_description,
                        'address_1' => $request->address_1,
                        'address_2' => $request->address_2,
                        'city' => $request->city,
                        'state' => $request->state,
                        'zipcode' => $request->zipcode,
                        'google_map_url' => $request->google_map_url,
                        'driver_instruction' => $request->driver_instruction);


        $showfloor_locations = json_encode($showfloor);
        $loading_locations = json_encode($loading);

        $venue->showfloor_locations = $showfloor_locations;
        $venue->loading_locations = $loading_locations;

        $venue->save();
        return redirect('admin/tradevenues');
    }

    public function updatetradevenue(Request $request)
    {
        $venue = Tradevenue::find($request->id);
        $venue->entity_id = $request->entity_id;

        $showfloor = array('area_name' => $request->area_name,
                           'square_feet' => $request->square_feet);

        $loading = array('location_description' => $request->location_description,
                         'address_1' => $request->address_1,
                         'address_2' => $request->address_2,
                         'city' => $request->city,
                         'state' => $request->state,
                         'zipcode' => $request->zipcode,
                         'google_map_url' => $request->google_map_url,
                         'driver_instruction' => $request->driver_instruction);


        $showfloor_locations = json_encode($showfloor);
        $loading_locations = json_encode($loading);

        $venue->showfloor_locations = $showfloor_locations;
        $venue->loading_locations = $loading_locations;

        $venue->save();
        return redirect('admin/tradevenues');
    }

    public function delete($id)
    {
        $customer = Tradevenue::find($id);
        $customer->delete();
        return redirect('admin/tradevenues');
    }
}
