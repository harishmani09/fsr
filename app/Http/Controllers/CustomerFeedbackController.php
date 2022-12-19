<?php

namespace App\Http\Controllers;

use App\Models\CustomerFeedback;
use Illuminate\Http\Request;

class CustomerFeedbackController extends Controller
{

    public function index()
    {
        $feedbacks = CustomerFeedback::latest()->get();
        // return view('reports.index', ['feedbacks' => $feedbacks]);
    }


    public function store(Request $request)
    {

        $attributes = request()->validate([

            'product_perf' => 'required',
            'service_quality' => 'required',
            'call_logging' => 'required',
            'engineer_quality' => 'required',
            'overall_quality' => 'required',
            'problem_desc' => 'required',
            'action_taken' => 'required',
            'general_feedback' => 'required'
        ]);

        CustomerFeedback::create($attributes);

        return back()->with('success', 'Customer Feeback saved successfully');
    }
}
