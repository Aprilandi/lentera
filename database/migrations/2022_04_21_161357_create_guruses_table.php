<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guruses', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->string('nutpk')->nullable();
            $table->string('nama_guru')->nullable();
            $table->text('alamat_guru')->nullable();
            $table->string('tlp_guru')->nullable();
            $table->string('ttl_guru')->nullable();
            $table->string('no_ktp_guru')->nullable();
            $table->string('no_kk_guru')->nullable();
            $table->string('nama_ibu_guru')->nullable();
            $table->string('pen_akhir_guru')->nullable();
            $table->string('jabatan_guru')->nullable();
            $table->string('email_guru')->nullable();
            $table->string('status_aktif_guru')->nullable();
            $table->text('foto_guru')->nullable();
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
        Schema::dropIfExists('guruses');
    }
}
