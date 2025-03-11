<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id', 'component_type', 'component_id', 'quantity', 'price_at_purchase',
    ];

    protected $casts = [
        'component_type' => 'string', // Or use an Enum
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
