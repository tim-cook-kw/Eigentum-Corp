<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productdatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id_product');
<<<<<<< HEAD
            $table->unsignedBigInteger('id_category')->nullable();
=======
            $table->integer('id_category')->unsigned();
>>>>>>> a0c132b815a3e13198c6a15edc224ef0c641769d
            $table->string('product_name');
            //$table->text('comment_description');
            //$table->blob('image');
            //$table->timestamps('created_at');
            $table->integer('product_price');
            $table->text('address');
            $table->boolean('status');
            $table->string('product_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
