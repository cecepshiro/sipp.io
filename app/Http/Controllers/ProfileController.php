<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personil;
use App\User;
use App\Agama;
use Illuminate\Support\Facades\Input; 

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
            'kode_agama' => $request->kode_agama,
            'alamat_sekarang' => $request->alamat_kantor,
            'telp_rumah' => $request->telp_rumah,
            'no_hp' => $request->no_hp,
            'tempat_kerja' => $request->tempat_kerja,
            'alamat_kantor' => $request->alamat_kantor,
            'alamat_tempat_praktik' => $request->alamat_tempat_praktik,
            'telp_kantor' => $request->telp_kantor,
            // 'id_pendidikan' => $request->id_pendidikan,
            // 'id_pengalaman' => $request->id_pengalaman,
            // 'id_bidang_profesi' => $request->id_bidang_profesi,
            // 'id_profesional' => $request->id_profesional,
                ]);
        return redirect()->route('personil.index')->with('message', 'Data berhasil diinput');
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
        $agama['agama']=Agama::get();
        return view('personil.profile.formubah', $data, $agama);
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
        //
    }

    public function ubahprofil(Request $request){
        $id = $request->id;
        $cari = $request->get('profil_id');
        $data = User::where('id_anggota', $cari)->get();
        $data2 = Personil::where('user_id', $id)->get();
        $agama =Agama::get();
        return view('personil.profile.formubah', compact('data','agama','data2'))->with('cari', $cari);
    }
}
