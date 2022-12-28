<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class LiveServiceProvider extends Component
{

    public $service_number;
    public $order_time;
    public $contract_type = 'others';
    public $service_provider;
    public $call_type = 'others-call';


    protected $rules = [
        'service_number' => 'required|min:3',
        'order_time' => 'required|date',
        'service_provider' => 'required|min:3',
        'contract_type' => 'required',
        'call_type' => 'required'
    ];


    public function updated($propname)
    {
        $this->validateOnly($propname);
    }


    public function serviceProviderForm()
    {
        $validatedData = $this->validate();

        if (auth()->check()) {
            ServiceProvider::create($validatedData);

            session()->flash('success_message', 'ServiceProvider was added successfully');

            $this->reset();
        }

        // abort(Response::HTTP_FORBIDDEN);
    }

    public function render()
    {
        return view('livewire.live-service-provider');
    }
}






// if (auth()->check()) {
//     ServiceProvider::create([
//         'service_number' => $this->service_number,
//         'order_time' => $this->order_time,
//         'service_provider' => $this->service_provider,
//         'contract_type' => $this->contract_type,
//         'call_type' => $this->call_type
//     ]);

//     session()->flash('success_message', 'ServiceProvider was added successfully');

//     $this->reset();
// }
