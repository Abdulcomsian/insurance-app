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
        Schema::create('demage_section_values', function (Blueprint $table) {
            $table->id();
            $table->string('demage_level')->nullable();
            $table->string('comment')->nullable();
            $table->foreignId('demage_section_id')->constrained();
            $table->foreignId('accident_service_report_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demage_section_values');
    }
};
