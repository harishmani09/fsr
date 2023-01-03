<?php

namespace App\Http\Livewire;

use App\Models\SignOff;
use Livewire\Component;

class LiveSignOff extends Component
{

    public $customer_name;
    public $mobile_no;
    public $customer_designation;
    public $customer_signature;
    public $engineer_name;
    public $engineer_signature;
    public $signoff_date;

    protected $rules = [
        'customer_name' => 'required|min:3',
        'mobile_no' => 'required|digits:10',
        'customer_designation' => 'required',
        'customer_signature' => 'nullable',
        'engineer_name' => 'required',
        'engineer_signature' => 'nullable',
        'signoff_date' => 'required'
    ];



    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function callSignOffForm()
    {
        $validatedData = $this->validate();
        SignOff::create($validatedData);
        session()->flash('success_message', 'Call Signoff details saved successfully');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.live-sign-off');
    }
}
