<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRiwayats extends Model
{
    use HasFactory;

    protected $table = 'detail_riwayats';

    protected $primaryKey = "id_detail_riwayat";

    protected $fillable = [
        'id_detail_riwayat',
        'id_riwayat',
        'file'
    ];

    public function Riwayat()
    {
        return $this->belongsTo(Riwayats::class, 'id_riwayat', 'id_riwayat');
    }

}
