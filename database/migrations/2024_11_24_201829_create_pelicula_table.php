<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id('pelId');
            $table->unsignedBigInteger('genId');
            $table->unsignedBigInteger('dirId');
            $table->unsignedBigInteger('forId');
            $table->string('pelNombre', 60);
            $table->decimal('pelCosto', 10, 2);
            $table->date('pelFechaEstreno');
            $table->timestamps();

            $table->foreign('genId')->references('genId')->on('generos')->onDelete('cascade');
            $table->foreign('dirId')->references('dirId')->on('directors')->onDelete('cascade');
            $table->foreign('forId')->references('forId')->on('formatos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
}
