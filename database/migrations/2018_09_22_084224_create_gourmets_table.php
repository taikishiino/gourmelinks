<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGourmetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gourmets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reporter_id')->unsigned();
            $table->string('gourmet_name');
            $table->string('price');
            $table->string('restaurant_name');
            $table->foreign('reporter_id')
                ->references('id')->on('reporters')
                ->onDelete('cascade');
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
        Schema::dropIfExists('gourmets');
    }
}
