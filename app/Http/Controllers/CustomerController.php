<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {

        $attribuets = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|email|unique:customers,email_address',
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
