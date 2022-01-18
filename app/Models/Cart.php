<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_transaksi', 'kode_produk', 'nama_produk', 'jumlah', 'subtotal'
    ];
    public $timestamps = false;
}
