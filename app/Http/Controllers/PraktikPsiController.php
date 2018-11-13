<?php

namespace App\Http\Controllers;

use App\PraktikPsi;
use Auth;
use Illuminate\Http\Request;
use Alert;

class PraktikPsiController extends Controller
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
        $data3['data3']=PraktikPsi::where('user_id', Auth::user()->id)->get();
        return view('personil.pengalaman.viewpengalaman.listpraktikpro', $data3);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('personil.pengalaman.formpengalaman.formbidangprofesi');
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
        for($i=0;$i<count($request->pemeriksaan);$i++){
            PraktikPsi::create([
                    'kode_praktik' => $request->kode_praktik[$i],
                    'user_id' => $user,
                    'pemeriksaan' => $request->pemeriksaan[$i],
                    'tindakan' => $request->tindakan[$i],
                    'tahunpelaksanaan' => $request->tahunpelaksanaan[$i],
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
        $data['data']=PraktikPsi::find($id);
        return view('personil.praktikprofesi.formubah', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->kode_praktik;
        PraktikPsi::find($id)->update(['pemeriksaan'=>$request->pemeriksaan]);
        PraktikPsi::find($id)->update(['tindakan'=>$request->tindakan]);
        PraktikPsi::find($id)->update(['tahunpelaksanaan'=>$request->tahunpelaksanaan]);
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
        PraktikPsi::find($id)->delete();
    }
}
