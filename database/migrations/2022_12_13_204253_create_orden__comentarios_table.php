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
        Schema::create('ordenes__comentarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('order_number');
            $table->string('id_user');
            $table->string('comentario',900);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes__comentarios');
    }
};
