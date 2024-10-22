<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use App\Services\Inventory\SkuGenerator;
use App\Structure\Taxation\CountryVat;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Remote\Xinvoice\Models\Enums\UnitOfMeasure;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $company = Company::first();
        $vat = CountryVat::fromCountry('DE');
        $faker = Factory::create('de');
        for ($i = 1; $i <= 20; $i++) {
            $name = $faker->name();
            Product::create([
                                "name" => $name,
                                'description' => $faker->text(),
                                'vat_percent' => $faker->randomElement($vat->vat_sets())->percent,
                                'company_id' => $company->id,
                                'unit' => $faker->randomElement(UnitOfMeasure::cases())->value,
                                'sku' => SkuGenerator::generate($company, $name),
                                'weight' => $faker->optional()->randomFloat(2, 0.001, 100),
                                'height' => $faker->optional()->randomFloat(2, 0.001, 100),
                                'width' => $faker->optional()->randomFloat(2, 0.001, 100),
                                'length' => $faker->optional()->randomFloat(2, 0.001, 100),
                                'is_active' => false,
                                'ean' => null
                            ]);
        }
    }
}
