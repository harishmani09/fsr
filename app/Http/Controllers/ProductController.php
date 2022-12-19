<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        // $products = Product::all();
        // dd($products);
        // return view('reports.index', compact('products'));
    }



    public function store(Request $request)
    {

        $attributes = request()->validate([
            'product_model' => 'required|max:255',
            'product_rating' => 'required',
            'product_serial' => 'required',
            'product_part' => 'required',
            'ip_address' => 'required',
            'ctd_number' => 'required',
            'fsb_number'  => 'required',
            'product_series' => 'required',
            'call_type' => 'required'
        ]);

        Product::create($attributes);

        return back()->with('success', 'product details saved successfully');
    }
}
