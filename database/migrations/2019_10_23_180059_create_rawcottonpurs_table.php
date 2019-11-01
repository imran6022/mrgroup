<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawcottonpursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawcottonpurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('party');
            $table->string('date');
            $table->string('type');
            $table->integer('pound');
            $table->integer('rate');
            $table->integer('amount');
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
        Schema::dropIfExists('rawcottonpurs');
    }
}
