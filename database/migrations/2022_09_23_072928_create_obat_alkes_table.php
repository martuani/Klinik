<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatAlkesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_alkes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_obat_id')->constrained();
            $table->foreignId('golongan_obat_id')->constrained();
            $table->foreignId('nama_obat_id')->constrained();
            $table->foreignId('satuan_obat_id')->constrained();
            $table->foreignId('bobot_obat_id')->constrained();
            $table->string('obat_komposisi');
            $table->unsignedInteger('obat_create_by');
            $table->unsignedInteger('obat_change_by');
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
        Schema::dropIfExists('obat_alkes');
    }
}
