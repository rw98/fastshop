<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{

    protected $fillable = [
        'quantity_blocked',
        'quantity',
        'quantity_announced',
        'quantity_reserved',
        'expires_at',
        'batch_number',
        'planned_arrival',
        'product_id',
    ];

    protected function casts(): array
    {
        return [
            'planned_arrival' => 'datetime',
            'expires_at' => 'date',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeExpired($query, Carbon|string $date)
    {
        return $query->where('expires_at', '<=', $date);
    }


}
