<?php

namespace App\Services\Inventory;

use App\Models\Company;
use Illuminate\Support\Str;

class SkuGenerator
{
    public static function generate(Company $company, string $productName, ?int $ignore = null, ?string $prefix = null): string
    {
        $start = collect(explode(' ', $productName))
            ->take(3)
            ->map(fn(string $entry) => Str::upper(Str::substr($entry,
                                                              0,
                                                              2)))
            ->join('');
        $sku = "$prefix$start";
        $query = $company->product()->whereSku($sku)->when($ignore, function ($query) use ($ignore) {
            $query->whereNot('id', $ignore);
        });
        if ($count = $query->count()) {
            $sku .= $count + 1;
        }
        return $sku;
    }
}
