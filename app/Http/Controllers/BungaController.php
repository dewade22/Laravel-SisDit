<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use App\Models\BungaModel;
use PhpParser\Node\Stmt\Else_;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getRoute(){
        return 'Bunga';
    }

    protected function Validator(array $data){
        return Validator::make($data, [
            'Bunga_Kredit' => 'required|regex:/[+-]?([0-9]*[.])?[0-9]+/',
            'Jenis_Bunga' => 'required|string',
        ]);
    }

    public function index(Request $request)
    {
        //
        if($request->ajax()){
            $data = BungaModel::all();
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }
        return view('Bunga.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $bunga = new BungaModel();
        $bunga->route = $this->getRoute().'.store';
        $bunga->pageTitle = 'Bunga Create';
        $bunga->pageType = 'create';
        return view('Bunga.form', ['bunga' => $bunga]);
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
        $datas = $this->convertPersen($request);
        $newBunga = $datas->all();
        //dd($newBunga);
        $this->Validator($newBunga)->validate();
        try{
            $add = BungaModel::create($newBunga);
            if($add){
                return redirect()->route('Bunga.index')->with('success', Config::get('const.SUCCESS_CREATE_MESSAGE'));
            }
            else{
                return redirect()->route('Bunga.index')->with('error', Config::get('const.FAILED_CREATE_MESSAGE'));
            }
        }
        catch (Exception $ex){
            return redirect()->route('Bunga.index')->with('error', Config::get('const.FAILED_CREATE_MESSAGE'));
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
        $bunga = BungaModel::findorFail($id);
        $bunga->Bunga_Kredit = $bunga->Bunga_Kredit*100;
        $bunga->route = $this->getRoute().'.update';
        $bunga->pageTitle = 'Bunga Edit';
        $bunga->pageType = 'edit';
        return view('Bunga.form', ['bunga' => $bunga]);
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
        $datas = $this->convertPersen($request);
        $newBunga = $datas->all();
       // dd($newBunga);
        $this->Validator($newBunga)->validate();
        try{
           $currentBunga = BungaModel::findorFail($id);
            if($currentBunga){
                $currentBunga->update($newBunga);
                return redirect()->route('Bunga.index')->with('success', Config::get('const.SUCCESS_CREATE_MESSAGE'));
            }else{
                return redirect()->route('Bunga.index')->with('error', Config::get('const.FAILED_CREATE_MESSAGE'));
            }
        }
        catch (Exception $ex){
            return redirect()->route('Bunga.index')->with('error', Config::get('const.FAILED_CREATE_MESSAGE'));
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

    public function convertPersen($request){
        $bunga = ($request->Bunga_Kredit / 100);
        $request->merge(['Bunga_Kredit'=>$bunga]);
        return ($request);
    }
}
