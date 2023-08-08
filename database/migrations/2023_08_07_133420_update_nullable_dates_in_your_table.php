<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNullableDatesInYourTable extends Migration
{
    public function up()
    {
        Schema::table('accident_service_reports', function (Blueprint $table) {
            // Make the assessment_date column nullable
            $table->date('assessment_date')->nullable();

            // Make the invoice_date column nullable
            $table->date('invoice_date')->nullable();
        });
    }

    public function down()
    {
        Schema::table('accident_service_reports', function (Blueprint $table)
        {
            // Revert the changes if needed
            $table->date('assessment_date');
            $table->date('invoice_date');
        });
    }
}

