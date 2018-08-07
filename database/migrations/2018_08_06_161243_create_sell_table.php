<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sell', function (Blueprint $table) {
        $table->increments('id');
        $table->string('code');
        $table->integer('cant_pro_sell');
        $table->integer('user_id')->unsigned();
        $table->integer('product_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('product_id')->references('id')->on('product_user');   
        $table->timestamps();   
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
