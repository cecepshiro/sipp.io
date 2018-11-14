<?php

namespace App\Http\Controllers;

use App\BidangProfesi;
use App\BidangProfesiPersonil;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Input; 
use Auth;
class BidangProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data5['data5']=BidangProfesiPersonil::where('user_id', Auth::user()->id)->get();
        return view('personil.pengalaman.viewpengalaman.listbidangpropers', $data5);
    }

    public function listbidang()
    {
        $bidangprofesi['bidangprofesi']=BidangProfesi::get();
        return view('admin.bidangprofesi.list', $bidangprofesi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bidangprofesi.form');
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
        for($i=0;$i<count($request->bidangprofesi);$i++){
            BidangProfesi::create([
                    'kode_bidangprofesi' => $request->kode_bidangprofesi[$i],
                    'bidangprofesi' => $request->bidangprofesi[$i],
                ]);
        }
        // Alert::success('Berhasil', 'Data Tersimpan');
        // return redirect('masterbidang');

    }

    public function simpan(Request $request)
    {
        ini_set('memory_limit','125M');
        $user = Auth::user()->id;
        for($i=0;$i<count($request->kode_bidangprofesi);$i++){
            BidangProfesiPersonil::create([
                    'kode_bidangpropers' => $request->kode_bidangpropers[$i],
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
        $data=BidangProfesi::find($id);
        return view('admin.bidangprofesi.list', $data);
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
        return view('admin.bidangprofesi.formubah', $data);
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
        Alert::success('Berhasil', 'Data Diubah');
        return redirect('masterbidang');
    }

    public function editpers($id)
    {
        $data['data']=BidangProfesiPersonil::find($id);
        $bidang['bidang']=BidangProfesi::get();
        return view('personil.bidangprofesi.formubah', $data, $bidang);
    }

    public function updatepers(Request $request)
    {
        $id=$request->kode_bidangpropers;
        if(Input::hasFile('lampiran')){
            $file= input::file('lampiran');
                    $fileName = sha1($file->getClientOriginalName().time()).".".$file->getClientOriginalExtension();
                    $file->move(public_path().'/lampiran/',$fileName);
                    BidangProfesiPersonil::find($id)->update(['lampiran'=>$fileName]);
        }
        BidangProfesiPersonil::find($id)->update(['kode_bidangprofesi'=>$request->kode_bidangprofesi]);
        Alert::success('Berhasil', 'Data Diubah');
        return redirect('/pengalamanpers');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BidangProfesiPersonil::find($id)->delete();
    }

    public function hapusmasterbidang($id)
    {
        BidangProfesi::find($id)->delete();
    }
}
