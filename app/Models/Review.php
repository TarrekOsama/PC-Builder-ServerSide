<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id', 'component_type', 'component_id', 'rating', 'comment',
    ];

    protected $casts = [
        'component_type' => 'string', // Or use an Enum
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
