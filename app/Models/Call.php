<?php

namespace App\Models;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Call extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
