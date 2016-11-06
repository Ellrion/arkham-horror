<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherWorldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_worlds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('dimension_sign');
            $table->json('encounter_symbols');
            $table->integer('gates_resistance_rate');
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
        Schema::dropIfExists('other_worlds');
    }
}
