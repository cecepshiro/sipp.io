<?php

namespace App\Http\Controllers;

use App\PengembanganPro;
use Auth;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 

class PengembanganProController extends Controller
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
       
        $data2['data2']=PengembanganPro::where('user_id', Auth::user()->id)->get();
        return view('personil.pengalaman.viewpengalaman.listpengalamanpro', $data2);
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
        for($i=0;$i<count($request->kegiatan);$i++){
            PengembanganPro::create([
                    'kode_pro' => $request->kode_pro[$i],
                    'user_id' => $user,
                    'kegiatan' => $request->kegiatan[$i],
                    'tempat' => $request->tempat[$i],
                    'tahun' => $request->tahun[$i],
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
        $data['data']=PengembanganPro::find($id);
        return view('personil.pengembanganpro.formubah', $data);
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
        $id=$request->kode_pro;
        if(Input::hasFile('lampiran')){
            $file= input::file('lampiran');
                    $fileName = sha1($file->getClientOriginalName().time()).".".$file->getClientOriginalExtension();
                    $file->move(public_path().'/lampiran/',$fileName);
                    PengembanganPro::find($id)->update(['lampiran'=>$fileName]);
        }
        PengembanganPro::find($id)->update(['kegiatan'=>$request->kegiatan]);
        PengembanganPro::find($id)->update(['tempat'=>$request->tempat]);
        PengembanganPro::find($id)->update(['tahun'=>$request->tahun]);
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
        PengembanganPro::find($id)->delete();
    }
}
