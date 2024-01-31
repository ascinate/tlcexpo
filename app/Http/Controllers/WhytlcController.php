<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whytlc;

class WhytlcController extends Controller
{
    //
    public function index()
    {
        $data = Whytlc::all();
        return view('admin/whytlc',['datas'=>$data]);
    }

    public function front()
    {
        $data = Whytlc::all();
        return view('why-tlc-expo',['datas'=>$data]);
    }

    public function showData($id)
    {
        $data = Whytlc::find($id);
        return view('admin/editwhytlc',['data'=>$data]);
    }

    public function updatewhytlc(Request $request)
    {
        $whytlc = Whytlc::find($request->id);
        $whytlc->title = $request->title;
        $whytlc->description = $request->description;

        $whytlc->save();
        return redirect('admin/whytlc');
    }

    public function delete($id)
    {
        $whytlc = Whytlc::find($id);
        $whytlc->delete();
        return redirect('admin/whytlc');
    }
}
