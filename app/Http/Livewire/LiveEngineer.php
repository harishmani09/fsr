<?php

namespace App\Http\Livewire;

use App\Models\Engineer;
use Livewire\Component;

class LiveEngineer extends Component
{

    public $engineer_name;
    public $engineer_signature;
    public $signoff_date;

    protected $rules = [
        'engineer_name' => 'required',
        'engineer_signature' => 'required',
        'signoff_date' => 'required'

    ];

    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function engineerForm()
    {
        $validatedData = $this->validate();
        Engineer::create($validatedData);

        session()->flash('success_message', 'Details related to engineer saved successfullly');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.live-engineer');
    }
}
