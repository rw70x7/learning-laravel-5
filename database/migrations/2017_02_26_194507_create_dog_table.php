<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('breed');
            $table->boolean('male');
            $table->double('price');
            $table->string('color');
            $table->boolean('does_it_shed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dog');
    }
}
