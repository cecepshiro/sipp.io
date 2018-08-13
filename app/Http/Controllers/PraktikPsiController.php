<?php

namespace App\Http\Controllers;

use App\PraktikPsi;
use Auth;
use Illuminate\Http\Request;

class PraktikPsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }
}