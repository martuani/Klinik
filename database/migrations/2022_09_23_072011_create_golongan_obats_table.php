<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolonganObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golongan_obats', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('golongan_obats');
    }
}
