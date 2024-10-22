<?php

namespace App\Livewire\Merchant\Product;

use App\Livewire\Forms\Merchen\Product\EditProductForm;
use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{
    public EditProductForm $productForm;

    public function render()
    {
        return view('livewire.merchant.product.edit-product');
    }

    public function mount(?string $uuid)
    {
        $company = auth()->user()->company;
        if ($uuid) {
            $product = $company->products->where('uuid', $uuid)->firstOrFail();
        } else {
            $product = new Product(['uuid' => $company->id]);
        }
        $this->productForm->mount($product);
    }
}
