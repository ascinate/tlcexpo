<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentController extends Controller
{
    //
    public function index()
    {
        $data = Shipment::all();
        return view('admin/shipments', ['datas'=>$data]);
    }

    public function showData($id)
    {
        $data = Shipment::find($id);
        return view('admin/editshipment', ['data'=>$data]);
    }

    public function insertshipment(Request $request)
    {
        $shipment = new Shipment();
        $shipment->loads = $request->loads;
        $shipment->order_no = $request->order_no;
        $shipment->trip = $request->trip;
        $shipment->customer = $request->customer;
        $shipment->quote = $request->quote;
        $shipment->invoice_no = $request->invoice_no;
        $shipment->invoice_date	 = $request->invoice_date;
        $shipment->paid_date = $request->paid_date;
        $shipment->comments	= $request->comments;
        $shipment->updated_at	= date('Y-m-d');

        $shipment->save();
        return redirect('admin/shipments');
    }

    public function updateshipment(Request $request)
    {
        $shipment = Shipment::find($request->id);

        $shipment->loads = $request->loads;
        $shipment->order_no = $request->order_no;
        $shipment->trip = $request->trip;
        $shipment->customer = $request->customer;
        $shipment->quote = $request->quote;
        $shipment->invoice_no = $request->invoice_no;
        $shipment->invoice_date	 = $request->invoice_date;
        $shipment->paid_date = $request->paid_date;
        $shipment->comments	= $request->comments;
        $shipment->updated_at	= date('Y-m-d');

        $shipment->save();
        return redirect('admin/shipments');
    }

    public function delete($id)
    {
        $shipment = Shipment::find($id);
        $shipment->delete();
        return redirect('admin/shipments');
    }
}
