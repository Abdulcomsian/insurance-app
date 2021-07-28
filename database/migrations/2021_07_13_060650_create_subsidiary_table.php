<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsidiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidiary', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('created_by', 50);
            $table->dateTime('created_date', 6)->nullable();
            $table->string('last_modified_by', 50)->nullable();
            $table->dateTime('last_modified_date', 6)->nullable();
            $table->string('designation')->nullable();
            $table->longText('image_url')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('company_accounting_id')->nullable();
            $table->foreign('company_accounting_id', 'FKq4ebnpur9k2ad1jvjr0yru96j')->references('id')->on('company_accounting');
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
        Schema::dropIfExists('subsidiary');
    }
}
