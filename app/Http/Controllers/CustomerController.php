<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::latest()->get();
        // return view('projects.index', ['customers' => $customers]);
    }


    public function store(Request $request)
    {

        $attribuets = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|email|unique:customers,email_address',
            'mobile_no' => 'required|regex:/[0-9]{10}/',
            'country' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required',

        ]);

        Customer::create($attribuets);

        return back()->with('success', 'customer details saved');
    }
}
