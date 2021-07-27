<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanctionStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanction_status', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('status')->nullable();
            $table->bigInteger('company_id')->nullable();
            $table->foreign('company_id', 'FKlpcqdfmbdssc5h1am4srpqulk')->references('id')->on('company_detail');
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
        Schema::dropIfExists('sanction_status');
    }
}
