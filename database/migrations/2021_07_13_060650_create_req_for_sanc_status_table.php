<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqForSancStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_for_sanc_status', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->longText('comment')->nullable();
            $table->bigInteger('company_id');
            $table->string('email_id');
            $table->string('mobile_number');
            $table->string('reason')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('name');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req_for_sanc_status');
    }
}
