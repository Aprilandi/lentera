<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanSiswas extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan_siswas';

    protected $primaryKey = "id_pekerjaan";

    protected $fillable = [
        'id_pekerjaan',
        'id_judul_pekerjaan',
        'keterangan',
        'id_siswa',
        'id_guru'
    ];

    public function Siswa()
    {
        return $this->belongsTo(Siswas::class, 'id_siswa', 'id_siswa');
    }

    public function Guru()
    {
        return $this->belongsTo(Gurus::class, 'id_guru', 'id_guru');
    }

    public function JudulPekerjaan()
    {
        return $this->belongsTo(JudulPekerjaanSiswas::class, 'id_judul_pekerjaan', 'id_judul_pekerjaan');
    }

    public function DetailPekerjaan()
    {
        return $this->hasMany(DetailPekerjaanSiswas::class, 'id_pekerjaan', 'id_pekerjaan');
    }
}
