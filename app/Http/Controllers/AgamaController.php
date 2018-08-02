<?php

namespace App\Http\Controllers;

use App\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
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
        $data['data']=Agama::get();
        return view('admin.agama.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agama.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agama::create([
            'agama' => $request->agama,
                ]);
        return redirect()->route('agama.index')->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function show(Agama $agama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Agama::find($id);
        return view('admin.agama.formubah', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Agama::find($id)->update(['agama'=>$request->agama]);
        return redirect()->route('agama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=Agama::find($id)->value('id');
        Agama::find($id)->delete();
        return redirect()->route('agama.index')->with('message', 'Data berhasil di hapus');
    }
}
