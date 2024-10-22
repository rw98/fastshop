<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_line_1');
            $table->string('address_line2')->nullable();
            $table->string('country_code', 3);
            $table->string('email', 100)->nullable();
            $table->string('zip', 20);
            $table->string('city', 100);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('company', 255)->nullable();
            $table->unsignedTinyInteger('scope');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
