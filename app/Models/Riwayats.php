<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayats extends Model
{
    use HasFactory;

    protected $table = 'riwayats';

    protected $primaryKey = "id_riwayat";

    protected $fillable = [
        'id_riwayat',
        'keterangan',
        'deskripsi',
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

    public function DetailRiwayat()
    {
        return $this->hasMany(DetailRiwayats::class, 'id_riwayat', 'id_riwayat');
    }

}
