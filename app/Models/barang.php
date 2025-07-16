<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $primaryKey = 'id_barang';
    public $timestamps = false;
    protected $table = 'barang';
    protected $fillable = [
        'id_barang',
        'nama_barang',
        'id_kategori',
        'stok',
        'satuan',
        'harga'
    ];

    public function kategori_barang()
    {
        return $this->belongsTo(kategori_barang::class, 'id_kategori', 'id_kategori');
    }
    
}