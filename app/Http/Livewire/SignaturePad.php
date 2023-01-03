<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SignaturePad extends Component
{
    public $signature;

    public function submit()
    {
        $fileName = uniqid() . '.png';
        Storage::disk('s3')
            ->put("signatures/users/{$fileName}", base64_decode(Str::of($this->signature)->after(',')));
    }

    public function render()
    {
        return view('livewire.signature-pad');
    }
}
