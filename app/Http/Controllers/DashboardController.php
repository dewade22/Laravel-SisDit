<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KrediturModel;
use App\Models\Pengajuan_Kredit;
use App\Models\Transaksi_Kredit;
use App\Models\Transaksi_Pembayaran_Angsuran;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kreditur = DB::table('Kreditur')->count();
        $pengajuan = DB::table('Pengajuan_Kredit')->where('Status_Pengajuan', 'Disetujui')->count();
        $kredit = DB::table('Pengajuan_Kredit')
            ->join('kreditur', 'Pengajuan_Kredit.Id_Kreditur', '=', 'Kreditur.Id_Kreditur')
            ->Join('Transaksi_Kredit', 'Transaksi_Kredit.Id_Pengajuan', '=', 'Pengajuan_Kredit.Id_Pengajuan')
            ->sum('Pengajuan_Kredit.Besar_Pinjaman');
        $angsuran = DB::table('Transaksi_pembayaran_Angsuran')->sum(DB::raw('Pembayaran_Pokok + Pembayaran_Bunga'));
        return view('Dashboard.index', ['Kreditur'=>$kreditur, 'Pengajuan'=>$pengajuan, 'Kredit'=>$kredit, 'Angsuran'=>$angsuran]);
    }


}
