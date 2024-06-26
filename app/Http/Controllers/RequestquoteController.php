<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requestquote;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class RequestquoteController extends Controller
{
    //
    public function index()
    {
        $quote = Requestquote::all();
        return view('admin/quotes',['quotes'=>$quote]);
    }

    public function showData($id)
    {
        $data = Requestquote::find($id);
        return view('admin/editrequestquote',['data'=>$data]);
    }

    public function viewData($id)
    {
        $data = Requestquote::find($id);
        return view('admin/viewrequestquote',['data'=>$data]);
    }

    public function insertquote(Request $request)
    {
        $requestquote = new Requestquote();

        $items = array('type' => $request->type,
                       'qty' => $request->qty,
                       'length' => $request->length,
                       'width' => $request->width,
                       'height' => $request->height,
                       'weight' => $request->weight,
                       'description' => $request->description,
                       'Hazardous' => $request->Hazardous,
                       'Stackable' => $request->Stackable);

       $cargo_items = json_encode($items);
       if($request->return_to_origin=='')
       {
         $value = 'No';
       }
       else{
        $value = 'Yes';
       }

        $requestquote->customer_contact_name = $request->customer_contact_name;
        $requestquote->email = $request->email;
        $requestquote->phone = $request->phone;
        $requestquote->shipment_type = $request->shipment_type;
        $requestquote->return_to_origin = $value;
        $requestquote->exhibitor_name = $request->exhibitor_name;
        $requestquote->booth = $request->booth;
        $requestquote->tradeshow_name = $request->tradeshow_name;
        $requestquote->show_management_contractor = $request->show_management_contractor;
        $requestquote->tradeshow_venue = $request->tradeshow_venue;
        $requestquote->show_destination = $request->show_destination;
        $requestquote->service_level = $request->service_level;
        $requestquote->equipment = $request->equipment;
        $requestquote->detention_allowance = $request->detention_allowance;
        $requestquote->accessorials = implode(",",$request->accessorials);
        $requestquote->origin_address_line_1 = $request->origin_address_line_1;
        $requestquote->origin_address_line_2 = $request->origin_address_line_2;
        $requestquote->origin_city = $request->origin_city;
        $requestquote->origin_state = $request->origin_state;
        $requestquote->origin_zipcode = $request->origin_zipcode;
        $requestquote->origin_country = $request->origin_country;
        $requestquote->destination_address_line_1 = $request->destination_address_line_1;
        $requestquote->destination_address_line_2 = $request->destination_address_line_2;
        $requestquote->destination_city = $request->destination_city;
        $requestquote->destination_state = $request->destination_state;
        $requestquote->destination_zipcode = $request->destination_zipcode;
        $requestquote->destination_country = $request->destination_country;
        $requestquote->pickup_date = $request->pickup_date;
        $requestquote->driver_check_in = $request->driver_check_in;
        $requestquote->delivery_deadline = $request->delivery_deadline;
        $requestquote->driver_check_in_deadline = $request->driver_check_in_deadline;
        $requestquote->marshaling_address_line_1 = $request->marshaling_address_line_1;
        $requestquote->marshaling_address_line_2 = $request->marshaling_address_line_2;
        $requestquote->marshaling_city = $request->marshaling_city;
        $requestquote->marshaling_state = $request->marshaling_state;
        $requestquote->marshaling_zipcode = $request->marshaling_zipcode;
        $requestquote->alt_address_line_1 = $request->alt_address_line_1;
        $requestquote->alt_address_line_2 = $request->alt_address_line_2;
        $requestquote->alt_city = $request->alt_city;
        $requestquote->alt_state = $request->alt_state;
        $requestquote->alt_zipcode = $request->alt_zipcode;
        $requestquote->alt_country = $request->alt_country;
        $requestquote->cargo_Items = $cargo_items;
        $requestquote->quote_date = date('Y-m-d');

        $requestquote->save();
        return redirect('admin/quotes');
    }

    public function updatequote(Request $request)
    {
        $requestquote = Requestquote::find($request->id);

        $items = array('type' => $request->type,
                       'qty' => $request->qty,
                       'length' => $request->length,
                       'width' => $request->width,
                       'height' => $request->height,
                       'weight' => $request->weight,
                       'description' => $request->description,
                       'Hazardous' => $request->Hazardous,
                       'Stackable' => $request->Stackable);

        $cargo_items = json_encode($items);
        if($request->return_to_origin=='')
        {
            $value = 'No';
        }
        else{
            $value = 'Yes';
        }

        $requestquote->customer_contact_name = $request->customer_contact_name;
        $requestquote->email = $request->email;
        $requestquote->phone = $request->phone;
        $requestquote->shipment_type = $request->shipment_type;
        $requestquote->return_to_origin = $value;
        $requestquote->exhibitor_name = $request->exhibitor_name;
        $requestquote->booth = $request->booth;
        $requestquote->tradeshow_name = $request->tradeshow_name;
        $requestquote->show_management_contractor = $request->show_management_contractor;
        $requestquote->tradeshow_venue = $request->tradeshow_venue;
        $requestquote->show_destination = $request->show_destination;
        $requestquote->service_level = $request->service_level;
        $requestquote->equipment = $request->equipment;
        $requestquote->detention_allowance = $request->detention_allowance;
        $requestquote->accessorials = implode(",",$request->accessorials);
        $requestquote->origin_address_line_1 = $request->origin_address_line_1;
        $requestquote->origin_address_line_2 = $request->origin_address_line_2;
        $requestquote->origin_city = $request->origin_city;
        $requestquote->origin_state = $request->origin_state;
        $requestquote->origin_zipcode = $request->origin_zipcode;
        $requestquote->origin_country = $request->origin_country;
        $requestquote->destination_address_line_1 = $request->destination_address_line_1;
        $requestquote->destination_address_line_2 = $request->destination_address_line_2;
        $requestquote->destination_city = $request->destination_city;
        $requestquote->destination_state = $request->destination_state;
        $requestquote->destination_zipcode = $request->destination_zipcode;
        $requestquote->destination_country = $request->destination_country;
        $requestquote->pickup_date = $request->pickup_date;
        $requestquote->driver_check_in = $request->driver_check_in;
        $requestquote->delivery_deadline = $request->delivery_deadline;
        $requestquote->driver_check_in_deadline = $request->driver_check_in_deadline;
        $requestquote->marshaling_address_line_1 = $request->marshaling_address_line_1;
        $requestquote->marshaling_address_line_2 = $request->marshaling_address_line_2;
        $requestquote->marshaling_city = $request->marshaling_city;
        $requestquote->marshaling_state = $request->marshaling_state;
        $requestquote->marshaling_zipcode = $request->marshaling_zipcode;
        $requestquote->alt_address_line_1 = $request->alt_address_line_1;
        $requestquote->alt_address_line_2 = $request->alt_address_line_2;
        $requestquote->alt_city = $request->alt_city;
        $requestquote->alt_state = $request->alt_state;
        $requestquote->alt_zipcode = $request->alt_zipcode;
        $requestquote->alt_country = $request->alt_country;
        $requestquote->cargo_Items = $cargo_items;

        $requestquote->save();
        return redirect('admin/quotes');
    }

    public function delete($id)
    {
        $location = Requestquote::find($id);
        $location->delete();
        return redirect('admin/quotes');
    }


    ///////////  User end ///

    public function requestquote(Request $request)
    {
        $requestquote = new Requestquote();

        $items = array('type' => $request->type,
                       'qty' => $request->qty,
                       'length' => $request->length,
                       'width' => $request->width,
                       'height' => $request->height,
                       'weight' => $request->weight,
                       'description' => $request->description,
                       'Hazardous' => $request->Hazardous,
                       'Stackable' => $request->Stackable);

       $cargo_items = json_encode($items);
       if($request->return_to_origin=='')
       {
         $value = 'No';
       }
       else{
        $value = 'Yes';
       }

        $requestquote->customer_contact_name = $request->customer_contact_name;
        $requestquote->email = $request->email;
        $requestquote->phone = $request->phone;
        $requestquote->shipment_type = $request->shipment_type;
        $requestquote->return_to_origin = $value;
        $requestquote->exhibitor_name = $request->exhibitor_name;
        $requestquote->booth = $request->booth;
        $requestquote->tradeshow_name = $request->tradeshow_name;
        $requestquote->show_management_contractor = $request->show_management_contractor;
        $requestquote->tradeshow_venue = $request->tradeshow_venue;
        $requestquote->show_destination = $request->show_destination;
        $requestquote->service_level = $request->service_level;
        $requestquote->equipment = $request->equipment;
        $requestquote->detention_allowance = $request->detention_allowance;
        $requestquote->accessorials = implode(",",$request->accessorials);
        $requestquote->origin_address_line_1 = $request->origin_address_line_1;
        $requestquote->origin_address_line_2 = $request->origin_address_line_2;
        $requestquote->origin_city = $request->origin_city;
        $requestquote->origin_state = $request->origin_state;
        $requestquote->origin_zipcode = $request->origin_zipcode;
        $requestquote->origin_country = $request->origin_country;
        $requestquote->destination_address_line_1 = $request->destination_address_line_1;
        $requestquote->destination_address_line_2 = $request->destination_address_line_2;
        $requestquote->destination_city = $request->destination_city;
        $requestquote->destination_state = $request->destination_state;
        $requestquote->destination_zipcode = $request->destination_zipcode;
        $requestquote->destination_country = $request->destination_country;
        $requestquote->pickup_date = $request->pickup_date;
        $requestquote->driver_check_in = $request->driver_check_in;
        $requestquote->delivery_deadline = $request->delivery_deadline;
        $requestquote->driver_check_in_deadline = $request->driver_check_in_deadline;
        $requestquote->marshaling_address_line_1 = $request->marshaling_address_line_1;
        $requestquote->marshaling_address_line_2 = $request->marshaling_address_line_2;
        $requestquote->marshaling_city = $request->marshaling_city;
        $requestquote->marshaling_state = $request->marshaling_state;
        $requestquote->marshaling_zipcode = $request->marshaling_zipcode;
        $requestquote->alt_address_line_1 = $request->alt_address_line_1;
        $requestquote->alt_address_line_2 = $request->alt_address_line_2;
        $requestquote->alt_city = $request->alt_city;
        $requestquote->alt_state = $request->alt_state;
        $requestquote->alt_zipcode = $request->alt_zipcode;
        $requestquote->alt_country = $request->alt_country;
        $requestquote->cargo_Items = $cargo_items;
        $requestquote->quote_date = date('Y-m-d');

        $requestquote->save();
        return redirect('thankyou');
    }

    public function tradequote(Request $request)
    {
       $tradeshow = $request->id;
       $show_contractor = DB::table('events')->where('tradeshow', $tradeshow)->distinct('show_contractor')->get();
       $show_venue = DB::table('events')->where('tradeshow', $tradeshow)->distinct('main_venue')->get();
?>
  <div class="col-lg-6">
        <div class="form-group">
            <label for="exampleInputName1" class="form-label"> Show Management Contractor </label>
            <select name="show_management_contractor" id="contractor" class="form-select soy-hegiht">
                <option value="">--Choose One--</option>
                <?php
                 foreach($show_contractor as $value)
                 {
                    $contractor = DB::table('managecontractors')->where('id', $value->show_contractor)->get();
                    $cname = $contractor[0]->contractor_name;
                ?>
                  <option value="<?php echo $cname; ?>"><?php echo $cname; ?></option>
                <?php
                 }
                ?>
            </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label for="exampleInputName1" class="form-label"> Tradeshow Venue </label>
            <select name="tradeshow_venue" class="form-select soy-hegiht">
            <option value="">--Choose One--</option>
                <?php
                 foreach($show_venue as $val)
                 {
                ?>
                  <option value="<?php echo $val->main_venue; ?>"><?php echo $val->main_venue; ?></option>
                <?php
                 }
                ?>
            </select>
        </div>
    </div>
<?php
    }

    public function destination(Request $request)
    {
        $contractor = $request->id;
        $show_contractor = DB::table('managecontractors')->where('id', $contractor)->get();
 ?>
    <option value="">--Choose One--</option>
     <?php
        foreach($show_contractor as $val)
        {
            $location = DB::table('locations')->where('id', $val->warehouse_address)->get();
            $wname = $location[0]->location_description;
     ?>
        <option value="<?php echo $val->warehouse_address; ?>"><?php echo $wname; ?></option>
     <?php
        }
    }
}
