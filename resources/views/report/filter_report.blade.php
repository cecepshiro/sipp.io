@extends('layouts.app2')
@section('content')
    <div id="wrapper">
    <!-- Navigasi Menu -->
    @include('layouts.navigasi')
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
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
                        <h4 class="page-title">Data Personel</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Laporan Personel</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!-- /.row -->
                <!-- .row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                    <div class="white-box">
                            <h3 class="box-title m-b-0"><b>Filter Laporan</b></h3>
                            <div class="row">
                            <form method="POST" action="{{ route('report.filter') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-lg-8">
                                    <div class="example">
                                        <p class="text-muted m-b-20">Tentukan tanggal yang akan difilter.</p>
                                        <div class="input-group" id="">
                                            <input type="date" class="form-control" name="mulai" required> <span class="input-group-addon bg-info b-0 text-white">Sampai</span>
                                            <input type="date" class="form-control" name="sampai" required> 
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                <br>
                                <p align="right">
                                    <input type="submit" class="btn btn-outline-success btn-md" value="Filter"> 
                                </p>                                      
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection