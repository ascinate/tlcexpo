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
        $trade->total_attendance = $request->total_attendance;
        $trade->total_exhibitors = $request->total_exhibitors;
        $trade->naics_industry_sector = $request->naics_industry_sector;
        $trade->open_to_public = $request->open_to_public;
        $trade->frequency = $request->frequency;
        $trade->sponsoring_entity = $request->sponsoring_entity;

        if($image=$request->logo)
        {
            $destination = 'uploads/';
            $catImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destination, $catImage);
            $trade->logo = $catImage;
        }

        $trade->save();
        return redirect('admin/tradeshows');
    }

    public function showData($id)
    {
        $data = Tradeshow::find($id);
        return view('admin/edittradeshow',['data'=>$data]);
    }

    public function viewData($id)
    {
        $data = Tradeshow::find($id);
        return view('admin/viewtradeshow',['data'=>$data]);
    }

    public function updatetradeshow(Request $request)
    {
        $trade = Tradeshow::find($request->id);
        $trade->show_name = $request->show_name;
        $trade->total_attendance = $request->total_attendance;
        $trade->total_exhibitors = $request->total_exhibitors;
        $trade->naics_industry_sector = $request->naics_industry_sector;
        $trade->open_to_public = $request->open_to_public;
        $trade->frequency = $request->frequency;
        $trade->sponsoring_entity = $request->sponsoring_entity;

        if($image=$request->logo)
        {
            $destination = 'uploads/';
            $catImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destination, $catImage);
            $trade->logo = $catImage;
        }

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
