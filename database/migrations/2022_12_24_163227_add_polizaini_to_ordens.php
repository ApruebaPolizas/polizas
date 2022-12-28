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
        Schema::table('ordens', function (Blueprint $table) {
            $table->string('poliza_number')->nullable();
            $table->string('poliza_beneficiario')->nullable();
            $table->timestamp('poliza_ini')->nullable();
            $table->timestamp('poliza_end')->nullable();
            $table->string('poliza_expplace')->nullable();
            $table->integer('poliza_diasleft')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordens', function (Blueprint $table) {
            //
        });
    }
};
