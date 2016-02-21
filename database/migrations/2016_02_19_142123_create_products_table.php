<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('branch_id');
            $table->integer('category_id');
            $table->string('title');
            $table->integer('tag_id');
            $table->float('default_price');
            $table->float('default_standard_id');
            $table->integer('cover_id');
            $table->text('content');
            $table->integer('sale_summary');
            $table->timestamp('available_time');
            $table->timestamp('start_time');
            $table->timestamp('stop_time');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('products');
    }
}
