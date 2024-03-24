<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibitorcontractor;
use Illuminate\Support\Facades\DB;

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
        $contractor->warehouse_address = $request->warehouse_address;
        $contractor->marshaling_address = $request->marshaling_address;

       /* $contractor->warehouse_address = $request->warehouse_address;
        $contractor->address_line_1 = $request->address_line_1;
        $contractor->address_line_2 = $request->address_line_2;
        $contractor->address_line_3 = $request->address_line_3;
        $contractor->city = $request->city;
        $contractor->state = $request->state;
        $contractor->zipcode = $request->zipcode;
        $contractor->country = $request->country;

        $contractor->marshaling_address = $request->marshaling_address;
        $contractor->marshaling_address_line_1 = $request->marshaling_address_line_1;
        $contractor->marshaling_address_line_2 = $request->marshaling_address_line_2;
        $contractor->marshaling_address_line_3 = $request->marshaling_address_line_3;
        $contractor->marshaling_city = $request->marshaling_city;
        $contractor->marshaling_state = $request->marshaling_state;
        $contractor->marshaling_zipcode = $request->marshaling_zipcode;
        $contractor->marshaling_country = $request->marshaling_country;*/

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
        $contractor->warehouse_address = $request->warehouse_address;
        $contractor->marshaling_address = $request->marshaling_address;

        /*$contractor->address_line_1 = $request->address_line_1;
        $contractor->address_line_2 = $request->address_line_2;
        $contractor->address_line_3 = $request->address_line_3;
        $contractor->city = $request->city;
        $contractor->state = $request->state;
        $contractor->zipcode = $request->zipcode;
        $contractor->country = $request->country;

        $contractor->marshaling_address_line_1 = $request->marshaling_address_line_1;
        $contractor->marshaling_address_line_2 = $request->marshaling_address_line_2;
        $contractor->marshaling_address_line_3 = $request->marshaling_address_line_3;
        $contractor->marshaling_city = $request->marshaling_city;
        $contractor->marshaling_state = $request->marshaling_state;
        $contractor->marshaling_zipcode = $request->marshaling_zipcode;
        $contractor->marshaling_country = $request->marshaling_country;*/

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

    //////////////////////  Exhibitor ////////////

    public function exhibitorlocation(Request $request)
    {
        $datas = DB::table('locations')->where('id',$request->id)->get();
        foreach($datas as $data)
        {
            //echo $data->address_line_1;
      echo '
        <div class="card-body" id="wareh">
        <div class="d-flex align-items-center">
            <h4 class="card-title">Warehouse </h4>
        </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">Warehouse Address</label>
                    <input type="text" class="form-control" name="warehouse_address" value="">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label> Address line 1 </label>
                    <input type="text" name="address_line_1" class="form-control" value="'.$data->address_line_1.'"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">Address line 2</label>
                    <input type="text" class="form-control" name="address_line_2" value="'.$data->address_line_2.'">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label> Address line 3 </label>
                    <input type="text" name="address_line_3" class="form-control"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">City</label>
                    <input type="text" class="form-control" name="city" value="'.$data->city.'">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label> State </label>
                    <input type="text" name="state" class="form-control" value="'.$data->state.'"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">Zipcode</label>
                    <input type="text" class="form-control" name="zipcode" value="'.$data->zipcode.'">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label> Country </label>
                    <input type="text" name="country" class="form-control" value="'.$data->country.'"/>
                    </div>
                </div>
            </div>

        </div>

        <div id="sho-card" class="card-body pb-0">
        <div class="d-flex align-items-center">
            <h4 class="card-title">Marshaling Yard</h4>
        </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">Marshaling Address</label>
                    <input type="text" class="form-control" name="marshaling_address">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label> Address line 1 </label>
                    <input type="text" name="marshaling_address_line_1" class="form-control" value="'.$data->address_line_1.'"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">Marshaling Address line 2</label>
                    <input type="text" class="form-control" name="marshaling_address_line_2" value="'.$data->address_line_2.'">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label>Marshaling  Address line 3 </label>
                    <input type="text" name="marshaling_address_line_3" class="form-control"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">Marshaling City</label>
                    <input type="text" class="form-control" name="marshaling_city" value="'.$data->city.'">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label>Marshaling  State </label>
                    <input type="text" name="marshaling_state" class="form-control" value="'.$data->state.'"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputName1">Marshaling Zipcode</label>
                    <input type="text" class="form-control" name="marshaling_zipcode" value="'.$data->zipcode.'">
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                    <label>Marshaling Country </label>
                    <input type="text" name="marshaling_country" class="form-control" value="'.$data->country.'"/>
                    </div>
                </div>
            </div>

        </div>';

} /// end foreach

    }
}
