<?php

namespace App\Http\Livewire;

use App\Models\Battery;
use Livewire\Component;

class LiveBattery extends Component
{

    public $l_input;
    public $n_input;
    public $e_input;
    public $l_output;
    public $e_output;
    public $c_current;
    public $d_current;
    public $input_l_n;
    public $input_e_n;
    public $output_l_n;
    public $output_e_n;
    public $charge_voltage;
    public $discharge_5;
    public $i_freq;
    public $o_freq;
    public $error_code;
    public $load_percent;
    public $fault;
    public $battery_make;
    public $battery_model;
    public $battery_ah;
    public $battery_bank_no;
    public $ambient_temp;
    public $battery_pos;
    public $battery_batch_code;
    public $battery_serial;
    public $battery_charge_volt;
    public $battery_volt;
    public $voltage_after2;
    public $voltage_after5;
    public $voltage_after10;
    public $voltage_after20;
    public $battery_cutoff;
    public $battery_status;
    public $total_voltage;
    public $current;
    public $connected_load;


    protected $rules = [
        'l_input' => 'required',
        'n_input' => 'required',
        'e_input' => 'required',
        'l_output' => 'required',
        'e_output' => 'required',
        'c_current' => 'required',
        'd_current' => 'required',
        'input_l_n' => 'required',
        'input_e_n' => 'required',
        'output_l_n' => 'required',
        'output_e_n' => 'required',
        'charge_voltage' => 'required',
        'discharge_5' => 'required',
        'i_freq' => 'required',
        'o_freq' => 'required',
        'error_code' => 'required',
        'load_percent' => 'required',
        'fault' => 'required',
        'battery_make' => 'required',
        'battery_model' => 'required',
        'battery_ah' => 'required',
        'battery_bank_no' => 'required',
        'ambient_temp' => 'required',
        'battery_pos' => 'required',
        'battery_batch_code' => 'required',
        'battery_serial' => 'required',
        'battery_volt' => 'required',
        'voltage_after2' => 'required',
        'voltage_after5' => 'required',
        'voltage_after10' => 'required',
        'voltage_after20' => 'required',
        'battery_cutoff' => 'required',
        'battery_status' => 'required',
        'total_voltage' => 'required',
        'current' => 'required',
        'connected_load' => 'required',
    ];

    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function batteryForm()
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
