<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi_Kredit extends Model
{
    //
    protected $table = 'transaksi_kredit';
    protected $primaryKey = 'Id_Kredit';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'Id_Kredit',
        'Id_Pengajuan',
        'Id_User',
        'Tanggal_Kredit',
        'Angsuran_Pokok',
        'Bunga_Kredit',
        'Biaya_Administrasi',
        'Biaya_Materai',
        'Sisa_Kredit'
    ];

    public function Pengajuan_Kredit(){
        return $this->belongsTo(Pengajuan_Kredit::class);
    }
}
