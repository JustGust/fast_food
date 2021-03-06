<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_table')->unsigned();
            $table->integer('id_product')->unsigned();
            $table->string('description', 1000);
            $table->integer('amount');
            $table->integer('product_total')->unsigned();
            $table->timestamps();

            $table->foreign('id_table')->references('id')->on('tables')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_product')->references('id')->on('products')
            ->onUpdate('cascade')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_products');
    }
}
