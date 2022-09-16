<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigInteger('jadwal_id')->primary();
            $table->string('jadwal_hari', 20);
            $table->string('jadwal_shift', 20);
            $table->datetime('jadwal_dari');
            $table->datetime('jadwal_sampai');
            $table->unsignedInteger('jadwal_create_by');
            $table->unsignedInteger('jadwal_change_by');
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
        Schema::dropIfExists('jadwal');
    }
}
