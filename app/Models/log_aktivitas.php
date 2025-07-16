<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class log_aktivitas extends Model
{
    protected $primaryKey = 'id_log';
    public $timestamps = false;
    protected $table = 'log_aktivitas';
    protected $fillable = [
        'id_log',
        'id_pengguna',
        'aktivitas',
        'timestamp'
    ];
    public function pengguna()
{
    return $this->belongsTo(pengguna::class, 'id_pengguna', 'id_pengguna');
}
}
