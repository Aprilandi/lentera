<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JudulPekerjaanSiswas extends Model
{
    use HasFactory;

    protected $table = 'judul_pekerjaan_siswas';

    protected $primaryKey = "id_judul_pekerjaan";

    protected $fillable = [
        'id_judul_pekerjaan',
        'judul_pekerjaan',
        'deskripsi_pekerjaan'
    ];

    public function PekerjaanSiswa()
    {
        return $this->hasMany(PekerjaanSiswas::class, 'id_judul_pekerjaan', 'id_judul_pekerjaan');
    }

}
