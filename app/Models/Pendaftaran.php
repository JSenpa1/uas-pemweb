<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftarans';

    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'alamat', 'tanggal_lahir', 'tujuan', 'nomor_telepon', 'tempat_lahir'];
}
