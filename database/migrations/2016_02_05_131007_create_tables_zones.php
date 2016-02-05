<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesZones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables_zones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->float('min_consume');
            $table->float('reservation_price');
            $table->integer('reservation_max_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tables_zones');
    }
}
