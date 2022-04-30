<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name', 100);
            $table->integer('id_status')->unsigned();
            $table->integer('id_category')->unsigned();
            $table->string('img', 1000)->nullable();
            $table->string('description', 500)->nullable();
            $table->timestamps();

            $table->foreign('id_status')->references('id')->on('status')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_category')->references('id')->on('categories')
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
        Schema::dropIfExists('products');
    }
}
