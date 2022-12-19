<?php

namespace App\Http\Controllers;

use App\Models\Installation;
use Illuminate\Http\Request;

class InstallationController extends Controller
{

    public function index()
    {
        $installations = Installation::latest()->get();
        // return view('reports.index', compact('installations'));
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'volt_install' => 'required',
            'make_install' => 'required',
            'quantity_install' => 'required',
            'strings_install' => 'required',
            'batch_code' => 'required'


        ]);

        Installation::create($attributes);

        return back()->with('success', 'Installation details saved successfully');
    }
}
