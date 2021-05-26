<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JaminanModel extends Model
{
    //
    protected $table = 'jaminan';
    protected $primaryKey = 'Id_Jaminan';
    public $timestamps = false;

    protected $fillable = [
        'Jaminan',
        'Besar_Pinjaman_Maksimal',
        'Besar_Pinjaman_Minimal',
        'Jangka_Waktu_Maksimal',
        'Jangka_Waktu_Minimal'
    ];
}
