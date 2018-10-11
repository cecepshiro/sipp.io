<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use Auth;
use Alert;
use App\User;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data4['data4']=Pekerjaan::where('user_id', Auth::user()->id)->get();
        return view('personil.pengalaman.viewpengalaman.listpekerjaan', $data4);
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
        for($i=0;$i<count($request->nama_lembaga);$i++){
            Pekerjaan::create([
                    'kode_pekerjaan' => $request->kode_pekerjaan[$i],
                    'user_id' => $user,
                    'nama_lembaga' => $request->nama_lembaga[$i],
                    'alamat' => $request->alamat[$i],
                    'no_telp' => $request->no_telp[$i],
                    'pekerjaan' => $request->pekerjaan[$i],
                    'dari' => $request->dari[$i],
                    'sampai' => $request->sampai[$i],
                ]);
        }
        // Alert::success('Berhasil', 'Data Tersimpan');
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
        //
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
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pekerjaan::find($id)->delete();
    }


}
