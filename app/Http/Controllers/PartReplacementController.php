<?php

namespace App\Http\Controllers;

use App\Models\PartReplacement;
use Illuminate\Http\Request;

class PartReplacementController extends Controller
{
    public function store(Request $request)
    {

        $attributes = request()->validate([
            'part_code' => 'required',
            'part_description' => 'required',
            'part_srno' => 'required',
            'part_batchcode' => 'required',
            'part_quantity' => 'required',

        ]);

        PartReplacement::create($attributes);

        return back()->with('success', 'Installation details saved successfully');
    }
}
