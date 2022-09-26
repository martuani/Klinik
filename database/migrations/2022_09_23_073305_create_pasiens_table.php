<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_pasien_id')->constrained();
            $table->string('pasien_NIK', 16);
            $table->foreignId('perusahaan')->constrained();
            $table->foreignId('divisi')->constrained();
            $table->foreignId('jabatan')->constrained();
            $table->string('pasien_nama', 50);
            $table->string('pasien_tempat_lahir', 20);
            $table->date('pasien_tanggal');
            $table->bigInteger('pasien_umur');
            $table->string('pasien_jenis_kelamin', 10);
            $table->string('pasien_alamat', 50);
            $table->string('pasien_alamat_mess', 20);
            $table->string('pasien_pekerjaan', 20);
            $table->unsignedInteger('pasien_telepon');
            $table->string('pasien_email', 30);
            $table->boolean('pasien_alergi_obat');
            $table->boolean('pasien_hamil_,menyusui');
            $table->string('pasien_keluarga', 20);
            $table->string('pasien_nama_keluarga', 50);
            $table->string('pasien_alamat_keluarga', 50);
            $table->string('pasien_pekerjaan_keluarga', 50);
            $table->bigInteger('pasien_telepon_keluarga');
            $table->string('pasien_email_keluarga', 30);
            $table->unsignedInteger('pasien_create_by');
            $table->unsignedInteger('pasien_change_by');
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
        Schema::dropIfExists('pasiens');
    }
}
