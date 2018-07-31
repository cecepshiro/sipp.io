@extends('layouts.app2') @section('content')
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="ti-menu"></i>
            </a>
            <div class="top-left-part">
                <a class="logo" href="{{ url('/') }}">
                    <b>
                        <img src="{{ asset('asset/image/logo.png') }}" alt="home" />
                    </b>
                    <span class="hidden-xs">
                        <img src="{{ asset('asset/image/dispsiad.png') }}" alt="home" />
                    </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left pull-left hidden-xs">
                <li>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">


                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                        <img src="{{ asset('image/avatar.png') }}" alt="user-img" width="36" class="img-circle">
                        <b class="hidden-xs">{{ Auth::user()->name }}</b>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <form action="{{ action('PersonilController@profil') }}" method="get" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <a></a>
                            <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}">
                            <a></a>
                            <li>
                                <a>
                                    <button type="submit" class="btnCustom btnCustom-default">Profil Diri</button>
                                </a>
                            </li>
                        </form>

                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- .Megamenu -->


            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
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
                <li class="user-pro">
                    <a href="#" class="waves-effect">
                        <img src="{{ asset('image/avatar.png') }}" alt="user-img" class="img-circle">
                        <span class="hide-menu"> {{ Auth::user()->name }}
                            <span class="fa arrow"></span>
                        </span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <form action="{{ action('PersonilController@profil') }}" method="get" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <a></a>
                                <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}">
                                <a></a>
                                <a>
                                    <button type="submit" style="float: left" class="btnCustom btnCustom-default">
                                        <i class="ti-user"></i> Profil Diri</button>
                                </a>
                            </form>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a>
                                    <button type="submit" style="float: left" class="btnCustom btnCustom-default">
                                        <i class="fa fa-power-off"></i> Keluar</button>
                                </a>
                            </form>
                        </li>
                    </ul>
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
                        <h3 class="box-title m-b-0">Form Bidang Pendidikan Personel</h3>
                        <p class="text-muted m-b-30 font-13"></p>
                        <form method="POST" class="form-horizontal" action="{{ route('pendidikan.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">NRP </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="name" type="text" placeholder="Masukkan Nama Lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" value="{{ old('name') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-user"></i>
                                        </div>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputname" class="col-sm-3 control-label">Jenjang*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <select id="akses" class="form-control{{ $errors->has('akses') ? ' is-invalid' : '' }}" name="akses" required autofocus>
                                            <option>Pilih Jenjang Pendidikan</option>
                                            @foreach($jenjang as $j)
                                            <option value="{{ $j->kode_jenjang }}">{{ $j->jenjang }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-addon">
                                            <i class="ti-user"></i>
                                        </div>
                                        @if ($errors->has('akses'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('akses') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Nama Perguruan Tinggi </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="name" type="text" placeholder="Masukkan Nama Lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" value="{{ old('name') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-user"></i>
                                        </div>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Kota </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="name" type="text" placeholder="Masukkan Nama Lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" value="{{ old('name') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-user"></i>
                                        </div>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Bidang Ilmu </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="name" type="text" placeholder="Masukkan Nama Lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" value="{{ old('name') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-user"></i>
                                        </div>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputuname" class="col-sm-3 control-label">Tahun Lulus </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="name" type="text" placeholder="Masukkan Nama Lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            name="name" value="{{ old('name') }}" required autofocus>
                                        <div class="input-group-addon">
                                            <i class="ti-user"></i>
                                        </div>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-3 col-sm-9 text-right">
                                    <a href="{{ action('Auth\RegisterController@daftar') }}" class="btn btn-info waves-effect waves-light m-t-10">Batal</a>
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