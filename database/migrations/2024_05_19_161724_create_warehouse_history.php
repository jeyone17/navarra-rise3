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
        Schema::create('warehouse_history', function (Blueprint $table) {
            $table->id('wh_history_id');
            $table->foreignId('warehouse_stocks_id');
            $table->integer('previous_value');
            $table->integer('outbound_quantity');
            $table->foreign('warehouse_stocks_id')->references('warehouse_stocks_id')->on('warehouse_stocks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse_history');
    }
};
