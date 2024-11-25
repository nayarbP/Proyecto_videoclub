<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatoTable extends Migration
{
    public function up()
    {
        Schema::create('formatos', function (Blueprint $table) {
            $table->id('forId'); // Primary key
            $table->string('forNombre', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formatos');
    }
}
