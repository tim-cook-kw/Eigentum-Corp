<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salesreportdatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_report', function (Blueprint $table) {
            $table->bigIncrements('id_sales_report');
<<<<<<< HEAD
            $table->unsignedBigInteger('id_transaction')->nullable();
=======
            $table->integer('id_transaction')->unsigned();
>>>>>>> a0c132b815a3e13198c6a15edc224ef0c641769d
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_report');
    }
}
