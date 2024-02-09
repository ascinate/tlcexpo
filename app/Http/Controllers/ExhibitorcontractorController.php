<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibitorcontractor;

class ExhibitorcontractorController extends Controller
{
    //
    public function index()
    {
        $data = Exhibitorcontractor::all();
        return view('admin/exhibitorcontractors',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Exhibitorcontractor::find($id);
        return view('admin/editexhibitorcontractor',['data' => $data]);
    }

    public function viewData($id)
    {
        $data = Exhibitorcontractor::find($id);
        return view('admin/viewexhibitorcontractor',['data' => $data]);
    }

    public function insertexhibitorcontractor(Request $request)
    {
        $contractor = new Exhibitorcontractor();
        $contact_values = array("first_name" => $request->first_name,
                                "last_name" => $request->last_name,
                                "title" => $request->title,
                                "exhibit_phone" => $request->exhibit_phone,
                                "exhibit_email" => $request->exhibit_email);

        $exhibit_contacts = json_encode($contact_values);

        $contractor->contractor_name = $request->contractor_name;
        $contractor->short_name = $request->short_name;
        $contractor->type = $request->type;
        $contractor->other = $request->other;
        $contractor->address_line_1 = $request->address_line_1;
        $contractor->address_line_2 = $request->address_line_2;
        $contractor->address_line_3 = $request->address_line_3;
        $contractor->city = $request->city;
        $contractor->state = $request->state;
        $contractor->zipcode = $request->zipcode;
        $contractor->country = $request->country;
        $contractor->phone = $request->phone;
        $contractor->website = $request->website;
        $contractor->email = $request->email;
        $contractor->contact = $exhibit_contacts;

        $contractor->save();
        return redirect('admin/exhibitorcontractors');
    }

    public function updateexhibitorcontractor(Request $request)
    {
        $contractor = Exhibitorcontractor::find($request->id);

        $contact_values = array("first_name" => $request->first_name,
                                "last_name" => $request->last_name,
                                "title" => $request->title,
                                "exhibit_phone" => $request->exhibit_phone,
                                "exhibit_email" => $request->exhibit_email);

        $exhibit_contacts = json_encode($contact_values);

        $contractor->contractor_name = $request->contractor_name;
        $contractor->short_name = $request->short_name;
        $contractor->type = $request->type;
        $contractor->other = $request->other;
        $contractor->address_line_1 = $request->address_line_1;
        $contractor->address_line_2 = $request->address_line_2;
        $contractor->address_line_3 = $request->address_line_3;
        $contractor->city = $request->city;
        $contractor->state = $request->state;
        $contractor->zipcode = $request->zipcode;
        $contractor->country = $request->country;
        $contractor->phone = $request->phone;
        $contractor->website = $request->website;
        $contractor->email = $request->email;
        $contractor->contact = $exhibit_contacts;

        $contractor->save();
        return redirect('admin/exhibitorcontractors');
    }

    public function delete($id)
    {
        $contractor = Exhibitorcontractor::find($id);
        $contractor->delete();
        return redirect('admin/exhibitorcontractors');
    }
}
