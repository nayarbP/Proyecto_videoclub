<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilerTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alquilers', function (Blueprint $table) {
            $table->id('alqId');
            $table->unsignedBigInteger('socId');
            $table->unsignedBigInteger('pelId');
            $table->date('alqFechaDesde');
            $table->date('alqFechaHasta');
            $table->decimal('alqValor', 10, 2);
            $table->date('alqFechaEntrega')->nullable();
            $table->timestamps();

            $table->foreign('socId')->references('socId')->on('socios')->onDelete('cascade');
            $table->foreign('pelId')->references('pelId')->on('peliculas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquilers');
    }
}
