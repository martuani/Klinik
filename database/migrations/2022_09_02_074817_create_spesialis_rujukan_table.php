<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpesialisRujukanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spesialis_rujukan', function (Blueprint $table) {
            $table->id('spesialis_rujukan_kode');
            $table->string('spesialis_rujukan_nama', 20);
            $table->unsignedInteger('spesialis_rujukan_create_by');
            $table->unsignedInteger('spesialis_rujukan_change_by');
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
        Schema::dropIfExists('spesialis_rujukan');
    }
}
