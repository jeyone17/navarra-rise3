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
        Schema::create('delivery', function (Blueprint $table) {
            $table->id('delivery_id');
            $table->date('d_date');
            $table->foreignId('driver_id');
            $table->foreignId('vehicle_id');
            $table->foreignId('order_id');
            $table->foreignId('delivery_status_id');
            $table->string('delivery_address', length:45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery');
    }
};
