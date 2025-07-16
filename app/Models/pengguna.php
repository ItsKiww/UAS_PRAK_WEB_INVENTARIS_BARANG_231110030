<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $primaryKey = 'id_pengguna';
    public $timestamps = false;
    protected $table = 'pengguna';
    protected $fillable = [
        'id_pengguna',
        'username',
        'password',
        'level'
    ];
}
