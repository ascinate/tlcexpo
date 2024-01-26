<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function adminlogin(Request $request)
    {
        $credential = new Admin();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential->email = $request->email;
        $credential->password = $request->password;

        $data = DB::table('admins')
                    ->where('email',$credential->email)
                    ->where('password', $credential->password)->get();

        $count = $data->count();

        if($count!=0)
        {
           $request->session()->put('adminuser',$credential->email);
           return redirect('admin/dashboard');
        }
        else
        {
            return redirect('admin/login')->with('failed', 'WRONG CREDENTIALS!');
        }
    }

    public function index()
    {
        $data = Customer::all();
        return view('admin/dashboard',['customers' => $data]);
    }
}