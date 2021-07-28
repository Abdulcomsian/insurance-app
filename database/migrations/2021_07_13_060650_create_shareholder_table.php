<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareholderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shareholder', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('created_by', 50);
            $table->dateTime('created_date', 6)->nullable();
            $table->string('last_modified_by', 50)->nullable();
            $table->dateTime('last_modified_date', 6)->nullable();
            $table->longText('name')->nullable();
            $table->double('share_percentage')->nullable();
            $table->bigInteger('market_share_id')->nullable();
            $table->foreign('market_share_id', 'FKdnopeygqm3bg8g4arm5urcbua')->references('id')->on('market_share');
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
        Schema::dropIfExists('shareholder');
    }
}
