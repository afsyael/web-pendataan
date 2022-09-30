<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = [
        'name',
        'email',
        'jk',
        'divisi',
        'telepon',
        'nip',
        'negara_domisili',
        'alamat',
        'status_pernikahan',
    ];
}
