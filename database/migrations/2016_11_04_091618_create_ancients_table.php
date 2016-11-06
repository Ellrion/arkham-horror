<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAncientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ancients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('combat_rating');
            $table->string('defense_type');
            $table->string('worshippers');
            $table->string('power');
            $table->string('attack');
            $table->integer('doom_track_max');
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
        Schema::dropIfExists('ancients');
    }
}
