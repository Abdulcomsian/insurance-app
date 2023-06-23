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
        Schema::create('detail_assessment_reports', function (Blueprint $table) {
            $table->id();
            $table->string('quoted')->nullable();
            $table->string('assessed')->nullable();
            $table->string('variance')->nullable();
            $table->string('book_values')->nullable();
            $table->string('live_market_values')->nullable();
            $table->string('trade_low')->nullable();
            $table->string('market_one')->nullable();
            $table->string('trade')->nullable();
            $table->string('market_twp')->nullable();
            $table->string('retail')->nullable();
            $table->string('market_three')->nullable();
            $table->string('value_avg_kms')->nullable();
            $table->string('market_avg')->nullable();
            $table->foreignId('assessment_report_product_id')->constrained();
            $table->foreignId('accident_service_report_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_assessment_reports');
    }
};
