<?php

namespace App\Models;

use App\Models\Call;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Engineer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function calls()
    {
        return $this->hasMany(Call::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
