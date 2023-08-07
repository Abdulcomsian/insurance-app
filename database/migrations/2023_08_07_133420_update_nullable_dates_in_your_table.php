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
            $table->date('assessment_date')->nullable()->change();

            // Make the invoice_date column nullable
            $table->date('invoice_date')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('accident_service_reports', function (Blueprint $table)
        {
            // Revert the changes if needed
            $table->date('assessment_date')->change();
            $table->date('invoice_date')->change();
        });
    }
}

