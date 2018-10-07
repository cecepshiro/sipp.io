<?php

namespace App\Http\Controllers;

use App\Jenjang;
use Illuminate\Http\Request;
use Alert;
class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('cekstatusadmin');
    }
    public function index()
    {
        $data['data']=Jenjang::get();
        return view('admin.jenjang.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.jenjang.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $query = Jenjang::select('RIGHT(data_jenjang.kode_jenjang,3) as kode', FALSE)->orderBy('kode_jenjang','DESC')->limit(1)->count();
        // if($query <> 0){      
        //  //jika kode ternyata sudah ada.      
        //  $data = $query;      
        //  $kode = intval($data) + 1;  
        // //  dd($kode);  
        // }
        // else {      
        //  //jika kode belum ada      
        //   $kode = 1;    
        // }
        //  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        //  $kodejadi = "JN".$kodemax;    // hasilnya ODJ-9921-0001 dst.
        //  $kodeotomatis['kodeotomatis']=$kodejadi;
        //  dd($kodeotomatis);
        foreach($request->input('jenjang') as $key => $value) {
            Jenjang::create([
                'jenjang'=>$value,
                'keterangan'=>$request->keterangan
                ]);
        }
        Alert::success('Berhasil', 'Data Tersimpan');
        return redirect()->route('jenjang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Jenjang::find($id);
        return view("admin.jenjang.list", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Jenjang::find($id);
        return view('admin.jenjang.formubah', $data);
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
        Jenjang::find($id)->update(['jenjang'=>$request->jenjang]);
        // Personil::find($id)->update(['id_pendidikan'=>$request->id_pendidikan]);
        // Personil::find($id)->update(['id_pengalaman'=>$request->id_pengalaman]);
        // Personil::find($id)->update(['id_bidang_profesi'=>$request->id_bidang_profesi]);
        // Personil::find($id)->update(['id_profesional'=>$request->id_profesional]);
        Alert::success('Berhasil', 'Data Diubah');
        return redirect()->route('jenjang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $temp=Jenjang::find($id)->value('kode_jenjang');
        Jenjang::find($id)->delete();
        // Alert::error('Berhasil', 'Data Terhapus');
        // return redirect()->route('jenjang.index')->with('message', 'Data berhasil di hapus');
    }

    public function buat_kode(){
        $query = Jenjang::select('RIGHT(data_jenjang.kode_jenjang,3) as kode', FALSE)->orderBy('kode_jenjang','DESC')->limit(1)->count();
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
          $kode = 1;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "123".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
         dd($kodeotomatis);
    }
}
