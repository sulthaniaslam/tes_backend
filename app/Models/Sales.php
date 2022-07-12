<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'code_transaksi', 'tanggal_transaksi', 'customer', 'item', 'qty', 'total_diskon', 'total_harga', 'total_bayar'
    ];
    use HasFactory;
}
