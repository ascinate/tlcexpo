<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Load;

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
        if($request->loads!='')
        {
            $loads = @implode(",", $request->loads);
        }
        else
        {
            $loads = '';
        }
        $shipment = new Shipment();
        $shipment->loads = $loads;
        $shipment->order_no = $request->order_no;
        $shipment->trip = $request->trip;
        $shipment->customer = $request->customer;
        $shipment->quote = $request->quote;
        $shipment->tradeshow = $request->tradeshow;
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
        if($request->loads!='')
        {
            $loads = @implode(",", $request->loads);
        }
        else
        {
            $loads = '';
        }

        $shipment->loads = $loads;
        $shipment->order_no = $request->order_no;
        $shipment->trip = $request->trip;
        $shipment->customer = $request->customer;
        $shipment->quote = $request->quote;
        $shipment->tradeshow = $request->tradeshow;
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

    public function loads(Request $request)
    {
        $datas = Load::where('customer_id',$request->id)->get();
        echo '<select name="loads[]" class="form-select" multiple>';
            foreach($datas as $data)
            {
            echo  '<option value='.$data->id.'>'.$data->load_id.'</option>';
            }
        echo '</select>';
    }

    //////////////// User end

    public function shipmentdetails($id)
    {
        $data = Shipment::find($id);
        return view('shipment-details', ['data'=>$data]);
    }
}
