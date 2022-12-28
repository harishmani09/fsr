<?php

namespace App\Http\Livewire;

use App\Models\Site;
use Livewire\Component;

class LiveSite extends Component
{

    public $ac_provided = "no";
    public $ac_working = "no";
    public $dg_details = "no";
    public $kva;
    public $dust_level = 'low';
    public $elec_phase = ['L1-N'];
    public $neutral_volt;
    public $load_v;
    public $load_type = "load_others";
    public $ups = "ups_working";

    protected $rules = [
        'ac_provided' => 'required',
        'ac_working' => 'required',
        'dg_details' => 'required',
        'kva' => 'required',
        'dust_level' => 'required',
        'elec_phase' => 'required',
        'neutral_volt' => 'required',
        'load_v' => 'required',
        'load_type' => 'required',
        'ups' => 'required'
    ];

    public function updated($propname)
    {
        $this->validateOnly($propname);
    }


    public function siteForm()
    {
        $validatedData = $this->validate(
            // ['elec_phase' => implode(',', $this->elec_phase)]
        );

        Site::create($validatedData);

        session()->flash('success_message', 'Site details saved successfully');

        $this->reset();
    }


    public function render()
    {
        return view('livewire.live-site');
    }
}
