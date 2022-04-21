<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->increments('id_riwayat');
            $table->text('keterangan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('id_siswa')->unsigned();
            $table->integer('id_guru')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('riwayats');
    }
}
