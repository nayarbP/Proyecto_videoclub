<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorTable extends Migration
{
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id('dirId'); // Primary key
            $table->string('dirNombre', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('directors');
    }
}
