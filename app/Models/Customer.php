<?php

namespace App\Models;

use App\Models\User;
use App\Models\CustomerFeedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(CustomerFeedback::class);
    }
}
