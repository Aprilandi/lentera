<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaan_siswas', function (Blueprint $table) {
            $table->increments('id_pekerjaan');
            $table->integer('id_judul_pekerjaan')->unsigned();
            $table->text('keterangan')->nullable();
            $table->integer('id_siswa')->unsigned();
            $table->integer('id_guru')->unsigned();
            $table->timestamps();

            $table->foreign('id_judul_pekerjaan')
                ->references('id_judul_pekerjaan')->on('judul_pekerjaan_siswas')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('id_siswa')
                ->references('id_siswa')->on('siswas')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('id_guru')
                ->references('id_guru')->on('guruses')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pekerjaan_siswas');
    }
}
