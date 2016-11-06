<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('occupation');
            $table->text('legend');
            $table->integer('max_sanity');
            $table->integer('max_health');
            $table->json('possessions');
            $table->string('ability');
            $table->integer('focus');
            $table->json('skill_pairs_scales');
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
        Schema::dropIfExists('investigators');
    }
}
