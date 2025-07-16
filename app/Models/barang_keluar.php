<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    protected $primaryKey = 'id_keluar';
    public $timestamps = false;
    protected $table = 'barang_keluar';
    protected $fillable = [
        'id_keluar',
        'id_barang',
        'tanggal_keluar',
        'jumlah',
        'tujuan'
    ];
    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id_barang');
    }

}
