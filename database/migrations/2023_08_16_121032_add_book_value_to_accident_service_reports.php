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
        Schema::table('accident_service_reports', function (Blueprint $table) {
            $table->string('tradone')->nullable();
            $table->string('market_one')->nullable();
            $table->string('tradetwo')->nullable();
            $table->string('market_two')->nullable();
            $table->string('retail_value')->nullable();
            $table->string('market_three')->nullable();
            $table->string('avg_kms')->nullable();
            $table->string('market_avg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accident_service_reports', function (Blueprint $table) {
            $table->dropColumn([
                'tradone',
                'market_one',
                'tradetwo',
                'market_two',
                'retail_value',
                'market_three',
                'avg_kms',
                'market_avg',
            ]);
        });
    }
};
