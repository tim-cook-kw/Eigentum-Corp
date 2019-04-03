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
            $table->integer('id_category')->unsigned();
            $table->string('product_name');
            $table->text('comment_description');
            $table->blob('image');
            $table->timestamps('created_at');
            $table->interger('product_price');
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
