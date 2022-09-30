<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kritik extends Model
{
    protected $table = 'kritik';
    protected $fillable = [
        'name',
        'email',
        'subject',
        'pesan',   
    ];
}
