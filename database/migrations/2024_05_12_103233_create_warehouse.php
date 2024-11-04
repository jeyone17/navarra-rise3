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
        Schema::create('warehouse', function (Blueprint $table) {
            $table->id('warehouse_id');
            $table->string('warehouse_location', length: 45);
            $table->string('warehouse_longitude', length: 45);
            $table->string('warehouse_latitude', length: 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse');
    }
};
