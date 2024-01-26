<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function customers()
    {
        $data = Customer::all();
        return view('admin/customers', ['datas' => $data]);
    }

    ///////////// Userend Functions /////////////

    public function addcustomer(Request $request)
    {
        $customer = new Customer();

        if($request->limitation=='Other')
        {
            $limitation = $request->other_limitation;
        }
        else
        {
            $limitation = $request->limitation;
        }

        $customer->customer_name = $request->customer_name;
        $customer->address = $request->address;
        $customer->address_line_1 = $request->address_line_1;
        $customer->address_line_2 = $request->address_line_2;
        $customer->address_line_3 = $request->address_line_3;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zipcode = $request->zipcode;
        $customer->country = $request->country;
        $customer->sales_rep = $request->sales_rep;
        $customer->initials = $request->initials;
        $customer->commission = $request->commission;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->phone = $request->phone;
        $customer->website = $request->website;
        $customer->terms = $request->terms;
        $customer->margin = $request->margin;
        $customer->limitation = $limitation;

        $customer->save();
        return redirect('login');
    }

    function customerlogin(Request $request)
    {
        $credential = new Customer();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential->email = $request->email;
        $credential->password = $request->password;

        $data = DB::table('customers')
                    ->where('email',$credential->email)
                    ->where('password', $credential->password)->get();

        $count = $data->count();

        if($count!=0)
        {
           $request->session()->put('user',$credential->email);
           $request->session()->put('name',$data[0]->customer_name);
           return redirect('dashboard');
        }
        else
        {
            return redirect('login')->with('error', 'WRONG EMAIL & PASSWORD!');
        }
    }


    /////////// Admin functions ////////////

    public function showData($id)
    {
        $data = Customer::find($id);
        return view('admin/editcustomer',['data' => $data]);
    }

    public function insertcustomer(Request $request)
    {
        $customer = new Customer();

        if($request->limitation=='Other')
        {
            $limitation = $request->other_limitation;
        }
        else
        {
            $limitation = $request->limitation;
        }

        $customer->customer_name = $request->customer_name;
        $customer->address = $request->address;
        $customer->address_line_1 = $request->address_line_1;
        $customer->address_line_2 = $request->address_line_2;
        $customer->address_line_3 = $request->address_line_3;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zipcode = $request->zipcode;
        $customer->country = $request->country;
        $customer->sales_rep = $request->sales_rep;
        $customer->initials = $request->initials;
        $customer->commission = $request->commission;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->phone = $request->phone;
        $customer->website = $request->website;
        $customer->terms = $request->terms;
        $customer->margin = $request->margin;
        $customer->limitation = $limitation;
        $customer->notes = $request->notes;

        $customer->save();
        return redirect('admin/customers');
    }

    public function updatecustomer(Request $request)
    {
        $customer = Customer::find($request->id);

        if($request->limitation=='Other')
        {
            $limitation = $request->other_limitation;
        }
        else
        {
            $limitation = $request->limitation;
        }

        $customer->customer_name = $request->customer_name;
        $customer->address = $request->address;
        $customer->address_line_1 = $request->address_line_1;
        $customer->address_line_2 = $request->address_line_2;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zipcode = $request->zipcode;
        $customer->country = $request->country;
        $customer->sales_rep = $request->sales_rep;
        $customer->initials = $request->initials;
        $customer->commission = $request->commission;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->phone = $request->phone;
        $customer->website = $request->website;
        $customer->terms = $request->terms;
        $customer->margin = $request->margin;
        $customer->limitation = $limitation;
        $customer->notes = $request->notes;

        $customer->save();
        return redirect('admin/customers');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('admin/customers');
    }

}
