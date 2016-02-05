<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsStandard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_standard', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id');
            $table->string('title');
            $table->float('price');
            $table->string('remarks');
            $table->integer('sale_summary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_standard');
    }
}
