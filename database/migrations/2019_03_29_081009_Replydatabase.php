<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Replydatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->bigIncrements('id_reply');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('Userdatabase');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
            $table->integer('id_comment')->unsigned();
            $table->foreign('id_comment')->references('id_comment')->on('Commentdatabase');
            $table->text('reply_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply');
    }
}
