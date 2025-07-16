<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class akunInventaris extends Model
{
    protected $primaryKey = 'username';
    public $timestamps = false;
    protected $table = 'akun_inventaris';
    protected $fillable = [
        'pass',
        'nama',
        'email',
        'kontak'
    ];
}
