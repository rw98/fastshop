<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->float('quantity_blocked')->unsigned();
            $table->float('quantity')->unsigned();
            $table->float('quantity_announced')->unsigned();
            $table->float('quantity_reserved')->unsigned();
            $table->date('expires_at')->nullable();
            $table->string('batch_number', 20)->nullable();
            $table->dateTime('planned_arrival')->nullable();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
