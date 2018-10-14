@extends('layouts.app2')

@section('content')
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
                        <h4 class="page-title">Dashboard Admin</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard Admin</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="page-title">Selamat Datang {{ Auth::user()->name }}.</h3>
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
                            <div class="col-lg-3 col-sm-12">
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
                            </div>
                            <!-- /.col -->
                            <!--col -->
                            <div class="col-lg-3 col-sm-12">
                                <div class="white-box">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                            <h5 class="text-muted vb">LAKI - LAKI</h5> </div>
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
                                            <h5 class="text-muted vb">PEREMPUAN</h5> </div>
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
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe016;"></i>
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
                        </div>  -->
                    </div>
                </div>
                <!--row -->                
                <!--row -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Statistik Personel</h3>
                            <canvas id="speedChart" width="600" height="400"></canvas>
                        </div>
                    </div>
                </div>
                </div> -->
                
@endsection

<script>
var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var speedData = {
  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
  datasets: [{
    label: "Car Speed (mph)",
    data: [0, 59, 75, 20, 20, 55, 40],
  }]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});
</script>