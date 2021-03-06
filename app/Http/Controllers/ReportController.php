<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PraktikPsi;
use App\PengembanganPro;
use App\Pendidikan;
use App\Pekerjaan;
use App\Jenjang;
use App\BidangProfesiPersonil;
use App\Personil;
use Auth;
use DB;
use DateTime;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function report_pers($id)
    {
        $ccp['ccp']=$id;
        $datadiri['datadiri'] = DB::table('users')
        ->join('data_personil', 'users.id', '=', 'data_personil.user_id')
        ->select('users.*', 'data_personil.*')
        ->where('id', $id)
        ->first();

        $pendidikan['pendidikan']=DB::table('data_pendidikan')
        ->select('data_pendidikan.*')
        ->where('user_id', $id)
        ->get();

        $bidangpropers['bidangpropers']=DB::table('data_bidangpropers')
        ->select('data_bidangpropers.*')
        ->where('user_id', $id)
        ->get();

        $pengembanganpro['pengembanganpro']=DB::table('data_pengembangan_pro')
        ->select('data_pengembangan_pro.*')
        ->where('user_id', $id)
        ->get();

        $praktik['praktik']=DB::table('data_praktik')
        ->select('data_praktik.*')
        ->where('user_id', $id)
        ->get();

        $pekerjaan['pekerjaan']=DB::table('data_pekerjaan')
        ->select('data_pekerjaan.*')
        ->where('user_id', $id)
        ->get();

        return view('report.report_pers')
        ->with($datadiri)
        ->with($pendidikan)
        ->with($bidangpropers)
        ->with($pengembanganpro)
        ->with($praktik)
        ->with($pekerjaan)
        ->with($ccp);
    }

    public function report_anggota()
    {
        $start = new DateTime($request->mulai);
        $mulai = $start->format('Y-m-d');
        $stop = new DateTime($request->sampai);
        $selesai = $stop->format('Y-m-d');
        $data['data']=Personil::whereBetween('created_at', [$start, $stop])->get();
        return view('report.report_anggota')->with($data);

    }

    public function index_report()
    {
        return view('report.filter_report');

    }

    public function filter_report(Request $request){
        $tmp1=$request->mulai;
        $tmp2=$request->sampai;
        $start = new DateTime($tmp1);
        $mulai = $start->format('Y-m-d');
        $stop = new DateTime($tmp2);
        $selesai = $stop->format('Y-m-d');
        $data['data']=Personil::whereBetween('created_at', [$start, $stop])->get();
        return view('report.report_anggota')->with($data);
        //print_r($selesai);
    }

    public function lampiran_pendidikan($id){
        $data=Pendidikan::find($id);
        $pathToFile='/lampiran'.'/'.$data->lampiran;
        return response()->download(public_path($pathToFile));
    }
    public function lampiran_pekerjaan($id){
        $data=Pekerjaan::find($id);
        $pathToFile='/lampiran'.'/'.$data->lampiran;
        return response()->download(public_path($pathToFile));
    }
    public function lampiran_bidangprofesi($id){
        $data=BidangProfesiPersonil::find($id);
        $pathToFile='/lampiran'.'/'.$data->lampiran;
        return response()->download(public_path($pathToFile));
    }
    public function lampiran_praktik($id){
        $data=PraktikPsi::find($id);
        $pathToFile='/lampiran'.'/'.$data->lampiran;
        return response()->download(public_path($pathToFile));
    }
    public function lampiran_pro($id){
        $data=PengembanganPro::find($id);
        $pathToFile='/lampiran'.'/'.$data->lampiran;
        return response()->download(public_path($pathToFile));
    }
}

