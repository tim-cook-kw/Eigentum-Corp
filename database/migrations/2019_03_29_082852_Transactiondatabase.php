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
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('Userdatabase');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
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
