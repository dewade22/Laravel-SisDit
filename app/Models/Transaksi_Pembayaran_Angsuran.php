<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Transaksi_Pembayaran_Angsuran extends Model
{
    //
    protected $table = 'transaksi_pembayaran_angsuran';
    protected $primaryKey = 'Id_Pembayaran';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    public $fillable = [
        'Id_Pembayaran',
        'Id_User',
        'Id_Kredit',
        'Angsuran_Ke',
        'Tanggal_Pembayaran',
        'Pembayaran_Pokok',
        'Pembayaran_Bunga',
        'Denda'
    ];

    public function Transaksi_Kredit(){
        return $this->belongsTo(Transaksi_Kredit::class);
    }
}
