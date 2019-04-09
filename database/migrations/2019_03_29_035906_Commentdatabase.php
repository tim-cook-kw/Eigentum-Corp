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
<<<<<<< HEAD
            $table->unsignedBigInteger('id_product')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_reply')->nullable();
=======
            $table->integer('id_product')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('id_reply')->unsigned();
>>>>>>> a0c132b815a3e13198c6a15edc224ef0c641769d
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
