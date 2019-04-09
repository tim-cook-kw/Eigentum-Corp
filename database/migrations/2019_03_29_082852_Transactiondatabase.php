<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transactiondatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id_transaction');
<<<<<<< HEAD
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_product')->nullable();
=======
            $table->integer('id_user')->unsigned();
            $table->integer('id_product')->unsigned();
>>>>>>> a0c132b815a3e13198c6a15edc224ef0c641769d
            $table->integer('total_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
