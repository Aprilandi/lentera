<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudulPekerjaanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judul_pekerjaan_siswas', function (Blueprint $table) {
            $table->increments('id_judul_pekerjaan');
            $table->string('judul_pekerjaan');
            $table->text('deskripsi_pekerjaan')->nullable();
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
        Schema::dropIfExists('judul_pekerjaan_siswas');
    }
}
