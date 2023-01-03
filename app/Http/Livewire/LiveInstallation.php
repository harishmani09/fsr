<?php

namespace App\Http\Livewire;

use App\Models\Installation;
use Livewire\Component;

class LiveInstallation extends Component
{

    public $volt_install;
    public $make_install;
    public $quantity_install;
    public $strings_install;
    public $batch_code;

    protected $rules = [
        'volt_install' => 'required',
        'make_install' => 'required',
        'quantity_install' => 'required',
        'strings_install' => 'required',
        'batch_code' => 'required'

    ];


    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function installationForm()
    {
        $validatedData = $this->validate();

        Installation::create($validatedData);

        session()->flash('success_message', 'Installation details saved successfully');
        $this->reset();
    }




    public function render()
    {
        return view('livewire.live-installation');
    }
}
