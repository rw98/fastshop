<?php

namespace App\Livewire\Forms\Merchen\Product;

use App\Models\Product;
use App\Services\Inventory\ProductCreator;
use Livewire\Attributes\Locked;
use Livewire\Form;

class EditProductForm extends Form
{
    public string $name = '';
    public ?string $description = '';
    public ?string $sku = '';
    public ?string $ean = '';
    public ?float $weight = null;
    public ?float $height = null;
    public ?float $length = null;
    public ?float $width = null;
    public ?float $vat_percent = null;
    #[Locked]
    public ?string $uuid = '';
    #[Locked]
    public ?int $company_id = null;
    public bool $is_active = false;
    public ?float $stock = null;

    protected function rules(): array
    {
        return ProductCreator::rules();
    }

    public function mount(Product $product): void
    {
        $this->fill($product->toArray());
        $this->company_id = auth()->user()->company->id;
    }

    public function save(): void
    {
        $this->validate();
        $company = auth()->user()->company;
        $creator = new ProductCreator($company);
        $product = $company->products()->where('uuid', $this->uuid)->first();
        if ($product) {
            $p = $creator->update($this->except('id', 'uuid'), $product);
        } else {
            $p = $creator->create($this->except('id', 'uuid'));
        }
        $this->fill($p->toArray());
    }
}
