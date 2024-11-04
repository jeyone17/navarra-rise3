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
        Schema::create('store_stocks', function (Blueprint $table) {
            $table->id('store_stocks_id');
            $table->foreignId('product_id');
            $table->date('arrival_date');
            $table->integer('quantity');
            $table->foreignId('store_id');
            $table->foreignId('invtype_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_stocks');
    }
};
