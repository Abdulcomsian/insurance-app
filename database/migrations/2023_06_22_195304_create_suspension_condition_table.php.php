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
        Schema::create('suspension_condition', function (Blueprint $table) {
            $table->id();
            $table->string('rh_front');
            $table->string('lh_front');
            $table->string('rh_rear');
            $table->string('lh_rear');
            $table->foreignId('accident_service_report_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suspension_condition');
    }
};
