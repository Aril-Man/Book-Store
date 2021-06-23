<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'tbl_buku';
    protected $primarykey = 'id_buku';
    protected $fillable = [
        'id_buku',
        'judul',
        'noisbn',
        'penulis',
        'penerbit',
        'tahun',
        'stok',
        'harga_pokok',
        'harga_jual',
        'ppn',
        'diskon'
    ];
}
