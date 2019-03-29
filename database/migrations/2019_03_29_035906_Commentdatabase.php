<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Commentdatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->bigIncrements('id_comment');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('Userdatabase');
            $table->integer('id_reply')->unsigned();
            $table->foreign('id_reply')->references('id_reply')->on('Replydatabase');
            $table->text('comment_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
