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
        Schema::table('add_p_n_gfiles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('size')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')->nullable();
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('add_p_n_gfiles', function (Blueprint $table) {
            //
        });
    }
};
