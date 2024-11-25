<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroTable extends Migration
{
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->id('genId'); // Primary key
            $table->string('genNombre', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('generos');
    }
}
