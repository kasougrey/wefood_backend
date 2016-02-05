<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('name',50);
            $table->string('mobile',20)->unique();
            $table->string('address');
            $table->integer('region');
            $table->smallInteger('status');
            $table->softDeletes();
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
        Schema::drop('users_contact');
    }
}
