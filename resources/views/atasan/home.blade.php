@extends('layouts.app2')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <div id="wrapper">
        @include('layouts.navigasi')
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <!-- Tampilan Menu -->

                    @include('layouts.menu')


                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard Kepala Dinas</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard Kepala Dinas</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                        <?php
                            $cek=DB::table('data_personil')->select('user_id')->where('user_id', Auth::user()->id)->value('user_id');
                        ?>
                        @if($cek!=null)
                            <h3 class="page-title">Selamat Datang {{ Auth::user()->name }}.</h3>
                        @else
                            <h3 class="page-title">Selamat Datang {{ Auth::user()->name }}.</h3>
                            <h3 class="box-title">Silahkan Isi Telebih Dahulu Data Diri Anda Di Menu Profil.</h3> </div>
                        @endif
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                    <?php
                        $new=DB::table('data_personil')->select(DB::raw('count(*) as baru'))->value('id_anggota');
                        $man=DB::table('data_personil')->select(DB::raw('count(*) as laki'))->where('jenis_kelamin', 'L')->value('id_anggota');
                        $woman=DB::table('data_personil')->select(DB::raw('count(*) as perempuan'))->where('jenis_kelamin', 'P')->value('id_anggota');
                        $sum=DB::table('data_personil')->select(DB::raw('count(*) as total'))->value('id_anggota');
                    ?>
                        <div class="row row-in">
                            <!-- /.col -->
                            <!--col -->
                            <!-- <div class="col-lg-3 col-sm-12">
                                <div class="white-box">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                            <h5 class="text-muted vb">BARU</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-danger">{{ $new }}</h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /.col -->
                            <!--col -->
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">PERSONEL LAKI - LAKI</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-megna">{{ $man }}</h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!--col -->
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">PERSONEL PEREMPUAN</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-primary">{{ $woman }}</h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!--col -->
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">TOTAL PERSONEL</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-success">{{ $sum }}</h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Statistik Personel</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>Laki - laki</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #cbb2ae;"></i>Perempuan</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #85b4d0;"></i>Total</h5> </li>
                            </ul>
                            <div id="morris-area-chart" style="height: 240px;"></div>
                        </div>
                    </div> -->
                </div>
                <!--row -->                
                <!--row -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">???</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #dadada;"></i>Site A View</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #aec9cb;"></i>Site B View</h5> </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box">
                            <h4 class="page-title">Statistik Jenjang Pendidikan Personel<h4>
                            <canvas id="grafikBatang" width="80%" height="50%"></canvas>
                    </div>
                </div>
                <!-- <?php 
                    //  $rentang = DB::table('data_pengembangan')->select(DB::RAW('count(data_pengembangan_pro.user_id), user_id'))->from('data_pengembangan_pro')->groupBy('user_id')->havingRaw('count(data_pengembangan_pro.user_id) <?', [3])->get();                
                    // echo count($rentang);
                ?> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box">
                            <h4 class="page-title">Statistik Pengalaman Pengembangan Profesional Personel<h4>
                            <canvas id="grafikBatang2" width="80%" height="50%"></canvas>
                    </div>
                </div>

<script>
var ctx = document.getElementById("grafikBatang").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Sarjana S1", "Sarjana S2", "Sarjana S3"],
        datasets: [{
            label: '# Jumlah Personel',
            data: [
                <?php 
				  echo $s1 = DB::table('data_pendidikan')->join('data_jenjang','data_pendidikan.kode_jenjang','=','data_jenjang.kode_jenjang')->select('jenjang')->where('jenjang','LIKE','Sarjana S1')->count();
                ?>,
                <?php 
				  echo $s2 = DB::table('data_pendidikan')->join('data_jenjang','data_pendidikan.kode_jenjang','=','data_jenjang.kode_jenjang')->select('jenjang')->where('jenjang','LIKE','Sarjana S2')->count();
                ?>,
                <?php 
				  echo $s3 = DB::table('data_pendidikan')->join('data_jenjang','data_pendidikan.kode_jenjang','=','data_jenjang.kode_jenjang')->select('jenjang')->where('jenjang','LIKE','Sarjana S3')->count();
                ?>,
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>     

<script>
var ctx = document.getElementById("grafikBatang2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Pengalaman Pers < = 3", "Pengalaman Pers < = 6", "Pengalaman Pers < = 9", "Pengalaman Pers > 9"],
        datasets: [{
            label: '# Jumlah Personel',
            data: [
                <?php 
                    $rentang = DB::table('data_pengembangan')->select(DB::RAW('count(data_pengembangan_pro.user_id), user_id'))->from('data_pengembangan_pro')->groupBy('user_id')->havingRaw('count(data_pengembangan_pro.user_id) <?', [3])->get();                
                    echo count($rentang);
                ?>,
                <?php 
                     $rentang = DB::table('data_pengembangan')->select(DB::RAW('count(data_pengembangan_pro.user_id), user_id'))->from('data_pengembangan_pro')->groupBy('user_id')->havingRaw('count(data_pengembangan_pro.user_id) <?', [6])->get();                
                    echo count($rentang);
                ?>,
                <?php 
                     $rentang = DB::table('data_pengembangan')->select(DB::RAW('count(data_pengembangan_pro.user_id), user_id'))->from('data_pengembangan_pro')->groupBy('user_id')->havingRaw('count(data_pengembangan_pro.user_id) <?', [9])->get();                
                    echo count($rentang);
                ?>,
                <?php 
                     $rentang = DB::table('data_pengembangan')->select(DB::RAW('count(data_pengembangan_pro.user_id), user_id'))->from('data_pengembangan_pro')->groupBy('user_id')->havingRaw('count(data_pengembangan_pro.user_id) >?', [9])->get();                
                    echo count($rentang);
                ?>,
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>     
@endsection