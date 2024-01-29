<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
        $event->tradeshow = $request->tradeshow;
        $event->event_name = $request->event_name;
        $event->main_venue = $request->main_venue;
        $event->showsite = $request->showsite;
        $event->exhibit_hours = $request->exhibit_hours;
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
        $event->exhibitor_movein = $request->exhibitor_movein;
        $event->exhibitor_moveout = $request->exhibitor_moveout;
        $event->notes = $request->notes;

        $event->save();
        return redirect('admin/events');
    }

    public function showData($id)
    {
        $data = Event::find($id);
        return view('admin/editevent',['datas'=>$data]);
    }

    public function updateshow(Request $request)
    {
        $event = Event::find($request->id);
        $event->tradeshow = $request->tradeshow;
        $event->event_name = $request->event_name;
        $event->main_venue = $request->main_venue;
        $event->showsite = $request->showsite;
        $event->exhibit_hours = $request->exhibit_hours;
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
        $event->exhibitor_movein = $request->exhibitor_movein;
        $event->exhibitor_moveout = $request->exhibitor_moveout;
        $event->notes = $request->notes;

        $event->save();
        return redirect('admin/events');
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('admin/events');
    }
}
