<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->date('tanggal_dimulai');
            $table->date('tanggal_deadline');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
