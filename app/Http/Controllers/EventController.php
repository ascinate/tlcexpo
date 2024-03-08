<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //
    public function index()
    {
        $data = Event::all();
        return view('admin/events',['events'=>$data]);
    }

    public function insertevent(Request $request)
    {
        $event = new Event();

        $exhibit_values = array("exhibit_date" => $request->exhibit_date,
                                "exhibit_open_time" => $request->exhibit_open_time,
                                "exhibit_closed_time" => $request->exhibit_closed_time);

        $movein_values = array("move_in_description" => $request->move_in_description,
                               "move_in_date" => $request->move_in_date,
                               "move_in_open_time" => $request->move_in_open_time,
                               "move_in_closed_time" => $request->move_in_closed_time,
                               "move_in_deadline" => $request->move_in_deadline);

        $moveout_values = array("move_out_description" => $request->move_out_description,
                                "move_out_date" => $request->move_out_date,
                                "move_out_open_time" => $request->move_out_open_time,
                                "move_out_closed_time" => $request->move_out_closed_time,
                                "move_out_deadline" => $request->move_out_deadline);


        $exhibit_hours = json_encode($exhibit_values);
        $exhibit_movein = json_encode($movein_values);
        $exhibit_moveout = json_encode($moveout_values);

        $event->tradeshow = $request->tradeshow;
        $event->event_name = $request->event_name;
        $event->main_venue = $request->main_venue;
        $event->show_contractor = $request->show_contractor;
        $event->showsite = $request->showsite;
        $event->event_start_date = $request->event_start_date;
        $event->event_end_date = $request->event_end_date;
        $event->exhibit_hours = $exhibit_hours;
        $event->warehouse_address = $request->warehouse_address;
        $event->address_line_1 = $request->address_line_1;
        $event->address_line_2 = $request->address_line_2;
        $event->address_line_3 = $request->address_line_3;
        $event->city = $request->city;
        $event->state = $request->state;
        $event->zipcode = $request->zipcode;
        $event->country = $request->country;
        $event->open_date = $request->open_date;
        $event->whse_deadline = $request->whse_deadline;
        $event->operation_days_hours = $request->operation_days_hours;
        $event->marshaling_yard = $request->marshaling_yard;
        $event->marshaling_address = $request->marshaling_address;
        $event->marshaling_address_line_1 = $request->marshaling_address_line_1;
        $event->marshaling_address_line_2 = $request->marshaling_address_line_2;
        $event->marshaling_address_line_3 = $request->marshaling_address_line_3;
        $event->marshaling_city = $request->marshaling_city;
        $event->marshaling_state = $request->marshaling_state;
        $event->marshaling_zipcode = $request->marshaling_zipcode;
        $event->marshaling_country = $request->marshaling_country;
        $event->marshaling_service = $request->marshaling_service;
        $event->yard_fee = $request->yard_fee;
        $event->marshaling_instruction = $request->marshaling_instruction;
        $event->exhibitor_movein = $exhibit_movein;
        $event->exhibitor_moveout = $exhibit_moveout;
        $event->notes = $request->notes;

        if($image=$request->event_logo)
        {
            $destination = 'uploads/';
            $catImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destination, $catImage);
            $event->event_logo = $catImage;
        }

        $event->save();
        return redirect('admin/events');
    }

    public function showData($id)
    {
        $data = Event::find($id);
        return view('admin/editevent',['data'=>$data]);
    }

    public function viewData($id)
    {
        $data = Event::find($id);
        return view('admin/viewevent',['data'=>$data]);
    }

    public function updateevent(Request $request)
    {
        $event = Event::find($request->id);
        $exhibit_values = array("exhibit_date" => $request->exhibit_date,
                                "exhibit_open_time" => $request->exhibit_open_time,
                                "exhibit_closed_time" => $request->exhibit_closed_time);

        $movein_values = array("move_in_description" => $request->move_in_description,
                               "move_in_date" => $request->move_in_date,
                               "move_in_open_time" => $request->move_in_open_time,
                               "move_in_closed_time" => $request->move_in_closed_time,
                               "move_in_deadline" => $request->move_in_deadline);

        $moveout_values = array("move_out_description" => $request->move_out_description,
                                "move_out_date" => $request->move_out_date,
                                "move_out_open_time" => $request->move_out_open_time,
                                "move_out_closed_time" => $request->move_out_closed_time,
                                "move_out_deadline" => $request->move_out_deadline);


        $exhibit_hours = json_encode($exhibit_values);
        $exhibit_movein = json_encode($movein_values);
        $exhibit_moveout = json_encode($moveout_values);

        $event->tradeshow = $request->tradeshow;
        $event->event_name = $request->event_name;
        $event->main_venue = $request->main_venue;
        $event->show_contractor = $request->show_contractor;
        $event->showsite = $request->showsite;
        $event->event_start_date = $request->event_start_date;
        $event->event_end_date = $request->event_end_date;
        $event->exhibit_hours = $exhibit_hours;
        $event->warehouse_address = $request->warehouse_address;
        $event->address_line_1 = $request->address_line_1;
        $event->address_line_2 = $request->address_line_2;
        $event->address_line_3 = $request->address_line_3;
        $event->city = $request->city;
        $event->state = $request->state;
        $event->zipcode = $request->zipcode;
        $event->country = $request->country;
        $event->open_date = $request->open_date;
        $event->whse_deadline = $request->whse_deadline;
        $event->operation_days_hours = $request->operation_days_hours;
        $event->marshaling_yard = $request->marshaling_yard;
        $event->marshaling_address = $request->marshaling_address;
        $event->marshaling_address_line_1 = $request->marshaling_address_line_1;
        $event->marshaling_address_line_2 = $request->marshaling_address_line_2;
        $event->marshaling_address_line_3 = $request->marshaling_address_line_3;
        $event->marshaling_city = $request->marshaling_city;
        $event->marshaling_state = $request->marshaling_state;
        $event->marshaling_zipcode = $request->marshaling_zipcode;
        $event->marshaling_country = $request->marshaling_country;
        $event->marshaling_service = $request->marshaling_service;
        $event->yard_fee = $request->yard_fee;
        $event->marshaling_instruction = $request->marshaling_instruction;
        $event->exhibitor_movein = $exhibit_movein;
        $event->exhibitor_moveout = $exhibit_moveout;
        $event->notes = $request->notes;

        if($image=$request->event_logo)
        {
            $destination = 'uploads/';
            $catImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destination, $catImage);
            $event->event_logo = $catImage;
        }

        $event->save();
        return redirect('admin/events');
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('admin/events');
    }

    public function getlocation(Request $request)
    {
        $datas = DB::table('locations')->where('id',$request->id)->get();
        foreach($datas as $data)
        {
            //cho $data->address_line_1;


    echo '
        <div class="card-body" id="wareh">
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

            <div class="row">
                <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputName1">Open Date</label>
                    <input type="date" class="form-control" name="open_date">
                </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                    <label> Adv Whse Deadline </label>
                    <input type="date" name="whse_deadline" class="form-control"/>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                    <label> Operation Days / Hours </label>
                    <input type="text" name="operation_days_hours" class="form-control"/>
                    </div>
                </div>

            </div>
        </div>

        <div class="card-body pt-0">
            <div class="d-flex align-items-center">
            <h4 class="card-title">Marshaling Yard</h4>
            <div class="toggle-button-cover">
                <div class="button-cover">
                    <div class="button r" id="button-1">
                    <input type="checkbox" name="marshaling_yard" value="Y" class="checkbox" />
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>
            </div>
            </div>

        </div>
        </div>

        <div id="sho-card" class="card-body pb-0">

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

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputName1">Marshaling Services</label>&nbsp;
                        <input type="checkbox" value="Y" name="marshaling_services">
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputName1">Yard Fee($)</label>
                        <input type="text" class="form-control" name="yard_fee">
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputName1">Marshaling Instruction</label>
                        <input type="text" class="form-control" name="marshaling_instruction">
                    </div>
                    </div>
            </div>

        </div>';

} /// end foreach

    }
}
