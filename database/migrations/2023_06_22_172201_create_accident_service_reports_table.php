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
            //First Step
            $table->integer('invoice_no')->nullable();
            $table->date('invoice_date');
            $table->string('to')->nullable();
            $table->string('tax_invoice')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('rego')->nullable();
            $table->integer('assessment_fee')->nullable();
            $table->integer('sub_total')->nullable();
            $table->integer('gst')->nullable();

            //Second Step
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
            $table->string('colour')->nullable();
            $table->string('body_type')->nullable();
            $table->string('axles')->nullable();
            $table->string('vin')->nullable();

            //Third Step
            $table->date('assessment_date');
            $table->string('cover_type')->nullable();
            $table->string('sum_insured')->nullable();
            $table->string('market_value')->nullable();
            $table->string('salvage_value')->nullable();
            $table->string('settlement')->nullable();
            $table->string('less_excess')->nullable();
            $table->string('settlement_sub_total')->nullable();
            $table->string('settlement_gst')->nullable();
            $table->string('settlement_total')->nullable();
            $table->string('cash_settled')->nullable();
            $table->string('certificate_compliance')->nullable();
            $table->string('salvage_condition')->nullable();
            $table->longText('comments')->nullable();
            $table->string('total_supps')->nullable();
            //Fourth Step
            $table->string('file')->nullable();
            $table->string('overall')->nullable();
            $table->string('interior')->nullable();
            $table->string('exterior')->nullable();
            $table->string('steering')->nullable();
            $table->string('brakes')->nullable();
            $table->string('tyre_depth_unit_front')->nullable();
            $table->string('tyre_depth_unit_rear')->nullable();
            $table->string('rh_front')->nullable();
            $table->string('lh_front')->nullable();
            $table->string('rh_rear')->nullable();
            $table->string('lh_rear')->nullable();

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
