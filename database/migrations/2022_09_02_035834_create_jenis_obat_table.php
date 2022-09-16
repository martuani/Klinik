<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_obat', function (Blueprint $table) {
            $table->bigInteger('obat_jenis_kode')->primary();
            $table->string('obat_jenis_nama');
            $table->integer('obat_jenis_create_by');
            $table->integer('obat_jenis_change_by');
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
        Schema::dropIfExists('jenis_obat');
    }
}
