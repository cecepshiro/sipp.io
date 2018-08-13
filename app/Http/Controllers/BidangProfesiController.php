<?php

namespace App\Http\Controllers;

use App\BidangProfesi;
use App\BidangProfesiPersonil;
use Illuminate\Http\Request;
use Alert;
use Auth;
class BidangProfesiController extends Controller
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
        $data5['data5']=BidangProfesiPersonil::where('user_id', Auth::user()->id)->get();
        return view('personil.pengalaman.viewpengalaman.listbidangpropers', $data5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personil.bidangprofesi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->input('bidangprofesi') as $key => $value) {
            BidangProfesi::create([
                'bidangprofesi'=>$value
                ]);
        }
        Alert::success('Berhasil', 'Data Tersimpan');
        return redirect()->route('bidang.index');

    }

    public function simpan(Request $request)
    {
        ini_set('memory_limit','125M');
        $user = Auth::user()->id;
        for($i=0;$i<count($request->kode_bidangprofesi);$i++){
            BidangProfesiPersonil::create([
                    'user_id' => $user,
                    'kode_bidangprofesi' => $request->kode_bidangprofesi[$i]
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
        $data['data']=BidangProfesi::find($id);
        return view("admin.masterbidangprofesi.list", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=BidangProfesi::find($id);
        return view('admin.masterbidangprofesi.formubah', $data);
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
        BidangProfesi::find($id)->update(['bidangprofesi'=>$request->bidangprofesi]);
        // Personil::find($id)->update(['id_pendidikan'=>$request->id_pendidikan]);
        // Personil::find($id)->update(['id_pengalaman'=>$request->id_pengalaman]);
        // Personil::find($id)->update(['id_bidang_profesi'=>$request->id_bidang_profesi]);
        // Personil::find($id)->update(['id_profesional'=>$request->id_profesional]);
        Alert::success('Berhasil', 'Data Diubah');
        return redirect()->route('bidang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=BidangProfesi::find($id)->value('kode_bidangprofesi');
        BidangProfesi::find($id)->delete();
        Alert::error('Berhasil', 'Data Terhapus');
        return redirect()->route('bidang.index')->with('message', 'Data berhasil di hapus');
    }
}
