<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('stock',50);
            $table->timestamps();
        });
    }

    /**
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
