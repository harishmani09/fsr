<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'elec_phase' => 'string'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
