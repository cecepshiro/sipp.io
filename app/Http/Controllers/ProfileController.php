<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personil;
use App\User;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input; 
use Alert;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return redirect('/');


        // $id = $request->id;
        // $tmp=DB::table('data_personil')->select('kode_personil')->where('user_id', $id)->value('kode_personil');
        // $cari = $request->get('id_anggota');
        // $data = User::find($cari);
        // $data2 = Personil::find($tmp);
        // return view('personil.profile.detail', compact('data','data2'))->with('cari', $cari);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=User::where('id_anggota',$id)->get();
        return view("personil.profile.detail", $data);
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
        return view('personil.profile.formubah', $data);
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
        if(Input::hasFile('foto')){
            $file= input::file('foto');
                if($file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg"){
                    $fileName = sha1($file->getClientOriginalName().time()).".".$file->getClientOriginalExtension();
                    $file->move(public_path().'/image/',$fileName);
                    Personil::find($id)->update(['foto'=>$fileName]);
                }else{
                    return redirect()->back()->with('message', 'File yang di upload harus berektensi .png , .jpg dan .jpeg');
                }
        }
        Alert::success('Berhasil', 'Data Diubah');
        return Redirect::to('/');
    }

    public function updateyangudahdaftar(Request $request)
    {
        $id=$request->validasi_kode_personil;
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
        Personil::find($id)->update(['telp_kantor'=>$request->telp_kantor]);

        Alert::success('Berhasil', 'Data Diubah');
        return Redirect::to('/');
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

    public function ubahprofil(Request $request){
        $id = $request->id;
        $tmp=DB::table('data_personil')->select('kode_personil')->where('user_id', $id)->value('kode_personil');
        $cari = $request->get('profil_id');
        $data = User::find($cari);
        $data2 = Personil::find($tmp);
        return view('personil.profile.formubah', compact('data','data2'))->with('cari', $cari);
    }

    public function profil(Request $request){
        $id = $request->id;
        $tmp=DB::table('data_personil')->select('kode_personil')->where('user_id', $id)->value('kode_personil');
        $cari = $request->get('profil_id');
        $data = User::find($cari);
        $data2 = Personil::find($tmp);
        return view('personil.profile.detail', compact('data','data2'))->with('cari', $cari);
    }
}
