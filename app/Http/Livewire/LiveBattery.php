<?php

namespace App\Http\Livewire;

use App\Models\Battery;
use Livewire\Component;

class LiveBattery extends Component
{

    public $company_name;



    protected $rules = [
        'company_name' => 'required',

    ];

    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function customerForm()
    {
        $validatedData = $this->validate();
        Battery::create($validatedData);
        session()->flash('success_message', 'Battert details were added successfully');

        $this->reset();
    }




    public function render()
    {
        return view('livewire.live-battery');
    }
}
