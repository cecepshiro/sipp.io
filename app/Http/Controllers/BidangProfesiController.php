<?php

namespace App\Http\Controllers;

use App\BidangProfesi;
use Illuminate\Http\Request;

class BidangProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=BidangProfesi::get();
        return view('admin.bidangprofesi.list', $data);
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
        foreach($request->input('bidangprofesi') as $key => $value) {
            BidangProfesi::create([
                'bidangprofesi'=>$value
                ]);
        }

        return redirect()->route('bidang.index')->with('message', 'Data berhasil diinput');

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
        return view("admin.bidangprofesi.list", $data);
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
        // Personil::find($id)->update(['id_pendidikan'=>$request->id_pendidikan]);
        // Personil::find($id)->update(['id_pengalaman'=>$request->id_pengalaman]);
        // Personil::find($id)->update(['id_bidang_profesi'=>$request->id_bidang_profesi]);
        // Personil::find($id)->update(['id_profesional'=>$request->id_profesional]);
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
        return redirect()->route('bidang.index')->with('message', 'Data berhasil di hapus');
    }
}
