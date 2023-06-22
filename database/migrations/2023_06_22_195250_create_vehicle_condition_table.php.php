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
        Schema::create('vehicle_condition', function (Blueprint $table) {
            $table->id();
            $table->string('overall')->nullable();
            $table->string('interior')->nullable();
            $table->string('exterior')->nullable();
            $table->string('steering')->nullable();
            $table->string('brakes')->nullable();
            $table->string('tyre_depth_unit_front')->nullable();
            $table->string('tyre_depth_unit_rear')->nullable();
            $table->foreignId('accident_service_report_id')->constrained();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_condition');
    }
};
