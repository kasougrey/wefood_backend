<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->smallInteger('sex');
            $table->integer('wx_avatar');
            $table->string('wx_open_id',64)->unique();
            $table->string('wx_union_id',64);
            $table->integer('category_id');
            $table->smallInteger('status');
            $table->softDeletes();
        });

        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->float('balance');
            $table->float('point');
            $table->smallInteger('status');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sex');
            $table->dropColumn('wx_avatar');
            $table->dropColumn('wx_open_id');
            $table->dropColumn('wx_union_id');
            $table->dropColumn('category_id');
            $table->dropColumn('status');
        });

        Schema::drop('accounts');
    }
}
