<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tradeshow;

class TradeshowController extends Controller
{
    //
    public function index()
    {
        $data = Tradeshow::all();
        return view('admin/tradeshows',['trades'=>$data]);
    }

    public function inserttradeshow(Request $request)
    {
        $trade = new Tradeshow();
        $trade->show_name = $request->show_name;
        $trade->start_publishing = $request->start_publishing;
        $trade->stop_publishing = $request->stop_publishing;
        $trade->show_management = $request->show_management;

        $trade->save();
        return redirect('admin/tradeshows');
    }

    public function showData($id)
    {
        $data = Tradeshow::find($id);
        return view('admin/edittradeshow',['data'=>$data]);
    }

    public function updatetradeshow(Request $request)
    {
        $trade = Tradeshow::find($request->id);
        $trade->show_name = $request->show_name;
        $trade->start_publishing = $request->start_publishing;
        $trade->stop_publishing = $request->stop_publishing;
        $trade->show_management = $request->show_management;

        $trade->save();
        return redirect('admin/tradeshows');
    }

    public function delete($id)
    {
        $trade = Tradeshow::find($id);
        $trade->delete();
        return redirect('admin/tradeshows');
    }
}
