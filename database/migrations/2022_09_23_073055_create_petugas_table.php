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
            $table->id();
            $table->string('petugas_password');
            $table->foreignId('jadwal_id')->constrained();
            $table->string('petugas_nama', 50);
            $table->bigInteger('petugas_telp');
            $table->string('petugas_email', 50);
            $table->foreignId('level_id')->constrained();
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
