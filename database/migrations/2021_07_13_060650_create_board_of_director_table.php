<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardOfDirectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_of_director', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('created_by', 50);
            $table->dateTime('created_date', 6)->nullable();
            $table->string('last_modified_by', 50)->nullable();
            $table->dateTime('last_modified_date', 6)->nullable();
            $table->string('designation')->nullable();
            $table->longText('image_url')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('company_id')->nullable();
            $table->foreign('company_id', 'FK4t9gsrw98wbqdy7eghib7t677')->references('id')->on('company_detail');
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
        Schema::dropIfExists('board_of_director');
    }
}
