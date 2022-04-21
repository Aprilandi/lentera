<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPekerjaanSiswas extends Model
{
    use HasFactory;

    protected $table = 'detail_pekerjaan_siswas';

    protected $primaryKey = "id_detail_pekerjaan";

    protected $fillable = [
        'id_detail_pekerjaan',
        'id_pekerjaan',
        'file'
    ];

    public function PekerjaanSiswa()
    {
        return $this->belongsTo(PekerjaanSiswas::class, 'id_pekerjaan', 'id_pekerjaan');
    }

}
