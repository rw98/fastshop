<?php

namespace App\Models;

use App\Structure\Address\Enum\AddressScope;
use Illuminate\Database\Eloquent\Model;
use Remote\Xinvoice\Models\Enums\Countries\CountryAlpha2;

class Address extends Model
{
    protected $fillable =[
        'address_line_1',
        'address_line2',
        'country_code',
        'email',
        'zip',
        'city',
        'first_name',
        'last_name',
        'company',
        'scope',
    ];

    protected  $casts =[
      'scope' => AddressScope::class,
      'country_code' => CountryAlpha2::class,
    ];
}
