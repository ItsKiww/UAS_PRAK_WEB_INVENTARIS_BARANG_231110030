<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stok_adjustment extends Model
{
    protected $primaryKey = 'id_adjust';
    public $timestamps = false;
    protected $table = 'stok_adjustment';
    protected $fillable = [
        'id_adjust',
        'id_barang',
        'tanggal',
        'perubahan_stok',
        'alasan'
    ];
    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id_barang');
    }

}

