<?php

namespace App\Http\Controllers;

use App\Models\PartFailed;
use Illuminate\Http\Request;

class PartFailedController extends Controller
{
    public function store(Request $request)
    {

        $attributes = request()->validate([
            'failed_part_code' => 'required',
            'failed_part_desc' => 'required',
            'failed_part_srno' => 'required',
            'failed_part_batch' => 'required',
            'failed_part_qty' => 'required'
        ]);

        PartFailed::create($attributes);

        return back()->with('success', 'Installation details saved successfully');
    }
}
