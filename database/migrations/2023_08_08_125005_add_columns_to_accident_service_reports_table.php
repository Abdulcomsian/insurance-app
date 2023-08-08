<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up()
    {
        Schema::table('accident_service_reports', function (Blueprint $table) {
            $table->string('claim_no')->nullable();
            $table->string('policy_no')->nullable();
            $table->longText('banking_details')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('accident_service_reports', function (Blueprint $table)
        {
            $table->dropColumn(['claim_no', 'policy_no', 'banking_details']);
        });
    }

};
