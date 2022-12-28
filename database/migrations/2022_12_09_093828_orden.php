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
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('order_number')->unique();
            $table->string('order_fecha');
            $table->string('order_subtotal');
            $table->string('order_iva')->nullable();
            $table->string('order_total');
            $table->string('order_nombre');
            $table->string('order_nit');
            $table->string('order_representante');
            $table->string('order_email');
            $table->string('order_tel');
            $table->string('order_dir');
            $table->string('order_anticipo');
            $table->string('order_estado');
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordens');
    }
};
