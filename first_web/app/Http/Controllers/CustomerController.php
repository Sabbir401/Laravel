<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {   
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('form')->with($data);

    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->states = $request['states'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view()
    {
        $customers = Customer::all();
        $data =compact('customers');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        // Customer::find($id)->delete();
        $customer = Customer::find($id);
        if (!is_null($customer)){
            $customer->delete();
        }

        return redirect('/customer/view');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)){
            return redirect('/customer/view');
        }else{
            $title = "Update Customer";
            $url = url('/customer/update')."/".$id;
            $data = compact('customer','url','title');
            return view('form')->with($data);
        }

    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->states = $request['states'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];

        $customer->save();

        return redirect('/customer/view');
    }
}
