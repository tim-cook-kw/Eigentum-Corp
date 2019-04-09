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
<<<<<<< HEAD
            $table->unsignedBigInteger('id_product')->nullable();
=======
            $table->integer('id_product')->unsigned();
>>>>>>> a0c132b815a3e13198c6a15edc224ef0c641769d
            $table->text('promo_description');
            //$table->blob('promo_image');
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
