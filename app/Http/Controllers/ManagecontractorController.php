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

    public function insertcontractor(Request $request)
    {
        $contractor = new Managecontractor();
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

        $contractor->save();
        return redirect('admin/managementcontractors');
    }

    public function updatecontractor(Request $request)
    {
        $contractor = Managecontractor::find($request->id);
        $contractor->contractor_name = $request->contractor_name;
        $contractor->short_name = $request->short_name;
       // $contractor->type = $request->type;
        //$contractor->other = $request->other;
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
