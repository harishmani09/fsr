<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class LiveProduct extends Component
{

    public $product_model;
    public $product_rating;
    public $product_serial;
    public $product_part;
    public $ip_address;
    public $ctd_number;
    public $fsb_number;
    public $product_series = "series_others";
    public $call_type = "call_others";

    protected $rules = [
        'product_model' => 'required|max:255|min:2',
        'product_rating' => 'required',
        'product_serial' => 'required',
        'product_part' => 'required',
        'ip_address' => 'required|',
        'ctd_number' => 'required',
        'fsb_number'  => 'required',
        'product_series' => 'required',
        'call_type' => 'required'
    ];

    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function productForm()
    {
        $validatedData = $this->validate();

        Product::create($validatedData);

        session()->flash('success_message', 'Product details were added successfully');

        $this->reset();
    }


    public function render()
    {
        return view('livewire.live-product');
    }
}
