<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('no_induk_siswa');
            $table->string('nama_siswa');
            $table->text('alamat_siswa')->nullable();
            $table->string('tlp_siswa')->nullable();
            $table->string('ttl_siswa')->nullable();
            $table->string('no_ktp_siswa');
            $table->string('no_kk_siswa');
            $table->string('nama_ayah_siswa')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu_siswa')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('golongan_siswa')->nullable();
            $table->string('status_aktif_siswa')->nullable();
            $table->text('foto_siswa')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
