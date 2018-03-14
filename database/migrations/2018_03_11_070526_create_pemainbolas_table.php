<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemainbolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemainbolas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asal_kota');
            $table->unsignedInteger('clubbola_id')->unique();
            $table->foreign('clubbola_id')->references('id')->on('clubbolas')->ondelete('cascade');
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
        Schema::dropIfExists('pemainbolas');
    }
}
