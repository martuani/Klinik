<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPemantauanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_pemantauan', function (Blueprint $table) {
            $table->id('pemantauan_kode');
            $table->string('pemantauan_nama', 20);
            $table->integer('pemantauan_create_by');
            $table->integer('pemantauan_change_by');
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
        Schema::dropIfExists('hasil_pemantauan');
    }
}
