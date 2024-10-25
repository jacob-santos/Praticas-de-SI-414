<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartphonesTable extends Migration
{
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->id(); 
            $table->string('marca'); 
            $table->string('modelo'); 
            $table->string('sistema_operativo'); 
            $table->integer('capacidad_almacenamiento'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smartphones');
    }
}
