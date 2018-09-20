<?php

namespace App\Http\Controllers;
use App\Personil;
use App\Agama;
use App\USer;
use Illuminate\Http\Request;
use Alert;
class PersonilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=Personil::get();
        return view('personil.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agama['agama']=Agama::get();
        return view('personil.form', $agama);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Personil::create([
            'user_id' => $request->user_id,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'suku_bangsa' => $request->suku_bangsa,
            'gol_darah' => $request->gol_darah,
            'alamat_sekarang' => $request->alamat_kantor,
            'telp_rumah' => $request->telp_rumah,
            'no_hp' => $request->no_hp,
            'tempat_kerja' => $request->tempat_kerja,
            'alamat_kantor' => $request->alamat_kantor,
            'alamat_tempat_praktik' => $request->alamat_tempat_praktik,
            'telp_kantor' => $request->telp_kantor,
                ]);
        Alert::success('Berhasil', 'Data Tersimpan');
        return redirect()->route('personil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Personil::find($id);
        return view("personil.detail", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Personil::find($id);
        $agama['agama']=Agama::get();
        return view('personil.formubah', $data, $agama);
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
        Personil::find($id)->update(['tempat_lahir'=>$request->tempat_lahir]);
        Personil::find($id)->update(['tgl_lahir'=>$request->tgl_lahir]);
        Personil::find($id)->update(['jenis_kelamin'=>$request->jenis_kelamin]);
        Personil::find($id)->update(['agama'=>$request->agama]);
        Personil::find($id)->update(['suku_bangsa'=>$request->suku_bangsa]);
        Personil::find($id)->update(['gol_darah'=>$request->gol_darah]);
        Personil::find($id)->update(['alamat_sekarang'=>$request->alamat_sekarang]);
        Personil::find($id)->update(['telp_rumah'=>$request->telp_rumah]);
        Personil::find($id)->update(['no_hp'=>$request->no_hp]);
        Personil::find($id)->update(['tempat_kerja'=>$request->tempat_kerja]);
        Personil::find($id)->update(['alamat_kantor'=>$request->alamat_kantor]);
        Personil::find($id)->update(['alamat_tempat_praktik'=>$request->alamat_tempat_praktik]);
        Alert::success('Berhasil', 'Data Diubah');
        return redirect()->route('personil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=Personil::find($id)->value('user_id');
        Personil::find($id)->delete();
        Alert::error('Berhasil', 'Data Terhapus');
        return redirect()->route('personil.index')->with('message', 'Data berhasil di hapus');
    }

    public function profil(Request $request){
        $id = $request->id;
        $cari = $request->get('profil_id');
        $data = User::where('id_anggota', $cari)->get();
        $data2 = Personil::where('user_id', $id)->get();
        $agama =Agama::get();
        return view('personil.profile.detail', compact('data','agama','data2'))->with('cari', $cari);
    }

    
}
