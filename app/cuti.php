<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = [
        'nama',
        'alasan_cuti',
        'divisi',
        'alamat',
        'nip',
        'email',
        'mulai',
        'selesai',
        'status'
    ];
        
}
