<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrediturModel extends Model
{
    //
    protected $fillable = [
        'Id_Kreditur',
        'Nama_Kreditur',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Pekerjaan',
        'Telepon',
        'Alamat',
        'No_KTP',
        'Status_Kreditur'
    ];
}
