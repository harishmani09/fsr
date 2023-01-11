<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceProvider extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
