<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'tgl_lahir',
        'jenis_kelamin',
        'jalur_masuk',
        'id_prodi',
        'id_ukt',
        'status'
    ];
    public $timestamps = true;
}
