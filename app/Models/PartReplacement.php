<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartReplacement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function replacedParts()
    {
        return $this->belongsTo(Product::class);
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
