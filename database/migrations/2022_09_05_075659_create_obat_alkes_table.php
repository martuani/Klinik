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
            $table->id('obat_kode');
            $table->bigInteger('obat_jenis');
            $table->foreign('obat_jenis')->references('obat_jenis_kode')->on('jenis_obat')->onDelete('cascade');
            $table->bigInteger('obat_golongan');
            $table->foreign('obat_golongan')->references('obat_golongan_kode')->on('golongan_obat')->onDelete('cascade');
            $table->bigInteger('obat_nama');
            $table->foreign('obat_nama')->references('obat_nama_kode')->on('nama_obat')->onDelete('cascade');
            $table->bigInteger('obat_satuan');
            $table->foreign('obat_satuan')->references('obat_satuan_kode')->on('satuan_obat')->onDelete('cascade');
            $table->bigInteger('obat_bobot');
            $table->foreign('obat_bobot')->references('obat_bobot_kode')->on('bobot_obat')->onDelete('cascade');
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
