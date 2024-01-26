<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenueController extends Controller
{
    //
    public function venues()
    {
        $data = Venue::all();
        return view('admin/venues',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Venue::find($id);
        return view('admin/editvenue',['data' => $data]);
    }

    public function insertvenue(Request $request)
    {
        $venue = new Venue();
        $venue->address = $request->address;
        $venue->address_line_1 = $request->address_line_1;
        $venue->address_line_2 = $request->address_line_2;
        $venue->address_line_3 = $request->address_line_3;
        $venue->city = $request->city;
        $venue->state = $request->state;
        $venue->zipcode = $request->zipcode;
        $venue->country = $request->country;
        $venue->phone = $request->phone;
        $venue->website = $request->website;
        $venue->email = $request->email;
        $venue->no_loading_dock = $request->no_loading_dock;
        $venue->limited_access = $request->limited_access;
        $venue->other = $request->other;
        $venue->notes = $request->notes;

        $venue->save();
        return redirect('admin/venues');
    }

    public function updatevenue(Request $request)
    {
        $venue = Venue::find($request->id);
        $venue->address = $request->address;
        $venue->address_line_1 = $request->address_line_1;
        $venue->address_line_2 = $request->address_line_2;
        $venue->address_line_3 = $request->address_line_3;
        $venue->city = $request->city;
        $venue->state = $request->state;
        $venue->zipcode = $request->zipcode;
        $venue->country = $request->country;
        $venue->phone = $request->phone;
        $venue->website = $request->website;
        $venue->email = $request->email;
        $venue->no_loading_dock = $request->no_loading_dock;
        $venue->limited_access = $request->limited_access;
        $venue->other = $request->other;
        $venue->notes = $request->notes;

        $venue->save();
        return redirect('admin/venues');
    }

    public function delete($id)
    {
        $venue = Venue::find($id);
        $venue->delete();
        return redirect('admin/venues');
    }
}
