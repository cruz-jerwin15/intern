<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_level_course_tracks', function (Blueprint $table) {
            $table->increments('user_level_course_track_id');
            $table->integer('user_id');
            $table->integer('level_id');
            $table->integer('course_track_id');
            $table->string('status', 10);
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
        Schema::dropIfExists('user_level_course_tracks');
    }
};
