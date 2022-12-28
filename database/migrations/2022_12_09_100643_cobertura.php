<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polizas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('clase_de_riesgo');
            $table->string('porcentaje_amparo');
            $table->string('valor_asegurado',255);
            $table->string('vigencia',900);
            $table->string('estado',255);
            $table->string('iva',255);
            $table->string('tipo_de_poliza',255);
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polizas');
    }
};
