<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibitorcontractor;

class ExhibitorcontractorController extends Controller
{
    //
    public function contractors()
    {
        $data = Exhibitorcontractor::all();
        return view('admin/contractors',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Exhibitorcontractor::find($id);
        return view('admin/editcontractor',['data' => $data]);
    }

    public function insertcontractor(Request $request)
    {
        $contractor = new Exhibitorcontractor();
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
        $contractor->contact = $request->contact;

        $contractor->save();
        return redirect('admin/venues');
    }

    public function updatecontractor(Request $request)
    {
        $contractor = Exhibitorcontractor::find($request->id);
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
        $contractor->contact = $request->contact;

        $contractor->save();
        return redirect('admin/contractors');
    }

    public function delete($id)
    {
        $contractor = Exhibitorcontractor::find($id);
        $contractor->delete();
        return redirect('admin/contractors');
    }
}
