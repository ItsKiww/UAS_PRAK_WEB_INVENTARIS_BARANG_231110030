<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori_barang extends Model
{
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
    protected $table = 'kategori_barang';
    protected $fillable = [
        'id_kategori',
        'nama_kategori'
    ];
}
