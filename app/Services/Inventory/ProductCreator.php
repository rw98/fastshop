<?php

namespace App\Services\Inventory;

use App\Models\Company;
use App\Models\Product;
use App\Structure\Taxation\CountryVat;
use Illuminate\Validation\ValidationException;
use Remote\Xinvoice\Models\Enums\UnitOfMeasure;
use Validator;

class ProductCreator
{
    public static function rules()
    {
        return [
            'name' => [
                'required',
                'min:3',
                'max:255',
                'string'
            ],
            'description' => 'nullable|string|max:4294967295',
            'length' => 'nullable|numeric|gte:0.001|lte:1000',
            'width' => 'nullable|numeric|gte:0.001|lte:1000',
            'height' => 'nullable|numeric|gte:0.001|lte:1000',
            'weight' => 'nullable|numeric|gte:0.001|lte:1000',
            'vat_percent' => 'nullable|numeric|gte:0.000|lte:1000',
            'net_price' => 'required|numeric|gte:0.000|lte:1000',
            'unit' => 'nullable|string|in:' . collect(UnitOfMeasure::cases())->pluck('value')->implode(','),
            'is_active' => 'nullable|boolean',
            'stock' => 'nullable|numeric|gte:0.001|lte:1000',
            'sku' => 'nullable|string|max:255',
            'ean' => 'nullable|string|min:9|max:13',
        ];
    }

    public function __construct(private Company $company)
    {
    }

    public static function instance(Company $company): static
    {
        return new static($company);
    }

    public function create(array $data): Product
    {
        $vatPercent = CountryVat::fromCountry($this->company->address->country_code);
        $this->validate($vatPercent, $data);
        $p = new Product($data);
        $this->setProductDefaults($p, $vatPercent);
        $p->company()->associate($this->company);
        $p->save();
        return $p;
    }

    public function update(array $data, Product $product): Product
    {
        if ($product->company_id !== $this->company->id) {
            abort(403);
        }
        $vatPercent = CountryVat::fromCountry($this->company->address->country_code);
        $this->validate($vatPercent, $data);
        $product->fill($data);
        $this->setProductDefaults($product, $vatPercent);
        $product->save();
        return $product;
    }

    /**
     * @param  Product $p
     * @param  CountryVat $vatPercent
     * @return Product
     */
    private function setProductDefaults(Product $p, CountryVat $vatPercent): Product
    {
        if (is_null($p->vat_percent)) {
            $p->vat_percent = $vatPercent->default()->percent;
        }
        if (!$p->unit) {
            $p->unit = UnitOfMeasure::PIECE->value;
        }
        if (!$p->sku) {
            $p->sku = SkuGenerator::generate($this->company,$p->name);
        }
        return $p;
    }
    /**
     * @param  CountryVat $vatPercent
     * @param  array $data
     * @return void
     */
    private function validate(CountryVat $vatPercent, array $data): void
    {
        $vatValues = collect($vatPercent->vat_sets())->pluck('percent')->values();
        $rules = self::rules();
        $rules["vat_percent"] = $rules["vat_percent"] . "|in:" . $vatValues->implode(',');
        $validate = Validator::make($data, $rules);
        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
    }
}
