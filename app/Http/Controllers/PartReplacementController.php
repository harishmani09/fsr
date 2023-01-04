<?php

namespace App\Http\Controllers;

use App\Models\PartReplacement;
use Illuminate\Http\Request;

class PartReplacementController extends Controller
{

    public function index()
    {
        $partreplaces = PartReplacement::latest()->get();
        // return view('reports.index', compact('partreplaces'));
    }




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

        return back()->with('success_message', 'Installation details saved successfully');
    }
}
