<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreignkeydatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function(Blueprint $table){
<<<<<<< HEAD
            $table->foreign('id_role')->references('id_role')->on('role');
        });

        Schema::table('comment', function(Blueprint $table){
            $table->foreign('id_product')->references('id_product')->on('product');
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_reply')->references('id_reply')->on('reply');
        });

        Schema::table('product', function(Blueprint $table){
            $table->foreign('id_category')->references('id_category')->on('category');
        });

        Schema::table('promo', function(Blueprint $table){
            $table->foreign('id_product')->references('id_product')->on('product');
        });

        Schema::table('reply', function(Blueprint $table){
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_product')->references('id_product')->on('product');
            $table->foreign('id_comment')->references('id_comment')->on('comment');
        });

        Schema::table('user_profile', function(Blueprint $table){
            $table->foreign('id_role')->references('id_role')->on('role');
            $table->foreign('id_user')->references('id_user')->on('user');
        });

        Schema::table('transaction', function(Blueprint $table){
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_product')->references('id_product')->on('product');
        });

        Schema::table('sales_report', function(Blueprint $table){
            $table->foreign('id_transaction')->references('id_transaction')->on('transaction');
=======
            $table->foreign('id_role')->references('id_role')->on('Roledatabase');
        });

        Schema::table('comment', function(Blueprint $table){
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
            $table->foreign('id_user')->references('id_user')->on('Userdatabase');
            $table->foreign('id_reply')->references('id_reply')->on('Replydatabase');
        });

        Schema::table('product', function(Blueprint $table){
            $table->foreign('id_category')->references('id_category')->on('Categorydatabase');
        });

        Schema::table('promo', function(Blueprint $table){
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
        });

        Schema::table('reply', function(Blueprint $table){
            $table->foreign('id_user')->references('id_user')->on('Userdatabase');
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
            $table->foreign('id_comment')->references('id_comment')->on('Commentdatabase');
        });

        Schema::table('user_profile', function(Blueprint $table){
            $table->foreign('id_role')->references('id_role')->on('Roledatabase');
            $table->foreign('id_user')->references('id_user')->on('Userdatabase');
        });

        Schema::table('transaction', function(Blueprint $table){
            $table->foreign('id_user')->references('id_user')->on('Userdatabase');
            $table->foreign('id_product')->references('id_product')->on('Productdatabase');
        });

        Schema::table('sales_report', function(Blueprint $table){
            $table->foreign('id_transaction')->references('id_transaction')->on('Transactiondatabase');
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
        //
    }
}
