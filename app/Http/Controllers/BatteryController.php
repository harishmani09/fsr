<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use Illuminate\Http\Request;

class BatteryController extends Controller
{
    public function store(Request $request)
    {

        $attribuets = request()->validate(
            []
        );

        Battery::create($attribuets);

        return back()->with('success', 'battery details saved');
    }
}
