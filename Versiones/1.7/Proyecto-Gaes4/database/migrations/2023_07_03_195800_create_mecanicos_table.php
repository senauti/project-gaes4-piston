<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula')->lenght(10)->unsigned();
            $table->string('nombre',45);
            $table->string('apellido',45);
            $table->string('direccion',45);
            $table->integer('telefono')->lenght(45)->unsigned();
            $table->string('email',45);
            $table->string('ciudad',45);
            $table->string('especialidad',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mecanicos');
    }
};
