<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gurus extends Model
{
    use HasFactory;

    protected $table = 'guruses';

    protected $primaryKey = "id_guru";

    protected $fillable = [
        "id_guru", 
        'nutpk',
        'nama_guru',
        'alamat_guru',
        'tlp_guru',
        'ttl_guru',
        'no_ktp_guru',
        'no_kk_guru',
        'nama_ibu_guru',
        'pen_akhir_guru',
        'jabatan_guru',
        'email_guru',
        'status_aktif_guru',
        'foto_guru'    
    ];

    public function PekerjaanSiswa()
    {
        return $this->hasMany(PekerjaanSiswas::class, 'id_guru', 'id_guru');
    }

    public function Riwayat()
    {
        return $this->hasMany(Riwayats::class, 'id_guru', 'id_guru');
    }

}
