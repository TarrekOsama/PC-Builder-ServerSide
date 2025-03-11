<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    protected $fillable = [
        'user_id', 'name', 'total_cost', 'total_power_consumption',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function components()
    {
        return $this->hasMany(BuildComponent::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
