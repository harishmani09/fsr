<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class LiveCustomer extends Component
{

    public $company_name;
    public $contact_name;
    public $email_address;
    public $mobile_no;
    public $country = 'india';
    public $street_address;
    public $city;
    public $region;
    public $postal_code;



    protected $rules = [
        'company_name' => 'required',
        'contact_name' => 'required',
        'email_address' => 'required|email|unique:customers,email_address',
        'mobile_no' => 'required|digits:10',
        'country' => 'required',
        'street_address' => 'required',
        'city' => 'required',
        'region' => 'required',
        'postal_code' => 'required|digits:6',
    ];

    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function customerForm()
    {
        $validatedData = $this->validate();
        Customer::create($validatedData);
        session()->flash('success_message', 'Customer details were added successfully');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.live-customer');
    }
}
