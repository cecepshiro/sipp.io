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

class ReportController extends Controller
{
    public function report_pers($id)
    {
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
        ->with($pekerjaan);
    }
}

