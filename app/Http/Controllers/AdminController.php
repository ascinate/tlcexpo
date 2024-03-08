<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Tradeshow;
use App\Models\Event;
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
        $trade = Tradeshow::all();
        $event = Event::all();
        return view('admin/dashboard',['customers' => $data, 'trades' => $trade, 'events' => $event]);
    }

    public function users()
    {
        $data = Admin::all();
        return view('admin/users',['users' => $data]);
    }

    public function showData($id)
    {
        $data = Admin::find($id);
        return view('admin/edituser',['data'=>$data]);
    }

    public function insertuser(Request $request)
    {
        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        $user->save();
        return redirect('admin/users');
    }

    public function updateuser(Request $request)
    {
        $user = Admin::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        $user->save();
        return redirect('admin/users');
    }

    public function delete($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return view('admin/users');
    }
}
