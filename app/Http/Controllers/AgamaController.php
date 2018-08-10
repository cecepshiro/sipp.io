<?php

namespace App\Http\Controllers;

use App\Agama;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Excel;
use Alert;
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
        Alert::success('Berhasil', 'Data Tersimpan');
        return redirect()->route('agama.index');
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
        Alert::success('Berhasil', 'Data Diubah');
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
        Alert::error('Berhasil', 'Data Terhapus');
        return redirect()->route('agama.index')->with('message', 'Data berhasil di hapus');
    }

    public function export2() 
    {
        //return Excel::download(new UsersExport, 'users.xlsx');
        // $data = DB::table('users')->get()->toArray();
        // $data_array[] = array('#', 'Nama', 'ID Anggota', 'Akses', 'Password','Token','Dibuat','Diubah');
        // foreach($data as $d)
        // {
        //     $data_array[] = array(
        //         '#'  => $d->id,
        //         'Nama'   => $d->name,
        //         'ID Anggota'    => $d->id_anggota,
        //         'Akses'  => $d->akses,
        //         'Password'   => $d->password,
        //         'Token'   => $d->remember_token,
        //         'Dibuat'   => $d->created_at,
        //         'Diubah'   => $d->updated_at
        //     );
        // }
        //  Excel::download('User Data', function($excel) use ($data_array){
        //      $excel->setTitle('User Data');
        //      $excel->sheet('User Data', function($sheet) use($data_array){
        //          $sheet->fromArray($data_array, null, 'A1', false, false);
        //      });
        //  })->download('xlsx');
        // dd($sheet);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
