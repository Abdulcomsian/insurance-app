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
        Schema::create('accident_service_reports', function (Blueprint $table) {
            $table->id();
            // Step 1
            $table->integer('invoice_no')->nullable();
            $table->timestamps('invoice_date');
            $table->string('to')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('rego')->nullable();
            $table->integer('assessment_fee')->nullable();
            $table->integer('sub_total')->nullable();
            $table->integer('gst')->nullable();
            $table->integer('grand_total')->nullable();

            // Step 2
            $table->string('owner_name')->nullable();
            $table->string('assessment_type')->nullable();
            $table->string('make')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('odometer')->nullable();
            $table->string('modal')->nullable();
            $table->string('engine_size')->nullable();
            $table->string('paint_group')->nullable();
            $table->string('series')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('paint_code')->nullable();
            $table->string('month_year')->nullable();
            $table->string('transmission')->nullable();
            $table->string('color')->nullable();
            $table->string('body_type')->nullable();
            $table->string('axles')->nullable();
            $table->string('vin')->nullable();

            //step 3 yes loss
            $table->timestamps('assessement_date');
            $table->string('cover_type')->nullable();
            $table->string('sum_insured')->nullable();
            $table->string('market_value')->nullable();
            $table->string('salvage_value')->nullable();
            $table->string('settlement')->nullable();
            $table->string('less_access')->nullable();
            $table->string('settlement_sub_total')->nullable();
            $table->string('settlement_gst')->nullable();
            $table->string('cash_settled')->nullable();
            $table->string('certified_compliance')->nullable();
            $table->string('salvage_condition')->nullable();
            $table->longText('comments')->nullable();

            //Step 4
            $table->string('file')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accident_service_reports');
    }
};
