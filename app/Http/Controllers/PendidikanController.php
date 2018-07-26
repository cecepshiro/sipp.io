<?php

namespace App\Http\Controllers;

use App\Jenjang;
use App\Pendidikan;
use Illuminate\Http\Request;

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
        return view('admin.pendidikan.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenjang['jenjang']=Jenjang::orderBy('jenjang', 'asc')->get();
        return view('admin.pendidikan.form', $jenjang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendidikan::create([
            'kode_pendidikan' => $request->user_id,
            'kode_jenjang' => $request->tempat_lahir,
            'nama_pt' => $request->tgl_lahir,
            'kota' => $request->jenis_kelamin,
            'bidang_ilmu' => $request->kode_agama,
            'tahun_lulus' => $request->alamat_kantor,
                ]);
        return redirect()->route('pendidikan.index')->with('message', 'Data berhasil diinput');
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
        return view("admin.pendidikan.detail", $data);
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
        return view('admin.pendidikan.formubah', $data, $jenjang);
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
        return redirect()->route('pendidikan.index')->with('message', 'Data berhasil di hapus');
    }
}
