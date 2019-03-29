<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Promodatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo', function (Blueprint $table) {
            $table->bigIncrements('id_promo');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
            $table->text('promo_description');
            $table->blob('promo_image');
            $table->string('type_of_promotion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo');
    }
}
