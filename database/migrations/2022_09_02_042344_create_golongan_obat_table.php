<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolonganObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golongan_obat', function (Blueprint $table) {
            $table->bigInteger('obat_golongan_kode')->primary();
            $table->string('obat_golongan_nama', 20);
            $table->unsignedInteger('obat_golongan_create_by');
            $table->unsignedInteger('obat_golongan_change_by');
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
        Schema::dropIfExists('golongan_obat');
    }
}
