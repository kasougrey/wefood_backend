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
            $table->integer('apps_id');
            $table->smallInteger('sex');
            $table->integer('avatar');
            $table->string('openid',64);
            $table->string('unionid',64);
            $table->integer('level_id');
            $table->smallInteger('status');
            $table->softDeletes();
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
            $table->dropColumn('app_id');
            $table->dropColumn('sex');
            $table->dropColumn('avatar');
            $table->dropColumn('openid');
            $table->dropColumn('unionid');
            $table->dropColumn('level_id');
            $table->dropColumn('status');
        });
    }
}
