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
            'exp_file' => 'sometimes|required|mimes:pdf,jpg,png,jepg,bmp'
        ]);
        $file = request()->file('exp_file');
        $filename = rand(1, 9999) . date('Y-m-d') . $file->getClientOriginalName();
        $attributes['exp_file'] = request()->file('exp_file')->storeAs('expenses', $filename, 's3');
        Expense::create($attributes);

        return back()->with('success', 'Expenses details saved successfully');
    }
}
