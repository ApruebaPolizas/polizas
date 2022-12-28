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

   

        Schema::create('aseguradoras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nit');
            $table->string('tipo_aseguradora');
            $table->string('representante');
            $table->string('ccrepresentante');
            $table->string('direccion_entidad',600);
            $table->string('name1',255);
            $table->string('email1',255);
            $table->string('phone1');
            $table->string('company_name');
            $table->string('name2',255);
            $table->string('email2',255);
            $table->string('phone2');
            $table->string('url1',900);
            $table->string('url2',900);
            $table->string('cargo1',200);
            $table->string('cargo2',200);
            $table->string('dir1',200);
            $table->string('dir2',200);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aseguradoras');
    }
};
