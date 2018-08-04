@extends('layouts.app2') @section('content')
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
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
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
                    <h4 class="page-title">Data Registrasi</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">List Personel</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <!--.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <form method="POST" class="form-horizontal" action="{{ route('pendidikan.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">NRP </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="id_anggota"> 
                                        <input id="" type="text" placeholder="Masukkan NRP" class="form-control{{ $errors->has('id_anggota') ? ' is-invalid' : '' }}"
                                            name="" value="{{ Auth::user()->id_anggota }}" readonly required>
                                        <div class="input-group-addon">
                                            <i class="ti-user"></i>
                                        </div>
                                        @if ($errors->has('id_anggota'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_anggota') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputname" class="col-sm-3 control-label">Jenjang*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <select id="kode_jenjang" class="form-control{{ $errors->has('kode_jenjang') ? ' is-invalid' : '' }}" name="kode_jenjang" required autofocus>
                                            <option>Pilih Jenjang Pendidikan</option>
                                            @foreach($jenjang as $j)
                                            <option value="{{ $j->kode_jenjang }}">{{ $j->jenjang }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-addon">
                                            <i class="ti-location-arrow"></i>
                                        </div>
                                        @if ($errors->has('kode_jenjang'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('kode_jenjang') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Nama Perguruan Tinggi </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="nama_pt" type="text" placeholder="Masukkan Nama Perguruan Tinggi" class="form-control{{ $errors->has('nama_pt') ? ' is-invalid' : '' }}"
                                            name="nama_pt" value="{{ old('nama_pt') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-bookmark"></i>
                                        </div>
                                        @if ($errors->has('nama_pt'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama_pt') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Kota </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="kota" type="text" placeholder="Masukkan Nama Kota" class="form-control{{ $errors->has('kota') ? ' is-invalid' : '' }}"
                                            name="kota" value="{{ old('kota') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-flag"></i>
                                        </div>
                                        @if ($errors->has('kota'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('kota') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Bidang Ilmu </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="bidang_ilmu" type="text" placeholder="Masukkan Bidang Ilmu" class="form-control{{ $errors->has('bidang_ilmu') ? ' is-invalid' : '' }}"
                                            name="bidang_ilmu" value="{{ old('bidang_ilmu') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-bookmark-alt"></i>
                                        </div>
                                        @if ($errors->has('bidang_ilmu'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('bidang_ilmu') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Tahun Lulus </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="tahun_lulus" type="text" placeholder="Masukkan Tahun Lulus" onkeydown="validateNumber(event);" maxlength="4" class="form-control{{ $errors->has('tahun_lulus') ? ' is-invalid' : '' }}"
                                            name="tahun_lulus" value="{{ old('tahun_lulus') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-calendar"></i>
                                        </div>
                                        @if ($errors->has('tahun_lulus'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tahun_lulus') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-3 col-sm-9 text-right">
                                    <a href="{{ route('pendidikan.index') }}" class="btn btn-info waves-effect waves-light m-t-10">Batal</a>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel
                        <span>
                            <i class="ti-close right-side-toggle"></i>
                        </span>
                    </div>
                    <div class="r-panel-body">
                        <ul>
                            <li>
                                <b>Layout Options</b>
                            </li>
                            <li>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> Fix Header </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                    <label for="checkbox2"> Fix Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4"> Toggle Sidebar </label>
                                </div>
                            </li>
                        </ul>
                        <ul id="themecolors" class="m-t-20">
                            <li>
                                <b>With Light sidebar</b>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="default" class="default-theme">1</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="green" class="green-theme">2</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="purple" class="purple-theme">5</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="megna" class="megna-theme">6</a>
                            </li>
                            <li>
                                <b>With Dark sidebar</b>
                            </li>
                            <br/>
                            <li>
                                <a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a>
                            </li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li>
                                <b>Chat option</b>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                    <span>Varun Dhavan
                                        <small class="text-success">online</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                    <span>Genelia Deshmukh
                                        <small class="text-warning">Away</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                    <span>Ritesh Deshmukh
                                        <small class="text-danger">Busy</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                    <span>Arijit Sinh
                                        <small class="text-muted">Offline</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle">
                                    <span>Govinda Star
                                        <small class="text-success">online</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                    <span>John Abraham
                                        <small class="text-success">online</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle">
                                    <span>Hritik Roshan
                                        <small class="text-success">online</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle">
                                    <span>Pwandeep rajan
                                        <small class="text-success">online</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div>
        @endsection