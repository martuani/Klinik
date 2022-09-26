<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('pasien_nama_kategori', 30);
            $table->unsignedInteger('pasien_kateogri_create_by');
            $table->unsignedInteger('pasien_kateogri_change_by');
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
        Schema::dropIfExists('kategori_pasiens');
    }
}
