<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'build_id', 'total_cost', 'status', 'payment_method',
        'payment_status', 'tracking_number',
    ];

    protected $casts = [
        'status' => 'string', // Or use an Enum
        'payment_status' => 'string', // Or use an Enum
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function build()
    {
        return $this->belongsTo(Build::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
