<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemasok extends Model
{
    protected $primaryKey = 'id_pemasok';
    public $timestamps = false;
    protected $table = 'pemasok';
    protected $fillable = [
        'id_pemasok',
        'nama_pemasok',
        'alamat',
        'telepon'
    ];
}
