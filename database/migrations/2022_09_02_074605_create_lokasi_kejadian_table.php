<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiKejadianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_kejadian', function (Blueprint $table) {
            $table->id('lokasi_kode');
            $table->string('lokasi_nama', 20);
            $table->unsignedInteger('lokasi_create_by');
            $table->unsignedInteger('lokasi_change_by');
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
        Schema::dropIfExists('lokasi_kejadian');
    }
}
