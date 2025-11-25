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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('para_evento')->default(0);
            $table->integer('num_personas')->default(0);
            $table->string('nombre');
            $table->string('a_quien_visita')->nullable();
            $table->string('asunto')->nullable();
            $table->unsignedBigInteger('dependencia_id')->nullable();
            $table->unsignedBigInteger('tipo_visita_id');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->unsignedBigInteger('gafet')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('dependencia_id')->references('id')->on('dependencias');
            $table->foreign('tipo_visita_id')->references('id')->on('tipos_visita');
            $table->foreign('municipio_id')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
