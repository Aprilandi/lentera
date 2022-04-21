<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $primaryKey = "id_siswa";

    protected $fillable = [
        "id_siswa",
        'no_induk_siswa',
        'nama_siswa',
        'alamat_siswa',
        'tlp_siswa',
        'ttl_siswa',
        'no_ktp_siswa',
        'no_kk_siswa',
        'nama_ayah_siswa',
        'pekerjaan_ayah',
        'nama_ibu_siswa',
        'pekerjaan_ibu',
        'golongan_siswa',
        'status_aktif_siswa',
        'foto_siswa'
    ];

    public function PekerjaanSiswa()
    {
        return $this->hasMany(PekerjaanSiswas::class, 'id_siswa', 'id_siswa');
    }

    public function Riwayat()
    {
        return $this->hasMany(Riwayats::class, 'id_siswa', 'id_siswa');
    }
}
