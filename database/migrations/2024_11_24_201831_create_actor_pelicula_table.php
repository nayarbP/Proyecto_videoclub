<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorPeliculaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actor_peliculas', function (Blueprint $table) {
            $table->id('aplId');
            $table->unsignedBigInteger('actId');
            $table->unsignedBigInteger('pelId');
            $table->string('aplPapel', 60);
            $table->timestamps();

            $table->foreign('actId')->references('actId')->on('actors')->onDelete('cascade');
            $table->foreign('pelId')->references('pelId')->on('peliculas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_peliculas');
    }
}
