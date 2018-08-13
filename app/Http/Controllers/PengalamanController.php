<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengalaman;
use App\User;
use App\BidangProfesi;
use App\Jenjang;
use App\PengembanganPro;
use App\BidangProfesiPersonil;
use Alert;
class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data['data']=Pengalaman::get();
        return view('personil.pengalaman.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masterbidang['masterbidang']=BidangProfesi::get();
        $jenjang['jenjang']=Jenjang::orderBy('jenjang','asc')->get();
        $data2['data2']=PengembanganPro::get();
        return view('personil.pengalaman.form' ,$data2, $jenjang)->with($masterbidang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('personil.pengalaman.list', $data);
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
