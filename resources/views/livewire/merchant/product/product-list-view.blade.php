<div class="flex content-center px-1.5">
    <div class="flex-1 px-1.5">
        <ul role="list" class="space-y-2">
            @foreach(\App\Models\Product::all() as $product)
                @include('components.product-card',["product" => $product])
            @endforeach
        </ul>
    </div>
</div>
