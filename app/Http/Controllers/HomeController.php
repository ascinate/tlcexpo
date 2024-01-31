<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Whytlc;
use App\Models\Testimonial;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = Home::all();
        $whytlc = Whytlc::offset(0)->limit(4)->get();
        $testimonial = Testimonial::offset(0)->limit(2)->get();
        return view('home',['datas'=>$data, 'services'=>$whytlc, 'testimonials'=>$testimonial]);
    }

    public function updatehome(Request $request)
    {
        $home = Home::find($request->id);
        $home->banner1_head = $request->banner1_head;
        $home->banner1_caption = $request->banner1_caption;
        $home->banner2_head = $request->banner2_head;
        $home->banner2_caption = $request->banner2_caption;
        $home->about_head = $request->about_head;
        $home->about_description = $request->about_description;

        $home->top_address = $request->top_address;
        $home->top_email = $request->top_email;
        $home->top_contact = $request->top_contact;

        if($request->hasFile('banner1'))
        {
            if ($image = $request->file('banner1'))
            {
                $destinationPath = 'uploads/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $home->banner1 = "$profileImage";
            }
        }

        if($request->hasFile('banner2'))
        {
            if ($image = $request->file('banner2'))
            {
                $destinationPath = 'uploads/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $home->banner2 = "$profileImage";
            }
        }

        $home->save();
        return redirect('admin/edithome');
    }
}
