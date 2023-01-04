<?php

namespace App\Http\Controllers;

use App\Models\ExpenseUpload;
use Illuminate\Http\Request;

class ExpenseUploadController extends Controller
{
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'exp_file' => 'sometimes|required|mimes:pdf,jpg,png,jepg,bmp'
        ]);

        $file = request()->file('exp_file');
        $filename = uniqid() . $file->getClientOriginalName();
        // dd($filename);
        $attributes['exp_file'] = request()->file('exp_file')->storeAs('expenses/users', $filename, 's3');

        ExpenseUpload::create($attributes);
        return back()->with('success', 'Expense files uploaded successfully');
    }
}
