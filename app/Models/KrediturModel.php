<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrediturModel extends Model
{
    //
    protected $table = 'kreditur';
    protected $primaryKey = 'Id_Kreditur';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
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
