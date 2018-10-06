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

class ReportController extends Controller
{
    public function report_pers()
    {
        // $getkodepers['getkodepers']=User::select('id_')where('id_anggota','3411151021')->get();
        $id=Auth::user()->id;
        $datadiri1['datadiri1']=User::find($id);
        foreach($datadiri1 as $row){
            $nama=$row->name;
        }
        return view('report.report_pers')->with($nama);
    }
}

