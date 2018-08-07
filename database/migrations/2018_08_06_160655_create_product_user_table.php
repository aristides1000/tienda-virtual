<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_user', function (Blueprint $table) {
        $table->increments('id');
        $table->string('code');
        $table->string('name');
        $table->integer('stock');
        $table->float('precio');
        $table->integer('user_id')->unsigned();
        $table->integer('category_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('category_id')->references('id')->on('categories_products');
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
