<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoripasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoripasien', function (Blueprint $table) {
            $table->string('pasien_id_kategori', 16)->primary();
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
        Schema::dropIfExists('kategoripasien');
    }
}
