<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_transaksi', 'tgl_transaksi', 'buyer', 'nohp', 'alamat', 'kota', 'total_produk', 'berat',
        'subtotal', 'ongkir', 'total', 'ekspedisi', 'estimasi', 'catatan'
    ];
}
