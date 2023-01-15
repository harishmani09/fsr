<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class LiveProduct extends Component
{

    public $product_name;
    public $product_category;
    public $product_model;
    public $product_capacity;
    public $ip_address;
    public $product_status;
    public $fsb_number;
    public $product_series = "series_others";
    public $call_type = "call_others";

    protected $rules = [
        'product_name' => 'required|max:255|min:2',
        'product_category' => 'required',
        'product_model' => 'required',
        'product_capacity' => 'required',
        'ip_address' => 'required|',
        'product_status' => 'required',
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
