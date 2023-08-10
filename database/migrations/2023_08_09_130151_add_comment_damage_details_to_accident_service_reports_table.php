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
        Schema::table('accident_service_reports', function (Blueprint $table)
        {
            $table->text('comment_damange_details')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accident_service_reports', function (Blueprint $table)
        {
            $table->dropColumn(['comment_damange_details']);
        });
    }
};
