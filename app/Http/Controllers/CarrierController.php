<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrier;

class CarrierController extends Controller
{
    //
    public function carriers()
    {
        $data = Carrier::all();
        return view('admin/carriers',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Carrier::find($id);
        return view('admin/editcarrier',['data' => $data]);
    }

    public function insertcarrier(Request $request)
    {
        $carrier = new Carrier();
        $carrier->carrier_name = $request->carrier_name;
        $carrier->address = $request->address;
        $carrier->address_line_1 = $request->address_line_1;
        $carrier->address_line_2 = $request->address_line_2;
        $carrier->address_line_3 = $request->address_line_3;
        $carrier->city = $request->city;
        $carrier->state = $request->state;
        $carrier->zipcode = $request->zipcode;
        $carrier->country = $request->country;
        $carrier->phone = $request->phone;
        $carrier->dot = $request->dot;
        $carrier->scac = $request->scac;
        $carrier->mc = $request->mc;
        $carrier->ein = $request->ein;
        $carrier->terms = $request->terms;
        $carrier->equipment = $request->equipment;
        $carrier->groups = $request->groups;
        $carrier->contact = $request->contact;
        $carrier->notes = $request->notes;

        $carrier->save();
        return redirect('admin/carriers');
    }

    public function updatecarrier(Request $request)
    {
        $carrier = Carrier::find($request->id);
        $carrier->carrier_name = $request->carrier_name;
        $carrier->address = $request->address;
        $carrier->address_line_1 = $request->address_line_1;
        $carrier->address_line_2 = $request->address_line_2;
        $carrier->address_line_3 = $request->address_line_3;
        $carrier->city = $request->city;
        $carrier->state = $request->state;
        $carrier->zipcode = $request->zipcode;
        $carrier->country = $request->country;
        $carrier->phone = $request->phone;
        $carrier->dot = $request->dot;
        $carrier->scac = $request->scac;
        $carrier->mc = $request->mc;
        $carrier->ein = $request->ein;
        $carrier->terms = $request->terms;
        $carrier->equipment = $request->equipment;
        $carrier->groups = $request->groups;
        $carrier->contact = $request->contact;
        $carrier->notes = $request->notes;

        $carrier->save();
        return redirect('admin/carriers');
    }

    public function delete($id)
    {
        $carrier = Carrier::find($id);
        $carrier->delete();
        return redirect('admin/carriers');
    }
}
