<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Load;

class LoadController extends Controller
{
    //
    public function loads()
    {
        $data = Load::all();
        return view('admin/loads',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Load::find($id);
        return view('admin/editload',['data' => $data]);
    }

    public function insertload(Request $request)
    {
        $load = new Load();
        $load->load_id = $request->load_id;
        $load->shipment = $request->shipment;
        $load->shipment_type = $request->shipment_type;
        $load->billing_entity_name = $request->billing_entity_name;
        $load->address_line_1 = $request->address_line_1;
        $load->address_line_2 = $request->address_line_2;
        $load->address_line_3 = $request->address_line_3;
        $load->city = $request->city;
        $load->state = $request->state;
        $load->zipcode = $request->zipcode;
        $load->country = $request->country;
        $load->destination_tradeshow_id = $request->destination_tradeshow_id;
        $load->cargo_beams = $request->cargo_beams;
        $load->logistic_straps = $request->logistic_straps;
        $load->wheel_dollies = $request->wheel_dollies;
        $load->furniture_pad = $request->furniture_pad;
        $load->liftgate = $request->liftgate;
        $load->pallet_jack = $request->pallet_jack;
        $load->hand_truck = $request->hand_truck;
        $load->dolly = $request->dolly;
        $load->driver_assist = $request->driver_assist;
        $load->full_clearance_doors = $request->full_clearance_doors;
        $load->other = $request->other;
        $load->driver_instruction = $request->driver_instruction;
        $load->comments = $request->comments;

        $load->save();
        return redirect('admin/loads');
    }

    public function updateload(Request $request)
    {
        $load = Load::find($request->id);
        $load->load_id = $request->load_id;
        $load->shipment = $request->shipment;
        $load->shipment_type = $request->shipment_type;
        $load->billing_entity_name = $request->billing_entity_name;
        $load->address_line_1 = $request->address_line_1;
        $load->address_line_2 = $request->address_line_2;
        $load->address_line_3 = $request->address_line_3;
        $load->city = $request->city;
        $load->state = $request->state;
        $load->zipcode = $request->zipcode;
        $load->country = $request->country;
        $load->destination_tradeshow_id = $request->destination_tradeshow_id;
        $load->cargo_beams = $request->cargo_beams;
        $load->logistic_straps = $request->logistic_straps;
        $load->wheel_dollies = $request->wheel_dollies;
        $load->furniture_pad = $request->furniture_pad;
        $load->liftgate = $request->liftgate;
        $load->pallet_jack = $request->pallet_jack;
        $load->hand_truck = $request->hand_truck;
        $load->dolly = $request->dolly;
        $load->driver_assist = $request->driver_assist;
        $load->full_clearance_doors = $request->full_clearance_doors;
        $load->other = $request->other;
        $load->driver_instruction = $request->driver_instruction;
        $load->comments = $request->comments;

        $load->save();
        return redirect('admin/loads');
    }

    public function delete($id)
    {
        $customer = Load::find($id);
        $customer->delete();
        return redirect('admin/loads');
    }

}
