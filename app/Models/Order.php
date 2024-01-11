<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'tb_pesanan';
    protected $fillable = [
        'kode',
        'nama_pelanggan',
        'telepon',
        'alamat',
        'layanan',
        'jumlah',
        'keterangan',
    ];
}
