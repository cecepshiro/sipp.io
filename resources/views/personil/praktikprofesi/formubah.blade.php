@extends('layouts.app2')

@section('content')
    <div id="wrapper">
     <!-- Navigasi Menu -->
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
                        <h4 class="page-title">Daftar Pengalaman</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Form Ubah Pengalaman</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--.row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Form Ubah Praktik Profesi Personil</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <form method="POST" class="form-horizontal" action="{{ route('praktik.update') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Kode Praktik Profesi</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" maxlenght="5"  placeholder="Masukkan Kode Praktik Profesi" readonly class="form-control" name="kode_praktik" value="{{ $data['kode_praktik'] }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Pemeriksaan</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" placeholder="Masukkan Pemeriksaan"  class="form-control" name="pemeriksaan" value="{{ $data['pemeriksaan'] }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Tindakan</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text"  placeholder="Masukkan Tindakan"  class="form-control" name="tindakan" value="{{ $data['tindakan'] }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Tahun Pelaksanaan</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" maxlenght="5"  placeholder="Masukkan Tahun Pelaksanaan" onkeypress="return isNumberKey(event)"  class="form-control" name="tahunpelaksanaan" value="{{ $data['tahunpelaksanaan'] }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9 text-right">
                                        <a href="{{ url('/pengalamanpers') }}" class="btn btn-outline-danger m-t-10">Batal</a>
                                        <button type="submit" class="btn btn-outline-success m-t-10">Ubah Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            
@endsection