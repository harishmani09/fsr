<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function store(Request $request)
    {

        $attribuets = request()->validate(
            [
                'call_number' => 'required',
                'job_start' => 'required',
                'job_starttime' => 'required',
                'job_end' => 'required',
                'job_endtime' => 'required',
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
