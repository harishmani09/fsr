<?php

namespace App\Http\Controllers;

use App\Models\SignOff;
use Illuminate\Http\Request;

class SignOffController extends Controller
{

    public function index()
    {
        $signoffs = SignOff::latest()->get();
        // return view('reports.index', compact('signoffs'));
    }


    public function store(Request $request)
    {

        $attributes = request()->validate([
            'customer_name' => 'required',
            'mobile_no' => 'required|regex:/[0-9]{10}/',
            'customer_designation' => 'required',
            'customer_signature' => 'required',
            'engineer_name' => 'required',
            'engineer_signature' => 'required',
            'signoff_date' => 'required'

        ]);

        SignOff::create($attributes);


        return back()->with('success', 'service provider details saved');
    }
}
