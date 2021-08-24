<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSancAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanc_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('file',250)->nullable();
            $table->bigInteger('sanc_req_id')->unsigned();
            $table->foreign('sanc_req_id')->references('id')->on('req_for_sanc_status');

            $table->softDeletes();
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
        Schema::dropIfExists('sanc_attachments');
    }
}
