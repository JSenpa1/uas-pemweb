<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan', 'jabatan', 'nomor_telepon', 'foto'];
}
