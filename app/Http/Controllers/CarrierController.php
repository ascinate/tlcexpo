<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrier;

class CarrierController extends Controller
{
    //
    public function index()
    {
        $data = Carrier::all();
        return view('admin/carriers',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Carrier::find($id);
        return view('admin/editcarrier',['data' => $data]);
    }

    public function viewData($id)
    {
        $data = Carrier::find($id);
        return view('admin/viewcarrier',['data' => $data]);
    }

    public function insertcarrier(Request $request)
    {
        $carrier = new Carrier();
        $contact_values = array("first_name_carrier" => $request->first_name_carrier,
                                "last_name_carrier" => $request->last_name_carrier,
                                "title_carrier" => $request->title_carrier,
                                "phone_carrier" => $request->phone_carrier,
                                "email_carrier" => $request->email_carrier);

        $contacts = json_encode($contact_values);

        if($request->equipment!='')
        {
            $equipment = @implode(",",$request->equipment);
        }
        else
        {
            $equipment = '';
        }

        $carrier->carrier_name = $request->carrier_name;
        $carrier->location = $request->location;
        $carrier->parent_office = $request->parent_office;
        $carrier->phone = $request->phone;
        $carrier->dot = $request->dot;
        $carrier->scac = $request->scac;
        $carrier->mc = $request->mc;
        $carrier->ein = $request->ein;
        $carrier->terms = $request->terms;
        $carrier->equipment = $equipment;
        $carrier->groups = $request->groups;
        $carrier->contact = $contacts;
        $carrier->notes = $request->notes;

        $carrier->save();
        return redirect('admin/carriers');
    }

    public function updatecarrier(Request $request)
    {
        $carrier = Carrier::find($request->id);
        $contact_values = array("first_name_carrier" => $request->first_name_carrier,
                                "last_name_carrier" => $request->last_name_carrier,
                                "title_carrier" => $request->title_carrier,
                                "phone_carrier" => $request->phone_carrier,
                                "email_carrier" => $request->email_carrier);

        $contacts = json_encode($contact_values);
        if($request->equipment!='')
        {
            $equipment = @implode(",",$request->equipment);
        }
        else
        {
            $equipment = '';
        }

        $carrier->carrier_name = $request->carrier_name;
        $carrier->location = $request->location;
        $carrier->parent_office = $request->parent_office;
        $carrier->phone = $request->phone;
        $carrier->dot = $request->dot;
        $carrier->scac = $request->scac;
        $carrier->mc = $request->mc;
        $carrier->ein = $request->ein;
        $carrier->terms = $request->terms;
        $carrier->equipment = $equipment;
        $carrier->groups = $request->groups;
        $carrier->contact = $contacts;
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
