<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\Site;
use App\Models\Product;
use App\Models\SignOff;
use App\Models\Customer;
use App\Models\Engineer;
use App\Models\PartFailed;
use App\Models\Installation;
use Illuminate\Http\Request;
use App\Models\PartReplacement;
use App\Models\ServiceProvider;
use App\Models\CustomerFeedback;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = ServiceProvider::first()->get();
        $products = Product::all();
        $customers = Customer::all();
        $sites = Site::all();
        $installations = Installation::all();
        $feedbacks = CustomerFeedback::all();
        $calls = Call::all();
        $engineers = Engineer::all();
        $partsFailed = PartFailed::all();
        $partsReplacement = PartReplacement::all();
        $signOffs = SignOff::all();

        return view(
            'reports.index',
            compact(['services', 'products', 'customers', 'sites', 'installations', 'feedbacks', 'calls', 'engineers', 'partsFailed', 'partsReplacement', 'signOffs'])
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceProvider $serviceProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProvider $serviceProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProvider $serviceProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProvider $serviceProvider)
    {
        //
    }
}
