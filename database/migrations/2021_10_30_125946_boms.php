<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Boms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boms', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('usuario');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('sexo');
            $table->string('birthday');
            $table->string('correo')->unique();
            $table->string('dpi');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('password');
            $table->string('rol');
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
        Schema::dropIfExists('boms');
    }
}
