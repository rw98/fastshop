<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Remote\Xinvoice\Models\Enums\UnitOfMeasure;
use Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'sku',
        'ean',
        'weight',   //kg
        'height', // m
        'length', // m
        'width', // m
        'vat_percent',
        'uuid',
        'company_id',
        'is_active',
        'net_price',
        'unit',
    ];

    protected $casts = [
        'unit' => UnitOfMeasure::class,
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    protected static function booted()
    {
        self::creating(function ($product) {
            $product->uuid = Str::uuid7(now())->toString();
        });
        self::created(function ($product) {
            Stock::create([
                              "product_id" => $product->id,
                              "planned_arrival" => null,
                              "quantity_announced" => 0,
                              "quantity_reserved" => 0,
                              "quantity_blocked" => 0,
                              "quantity" => 0,
                              "batch_number" => null,
                              "expires_at" => null,
                          ]);
        });
    }
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function getStockAvailableAttribute()
    {
        return $this->stocks()
            ->selectRaw('SUM(quantity-quantity_blocked-quantity_reserved) as stock_available')
            ->first()->stock_available;
    }

    public function getAvailableStockLabelAttribute()
    {
        $available = round($this->stock_available, 3);
        $unit = $this->unit ?? UnitOfMeasure::PIECE;
        return $available . " " . __('units.' . $unit->value);
    }
    public function getAvailableStockLabelAbbrAttribute()
    {
        $available = round($this->stock_available, 3);
        $unit = $this->unit ?? UnitOfMeasure::PIECE;
        return $available . " " . __('units.' . $unit->value);
    }
}
