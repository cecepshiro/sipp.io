<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personil;
use App\User;
use Illuminate\Support\Facades\Input; 

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view("personil.profile.detail", $data);
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
        if(Input::hasFile('foto')){
            $file= input::file('foto');
                if($file->getClientOriginalExtension()=="png" || $file->getClientOriginalExtension()=="jpg" || $file->getClientOriginalExtension()=="jpeg"){
                    $fileName = sha1($file->getClientOriginalName().time()).".".$file->getClientOriginalExtension();
                    $file->move(public_path().'/image/',$fileName);
                    Personil::find($id)->update(['foto'=>$fileName]);
                }else{
                    return redirect()->back()->with('message', 'File yang di upload harus berektensi .png , .jpg dan .jpeg');
                }
        }
        return redirect()->route('personil.index');
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
