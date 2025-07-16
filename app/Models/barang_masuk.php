<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    protected $primaryKey = 'id_masuk';
    public $timestamps = false;
    protected $table = 'barang_masuk';
    protected $fillable = [
        'id_masuk',
        'id_barang',
        'id_pemasok',
        'tanggal_masuk',
        'jumlah',
        'harga_beli'
    ];
    
    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id_barang');
    }
    
    public function pemasok()
    {
        return $this->belongsTo(pemasok::class, 'id_pemasok', 'id_pemasok');
    }
}

