<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    public function index()
    {
        $expenses = Expense::latest()->get();
        // return view('reports.index', compact('expenses'));
    }



    public function store(Request $request)
    {
        // dd($request->file('exp_file'));
        // $path = $request->file('exp_file')->store('expenses');
        // return 'done: ' . $path;
        $attributes = request()->validate([
            'adhoc_expense' => 'required|sometimes',
            'exp_desc' => 'required|sometimes',
            'exp_amount' => 'required|sometimes',
            'claim_amount' => 'required|sometimes',

        ]);

        Expense::create($attributes);

        return back()->with('success_message', 'Expenses details saved successfully');
    }
}
