<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orders_id');
            $table->integer('products_id');
            $table->integer('products_notes_id');
            $table->timestamp('produce_time');
            $table->timestamp('serving_time');
            $table->timestamps();
            $table->integer('rank');
            $table->smallInteger('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders_products');
    }
}
