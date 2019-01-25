<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSpecialistIdToCounter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kryptonit3_counter_page_visitor', function (Blueprint $table) {
            $table->integer('specialist_id')->unsigned();
            $table->foreign('specialist_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kryptonit3_counter_page_visitor', function (Blueprint $table) {
            $table->dropForeign(['specialist_id']);
            $table->dropColumn('specialist_id');
        });
    }
}
