<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Managecontractor;

class ManagecontractorController extends Controller
{
    //
    public function contractors()
    {
        $data = Managecontractor::all();
        return view('admin/managementcontractors',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Managecontractor::find($id);
        return view('admin/editmanagementcontractor',['data' => $data]);
    }

    public function viewData($id)
    {
        $data = Managecontractor::find($id);
        return view('admin/viewmanagementcontractor',['data' => $data]);
    }

    public function insertcontractor(Request $request)
    {
        $contractor = new Managecontractor();
        $contact_values = array("first_name_manage" => $request->first_name_manage,
                                "last_name_manage" => $request->last_name_manage,
                                "exhibit_website_manage" => $request->exhibit_website_manage,
                                "exhibit_phone_manage" => $request->exhibit_phone_manage,
                                "exhibit_email_manage" => $request->exhibit_email_manage);


       // print_r($contact_values);      exit();
        $exhibit_contacts = json_encode($contact_values);

        $contractor->contractor_name = $request->contractor_name;
        $contractor->short_name = $request->short_name;
       // $contractor->type = $request->type;
       // $contractor->other = $request->other;
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
        return redirect('admin/managementcontractors');
    }

    public function updatecontractor(Request $request)
    {
        $contractor = Managecontractor::find($request->id);

        $values = array("first_name_manage" => $request->first_name_manage,
                        "last_name_manage" => $request->last_name_manage,
                        "exhibit_website_manage" => $request->exhibit_website_manage,
                        "exhibit_phone_manage" => $request->exhibit_phone_manage,
                        "exhibit_email_manage" => $request->exhibit_email_manage);

        $contacts = json_encode($values);

        $contractor->contractor_name = $request->contractor_name;
        $contractor->short_name = $request->short_name;
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
        $contractor->contact = $contacts;

        $contractor->save();
        return redirect('admin/managementcontractors');
    }

    public function delete($id)
    {
        $venue = Managecontractor::find($id);
        $venue->delete();
        return redirect('admin/managementcontractors');
    }
}
