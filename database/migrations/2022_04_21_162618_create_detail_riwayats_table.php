<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailRiwayatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_riwayats', function (Blueprint $table) {
            $table->increments('id_detail_riwayat');
            $table->integer('id_riwayat')->unsigned();
            $table->text('file')->nullable();
            $table->timestamps();

            $table->foreign('id_riwayat')
                ->references('id_riwayat')->on('riwayats')
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
        Schema::dropIfExists('detail_riwayats');
    }
}
