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
        Schema::create('supps_values', function (Blueprint $table) {
            $table->id();
            $table->string('quoted')->nullable();
            $table->string('assessed')->nullable();
            $table->string('variance')->nullable();
            $table->string('total')->nullable();
            $table->foreignId('supp_id')->constrained();
            $table->foreignId('accident_service_report_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supps_values');
    }
};
