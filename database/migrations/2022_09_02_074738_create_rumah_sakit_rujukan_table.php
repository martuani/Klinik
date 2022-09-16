<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahSakitRujukanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah_sakit_rujukan', function (Blueprint $table) {
            $table->id('RS_rujukan');
            $table->string('RS_rujukan_nama', 20);
            $table->unsignedInteger('RS_rujukan_create_by');
            $table->unsignedInteger('RS_rujukan_change_by');
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
        Schema::dropIfExists('rumah_sakit_rujukan');
    }
}
