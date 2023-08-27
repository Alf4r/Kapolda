<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'table_laporan';

    protected $fillable = [
        'id',
        'nama_lengkap',
        'nik',
        'korban',
        'tempat_lahir',
        'tanggal_lahir',
        'email',
        'kewarganegaraan',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'alamat_lengkap',
        'lokasi_kejadian',
        'jenis_kejahatan',
        'kerugian',
        'tanggal_kejadian',
        'waktu_kejadian',
        'detail_motif',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kode_pos',
        'nama_ibu',
        'nama_bapak',
        'pekerjaan_ibu',
        'pekerjaan_bapak',
    ];
}
