<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;

use Illuminate\Http\Request;


class ServiceProviderController extends Controller
{

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'service_number' => 'required|max:255',
            'order_time' => 'required|date',
            'service_provider' => 'required|string|min:3',
            'contract_type' => 'required|max:255',
            'call_type' => 'required|max:255'
        ]);

        ServiceProvider::create($attributes);


        return back()->with('success', 'service provider details saved');
    }
}
