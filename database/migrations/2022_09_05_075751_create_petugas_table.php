<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id('petugas_id');
            $table->string('petugas_password');
            $table->bigInteger('petugas_jadwal');
            $table->foreign('petugas_jadwal')->references('jadwal_id')->on('jadwal')->onDelete('cascade');
            $table->string('petugas_nama', 50);
            $table->bigInteger('petugas_telp');
            $table->string('petugas_email', 50);
            $table->bigInteger('petugas_level');
            $table->foreign('petugas_level')->references('level_id')->on('level')->onDelete('cascade');
            $table->unsignedInteger('petugas_create_by');
            $table->unsignedInteger('petugas_change_by');
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
        Schema::dropIfExists('petugas');
    }
}
