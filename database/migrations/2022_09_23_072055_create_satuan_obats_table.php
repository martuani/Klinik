<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatuanObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satuan_obats', function (Blueprint $table) {
            $table->id();
            $table->string('obat_satuan', 10);
            $table->unsignedInteger('obat_satuan_create_by');
            $table->unsignedInteger('obat_satuan_change_by');
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
        Schema::dropIfExists('satuan_obats');
    }
}
