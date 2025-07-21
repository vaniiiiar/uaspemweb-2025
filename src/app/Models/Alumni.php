<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = [
        'nama',
        'tahun_lulus',
        'jurusan',
        'pekerjaan',
        'kontak'
    ];
    
    protected $casts = [
        'tahun_lulus' => 'integer'
    ];
}
