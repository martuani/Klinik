<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamaObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nama_obat', function (Blueprint $table) {
            $table->bigInteger('obat_nama_kode')->primary();
            $table->string('obat_nama', 50);
            $table->integer('obat_nama_create_by');
            $table->integer('obat_nama_change_by');
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
        Schema::dropIfExists('nama_obat');
    }
}
