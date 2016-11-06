<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('awareness');
            $table->string('movement_type');
            $table->integer('home_dimension');
            $table->json('abilities');
            $table->text('flavor_text');
            $table->integer('horror_rating');
            $table->integer('horror_damage');
            $table->integer('toughness');
            $table->integer('combat_rating');
            $table->integer('combat_damage');
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
        Schema::dropIfExists('monsters');
    }
}
