<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_table')->unsigned();
            $table->integer('id_order_status')->unsigned();
            $table->time('time');
            $table->date('date');
            $table->integer('total_pay');
            $table->timestamps();

            $table->foreign('id_table')->references('id')->on('tables')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_order_status')->references('id')->on('order_status')
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
        Schema::dropIfExists('orders');
    }
}
