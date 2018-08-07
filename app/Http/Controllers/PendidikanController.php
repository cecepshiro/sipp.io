<?php

namespace App\Http\Controllers;

use App\Jenjang;
use App\Pendidikan;
use Illuminate\Http\Request;
use Auth;
use Alert;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=Pendidikan::get();
        return view('personil.pendidikan.list', $data);
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
        ini_set('memory_limit','125M');
        $user = Auth::user()->id;
        for($i=0;$i<count($request->kode_jenjang);$i++){
            Pendidikan::create([
                    'user_id' => $user,
                    'kode_jenjang' => $request->kode_jenjang[$i],
                    'nama_pt' => $request->nama_pt[$i],
                    'kota' => $request->kota[$i],
                    'bidang_ilmu' => $request->bidang_ilmu[$i],
                    'tahun_lulus' => $request->tahun_lulus[$i],
                ]);
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
        $data['data']=Pendidikan::find($id);
        return view("personil.pendidikan.detail", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Pendidikan::find($id);
        $jenjang['jenjang']=Jenjang::get();
        return view('personil.pendidikan.formubah', $data, $jenjang);
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
        Pendidikan::find($id)->update(['kode_jenjang'=>$request->kode_jenjang]);
        Pendidikan::find($id)->update(['nama_pt'=>$request->nama_pt]);
        Pendidikan::find($id)->update(['kota'=>$request->kota]);
        Pendidikan::find($id)->update(['bidang_ilmu '=>$request->bidang_ilmu]);
        Pendidikan::find($id)->update(['tahun_lulus'=>$request->tahun_lulus]);
        Alert::success('Berhasil', 'Data Diubah');
        return redirect()->route('pendidikan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=Pendidikan::find($id)->value('kode_pendidikan');
        Pendidikan::find($id)->delete();
        Alert::error('Berhasil', 'Data Terhapus');
        return redirect('pendidikan');
    }
}
