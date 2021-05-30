<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BungaModel extends Model
{
    //
    protected $table = 'bunga';
    protected $primaryKey = 'Id_Bunga';
    public $timestamps = false;

    protected $fillable = [
        'Bunga_Kredit',
        'Jenis_Bunga',
        'Status',
    ];

    protected $attributes = [
        'status'=> 1,
    ];
}
