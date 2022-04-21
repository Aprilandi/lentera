<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $primaryKey = "id_role";

    protected $fillable = [
        "id_role", "nama_role", 'deskripsi'
    ];

    public function User()
    {
        return $this->hasMany(User::class, 'id_role', 'id_role');
    }
}
