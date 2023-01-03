<?php

namespace App\Http\Livewire;

use App\Models\CustomerFeedback;
use Livewire\Component;

class LiveCustomerFeedback extends Component
{

    public $product_perf;
    public $service_quality;
    public $call_logging;
    public $engineer_quality;

    public $problem_desc;
    public $action_taken;
    public $general_feedback;
    public $overall_satisfaction;


    protected $rules = [
        'product_perf' => 'required',
        'service_quality' => 'required',
        'call_logging' => 'required',
        'engineer_quality' => 'required',

        'problem_desc' => 'required',
        'action_taken' => 'required',
        'general_feedback' => 'required',
        'overall_satisfaction' => 'required'
    ];



    public function updated($propname)
    {
        $this->validateOnly($propname);
    }

    public function customerFeedbackForm()
    {
        $validatedData = $this->validate();

        CustomerFeedback::create($validatedData);

        session()->flash('success_message', 'Customer Feedback saved succesfullly');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.live-customer-feedback');
    }
}
