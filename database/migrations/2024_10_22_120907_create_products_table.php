<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Remote\Xinvoice\Models\Enums\UnitOfMeasure;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('sku');
            $table->string('ean')->nullable();
            $table->float('weight')->unsigned()->nullable();
            $table->float('height')->unsigned()->nullable();
            $table->float('length')->unsigned()->nullable();
            $table->float('width')->unsigned()->nullable();
            $table->float('vat_percent')->unsigned();
            $table->string('unit', 3)->default(UnitOfMeasure::PIECE->value);
            $table->float('net_price')->unsigned()->nullable();
            $table->string('uuid');
            $table->foreignId('company_id');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
