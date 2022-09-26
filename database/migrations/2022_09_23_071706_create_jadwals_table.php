<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('jadwal_hari', 20);
            $table->string('jadwal_shift', 20);
            $table->time('jadwal_dari');
            $table->time('jadwal_sampai');
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
        Schema::dropIfExists('jadwals');
    }
}
