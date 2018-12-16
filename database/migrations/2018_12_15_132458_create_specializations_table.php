<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specializations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('parent_specialization_id')->unsigned()->nullable();
            $table->foreign('parent_specialization_id')->references('id')->on('specializations');
            $table->timestamps();
        });

        Schema::create('specialization_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('specialization_id')->unsigned();
            $table->foreign('specialization_id')->references('id')->on('specializations');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('is_main')->default(0);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
           $table->boolean('is_specialist')->after('uuid')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialization_user');
        Schema::dropIfExists('specializations');

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_specialist');
        });
    }
}
