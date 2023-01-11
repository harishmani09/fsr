<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerFeedback extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
