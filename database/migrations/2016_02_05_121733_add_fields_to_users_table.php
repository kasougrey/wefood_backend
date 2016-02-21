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
            $table->string('wx_open_id',64);
            $table->string('wx_union_id',64);
            $table->integer('category_id');
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
            $table->dropColumn('sex');
            $table->dropColumn('wx_avatar');
            $table->dropColumn('wx_open_id');
            $table->dropColumn('wx_union_id');
            $table->dropColumn('category_id');
            $table->dropColumn('status');
        });
    }
}
