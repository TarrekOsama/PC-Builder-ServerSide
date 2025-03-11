<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuildComponent extends Model
{
    protected $fillable = [
        'build_id', 'component_type', 'component_id', 'quantity',
    ];

    protected $casts = [
        'component_type' => 'string', // Or use an Enum
    ];

    // Relationship (Polymorphic-like logic can be added if needed)
    public function build()
    {
        return $this->belongsTo(Build::class);
    }
}
