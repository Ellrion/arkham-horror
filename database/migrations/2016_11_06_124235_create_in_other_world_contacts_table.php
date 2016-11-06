<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInOtherWorldContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_other_world_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('encounter_symbol');
            $table->integer('world_one');
            $table->string('rule_one');
            $table->integer('world_two');
            $table->string('rule_two');
            $table->string('rule_other');
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
        Schema::dropIfExists('in_other_world_contacts');
    }
}
