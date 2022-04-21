<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPekerjaanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pekerjaan_siswas', function (Blueprint $table) {
            $table->increments('id_detail_pekerjaan');
            $table->integer('id_pekerjaan')->unsigned();
            $table->text('file')->nullable();
            $table->timestamps();

            $table->foreign('id_pekerjaan')
                ->references('id_pekerjaan')->on('pekerjaan_siswas')
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
        Schema::dropIfExists('detail_pekerjaan_siswas');
    }
}
