<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'vat_id',
        'tax_id',
        'address_id',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
