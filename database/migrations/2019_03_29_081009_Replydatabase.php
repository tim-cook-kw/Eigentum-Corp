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
<<<<<<< HEAD
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_product')->nullable();
            $table->unsignedBigInteger('id_comment')->nullable();
=======
            $table->integer('id_user')->unsigned();
            $table->integer('id_product')->unsigned();
            $table->integer('id_comment')->unsigned();
>>>>>>> a0c132b815a3e13198c6a15edc224ef0c641769d
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
