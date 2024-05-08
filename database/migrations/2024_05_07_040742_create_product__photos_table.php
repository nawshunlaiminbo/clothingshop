<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product__photos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('primaryphoto');
            $table->foreignId('product_id')->constrained();
            $table->string('image');
            $table->string('uuid');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product__photos');
    }
};
