<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'nik',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
    ];
}
