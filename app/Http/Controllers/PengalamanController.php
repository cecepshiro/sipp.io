<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengalaman;
use App\Pendidikan;
use App\Pekerjaan;
use App\User;
use App\BidangProfesi;
use App\PraktikPsi;
use App\Jenjang;
use App\PengembanganPro;
use App\BidangProfesiPersonil;
use Alert;
use Auth;
use DB;
class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        // $data['data']=Pengalaman::get();
        // return view('personil.pengalaman.list', $data);

        return redirect('pengalaman.create');
    }

    public function formpengalamanpers(){
        $bidang['bidang']=BidangProfesi::get();
        $jenjang['jenjang']=Jenjang::orderBy('jenjang','asc')->get();
        $data2['data2']=PengembanganPro::get();
        $timeline['timeline']=Pendidikan::get();
        return view('personil.pengalaman.form' ,$data2, $jenjang)
        ->with($bidang)
        ->with($timeline);

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
        $ccp['ccp']=$id;
        $pengembangan['pengembangan']=PengembanganPro::where('user_id', $id)->get();
        $praktik['praktik']=PraktikPsi::where('user_id',$id)->get();
        $pekerjaan['pekerjaan']=Pekerjaan::where('user_id', $id)->get();
        $pendidikan['pendidikan']=Pendidikan::where('user_id', $id)->get();
        $bidang['bidang']=BidangProfesiPersonil::where('user_id', $id)->get();
        return view('personil.pengalaman.detailpengalaman')
        ->with($pengembangan)
        ->with($praktik)
        ->with($pekerjaan)
        ->with($pendidikan)
        ->with($bidang)
        ->with($ccp);
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

    public static function kode_pendidikan($tambahan){
        $query = Pendidikan::select('RIGHT(data_pendidikan.kode_pendidikan,3) as kode', FALSE)->orderBy('kode_pendidikan','DESC')->limit(1)->count();
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + $tambahan + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
          $kode = 1+ $tambahan;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "PD".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
        //  print_r($kodeotomatis);
        return ($kodejadi);
    }

    public static function kode_pekerjaan($tambahan){
        $query = Pekerjaan::select('RIGHT(data_pekerjaan.kode_pekerjaan,3) as kode', FALSE)->orderBy('kode_pekerjaan','DESC')->limit(1)->count();
        
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + $tambahan + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
         $kode = 1+ $tambahan;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "PJ".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
        //  print_r($kodeotomatis);
        return ($kodejadi);
    }

    public static function kode_bidangprofesi_pers($tambahan){
        $query = BidangProfesiPersonil::select('RIGHT(data_bidangpropers.kode_bidangpropers,3) as kode', FALSE)->orderBy('kode_bidangpropers','DESC')->limit(1)->count();
        
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + $tambahan + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
         $kode = 1+ $tambahan;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "BP".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
        //  print_r($kodeotomatis);
        return ($kodejadi);
    }

    public static function kode_praktik($tambahan){
        $query = PraktikPsi::select('RIGHT(data_praktik.kode_praktik,3) as kode', FALSE)->orderBy('kode_praktik','DESC')->limit(1)->count();
        
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + $tambahan + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
         $kode = 1+ $tambahan;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "PK".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
        //  print_r($kodeotomatis);
        return ($kodejadi);
    }

    public static function kode_pengembanganpro($tambahan){
        $query = PengembanganPro::select('RIGHT(data_pengembangan_pro.kode_pro,3) as kode', FALSE)->orderBy('kode_pro','DESC')->limit(1)->count();
        
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + $tambahan + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
         $kode = 1+ $tambahan;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "PP".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
        //  print_r($kodeotomatis);
        return ($kodejadi);
    }

    public static function kode_bidangprofesi($tambahan){
        $query = BidangProfesi::select('RIGHT(data_bidangprofesi.kode_bidangprofesi,3) as kode', FALSE)->orderBy('kode_bidangprofesi','DESC')->limit(1)->count();
        
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + $tambahan + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
         $kode = 1+ $tambahan;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "BF".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
        //  print_r($kodeotomatis);
        return ($kodejadi);
    }

    public static function kode_jenjang($tambahan){
        $query = Jenjang::select('RIGHT(data_jenjang.kode_jenjang,3) as kode', FALSE)->orderBy('kode_jenjang','DESC')->limit(1)->count();
        
        if($query <> 0){      
         //jika kode ternyata sudah ada.      
         $data = $query;      
         $kode = intval($data) + $tambahan + 1;  
        //  dd($kode);  
        }
        else {      
         //jika kode belum ada      
         $kode = 1+ $tambahan;    
        }
         $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
         $kodejadi = "JN".$kodemax;    // hasilnya ODJ-9921-0001 dst.
         $kodeotomatis['kodeotomatis']=$kodejadi;
        //  print_r($kodeotomatis);
        return ($kodejadi);
    }


}
