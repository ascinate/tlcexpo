<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin/testimonials',['datas'=>$testimonial]);
    }

    public function inserttestimonal(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description = $request->description;

        $testimonial->save();
        return view('admin/testimonials');
    }

    public function showData($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin/edittestimonial',['data'=>$testimonial]);
    }

    public function updatetestimonial(Request $request)
    {
        $testimonial = Testimonial::find($request->id);
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description = $request->description;

        $testimonial->save();
        return view('admin/testimonials');
    }

    public function deletetestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return view('admin/testimonials');
    }

}
