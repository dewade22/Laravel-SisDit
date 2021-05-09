<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan_Kredit extends Model
{
    //
    protected $fillable = [
        'Id_Pengajuan',
        'Id_Kreditur',
        'Id_User',
        'Id_Jaminan',
        'Tanggal_Pengajuan',
        'Tujuan_Peminjaman',
        'Besar_Pinjaman',
        'Jangka_Waktu',
        'Lampiran',
        'Status_Pengajuan'
    ];

    public function Kreditur(){
        return $this->belongsTo(KrediturModel::class);
    }
}


