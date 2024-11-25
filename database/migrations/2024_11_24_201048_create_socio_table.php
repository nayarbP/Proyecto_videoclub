<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocioTable extends Migration
{
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id('socId'); // Primary key
            $table->char('socCedula', 10)->unique();
            $table->string('socNombre', 60);
            $table->string('socDireccion', 60)->nullable();
            $table->char('socTelefono', 10)->nullable();
            $table->string('socCorreo', 60)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socios');
    }
}
