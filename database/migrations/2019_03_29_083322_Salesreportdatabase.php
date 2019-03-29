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
            $table->integer('id_transaction')->unsigned();
            $table->foreign('id_transaction')->references('id_transaction')->on('Transactiondatabase');
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
