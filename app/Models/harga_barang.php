<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class harga_barang extends Model
{
    protected $table = 'harga_barang';
    protected $fillable = [
        'id_harga',
        'id_barang',
        'tanggal_berlaku',
        'harga_beli'
    ];
}
