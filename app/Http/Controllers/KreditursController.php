<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KrediturModel;
use Exception;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;

use function GuzzleHttp\Promise\exception_for;

class KreditursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data){
        return Validator::make($data, [
            'Nama_Kreditur' => 'required|string|max:50',
            'Tempat_Lahir' => 'required|string|max:50',
            'Tanggal_Lahir' => 'required|date',
            'Jenis_Kelamin' => 'required|string|max:1',
            'Pekerjaan' => 'required|max:50',
            'Telepon' => 'max:15',
            'Alamat' => 'required|max:255',
            'No_KTP' => 'required|max:15',
        ]);
    }
    public function index(Request $request)
    {
        //

        if ($request->ajax()) {
            $data = DB::table('kreditur');
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }


        return view('Kreditur.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //$kreditur = DB::table('kreditur')->where('Id_Kreditur', $id)->first();
        $kreditur = KrediturModel::findOrFail($id);
        //dd($kreditur);
        return view('Kreditur.edit', ['kreditur'=>$kreditur]);
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
        //dd($request);
        $newKreditur = $request->all();
        $this->validator($newKreditur)->validate();
        try{
            $currentKreditur = KrediturModel::findOrFail($id);
            if($currentKreditur){
                $currentKreditur->update($newKreditur);
                return redirect()->route('Krediturs.index')->with('success', Config::get('const.SUCCESS_UPDATE_MESSAGE'));
            }
        }
        catch(Exception $ex){
            return redirect()->route('Krediturs.index')->with('error', Config::get('const.FAILED_UPDATE_MESSAGE'));
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
}
