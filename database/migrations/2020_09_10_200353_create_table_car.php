<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('marca');
            $table->string('modelo');
            $table->string('ano');
            $table->string('cor');
            $table->integer('portas');
            $table->string('cambio');
            $table->string('velocidade');
            $table->string('KmRodados');
            $table->string('combustivel');
            $table->string('motor');
            $table->string('valor');
            $table->string('descricao');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
