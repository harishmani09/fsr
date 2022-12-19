<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $sites = Site::latest()->get();
        // return view('reports.index', compact('sites'));
    }

    public function store(Request $request)
    {
        // dd('site');
        $attributes = request()->validate([
            'ac_provided' => 'required',
            'ac_working' => 'required',
            'dg_details' => 'required',
            'kva' => 'required',
            'dust_level' => 'required',
            'elec_phase' => 'required',
            'neutral_volt' => 'required',
            'load_v' => 'required',
            'load_type' => 'required',
            'ups' => 'required'
        ]);

        Site::create($attributes);


        return back()->with('success', 'site details saved');
    }
}
