<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{

    public function index()
    {
        $calls = Call::latest()->get();
        // return view('reports.index', compact('calls'));
    }



    public function store(Request $request)
    {

        $attribuets = request()->validate(
            [
                'call_number' => 'required',
                'job_start' => 'required',
                'job_end' => 'required',
                'travel_time' => 'required',
                'call_status' => 'required',
                'engineer_name' => 'required',
                'complaint_details' => 'required'
            ]
        );

        Call::create($attribuets);

        return back()->with('success', 'customer details saved');
    }
}
