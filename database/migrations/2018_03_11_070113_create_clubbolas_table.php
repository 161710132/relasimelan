<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubbolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubbolas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_club');
            $table->string('asal_kota');
            $table->string('nama_stadion');
            $table->unsignedInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('managerclubs')->ondelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubbolas');
    }
}
