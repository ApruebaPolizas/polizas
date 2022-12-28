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
        Schema::create('orden__interesados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('order_number');
            $table->string('id_user_interesado');
            $table->string('email_interesado',900);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden__interesados');
    }
};
