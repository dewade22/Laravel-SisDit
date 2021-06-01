<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use App\Models\JaminanModel;

class JaminanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected function validator(array $data){
        return Validator::make($data, [
            'Jaminan' => 'required|string|max:200',
            'Besar_Pinjaman_Maksimal' => 'required|numeric',
            'Besar_Pinjaman_Minimal' => 'required|numeric',
            'Jangka_Waktu_Maksimal' => 'required|numeric',
            'Jangka_Waktu_Minimal' => 'required|numeric',
        ]);
    }
    public function index(Request $request)
    {
        //
        if($request->ajax()){
            $data = JaminanModel::all();
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }
        return view("Jaminan.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jaminan = new JaminanModel();
        return view("Jaminan.create", ['jaminan'=>$jaminan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $hasil = $this->convertString($request);
        $newJaminan = $hasil->all();
        $this-> validator($newJaminan)->validate();
        try{
            $add = JaminanModel::create($newJaminan);
            if($add){
                return redirect()->route('Jaminan.index')->with('success', Config::get('const.SUCCESS_CREATE_MESSAGE'));
            }
            else{
                return redirect()->route('Jaminan.index')->with('error', Config::get('const.FAILED_CREATE_MESSAGE'));
            }
        }
        catch(Exception $ex){
            return redirect()->route('Jaminan.index')->with('error', Config::get('const.FAILED_CREATE_MESSAGE'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jaminan = JaminanModel::findOrFail($id);
        return view('Jaminan.edit', ['jaminan'=>$jaminan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $hasil = $this->convertString($request);
        $newJaminan = $hasil->all();
        $this->validator($newJaminan)->validate();
        try{
            $currentJaminan = JaminanModel::findorfail($id);
            if($currentJaminan){
                $currentJaminan->update($newJaminan);
                return redirect()->route('Jaminan.index')->with('success', Config::get('const.SUCCESS_UPDATE_MESSAGE'));
            }
        }
        catch(Exception $ex){
            return redirect()->route('Jaminan.index')->with('error', Config::get('const.FAILED_UPDATE_MESSAGE'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function convertString($request){
        /*convert dari input string dan hilangkan koma pemisah ribuan*/
        $pinjamanMax = floatval(str_replace(',', '', $request->Besar_Pinjaman_Maksimal));
        $pinjamanMin = floatval(str_replace(',', '', $request->Besar_Pinjaman_Minimal));

        /*modifikasi file request dari inputan form dengan hasil convert*/
        $request->merge(['Besar_Pinjaman_Maksimal' =>$pinjamanMax,
        'Besar_Pinjaman_Minimal'=> $pinjamanMin]);

        return($request);
    }
}
