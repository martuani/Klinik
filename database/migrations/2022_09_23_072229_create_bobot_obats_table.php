<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBobotObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot_obats', function (Blueprint $table) {
            $table->id();
            $table->string('obat_bobot', 20);
            $table->unsignedInteger('obat_bobot_create_by');
            $table->unsignedInteger('obat_bobot_change_by');
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
        Schema::dropIfExists('bobot_obats');
    }
}
