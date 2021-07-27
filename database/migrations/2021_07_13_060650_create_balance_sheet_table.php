<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalanceSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_sheet', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('created_by', 50);
            $table->dateTime('created_date', 6)->nullable();
            $table->string('last_modified_by', 50)->nullable();
            $table->dateTime('last_modified_date', 6)->nullable();
            $table->string('name')->nullable();
            $table->decimal('value', 19, 2)->nullable();
            $table->integer('year')->nullable();
            $table->bigInteger('company_accounting_id')->nullable();
            $table->foreign('company_accounting_id', 'FKde9wjwvdbuj8pq96thpxyebn3')->references('id')->on('company_accounting');
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
        Schema::dropIfExists('balance_sheet');
    }
}
