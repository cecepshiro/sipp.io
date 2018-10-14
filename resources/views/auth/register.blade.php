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
                        <h4 class="page-title">Data Registrasi</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Data Registrasi</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--.row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Registrasi Pengguna</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <form method="POST" class="form-horizontal" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Nama Lengkap*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input id="txtNumeric" type="text" maxlenght="50"  placeholder="Masukkan Nama Lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                        <div class="input group">
                                            @if ($errors->has('name'))
                                                    <br>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname" class="col-sm-3 control-label">NRP*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input id="id_anggota" type="text" maxlength="20" onkeypress="return isNumberKey(event)" placeholder="Masukkan NRP" class="form-control{{ $errors->has('id_anggota') ? ' is-invalid' : '' }}" name="id_anggota" value="{{ old('id_anggota') }}" required>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                        <div class="input group">
                                            @if ($errors->has('id_anggota'))
                                                    <br>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('id_anggota') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if(Auth::user()->akses!=0)
                                <div class="form-group">
                                    <label for="exampleInputname" class="col-sm-3 control-label">Hak Akses*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <select id="akses" class="form-control{{ $errors->has('akses') ? ' is-invalid' : '' }}" name="akses" required>
                                                <option value="">Pilih Hak Akses</option>
                                                <!-- <option value="0">Admin</option> -->
                                                <option value="1">Kepala Dinas</option>
                                                <option value="3">Staff Infolahta</option>
                                                <option value="2">Anggota</option>
                                            </select>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                        <div class="input group">
                                            @if ($errors->has('akses'))
                                                    <br>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('akses') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @elseif(Auth::user()->akses==0)
                                    
                                @endif
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input id="password" type="password" readonly value="dispsiadpers" placeholder="Masukkan Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                        </div>
                                        <div class="input group">
                                            @if ($errors->has('password'))
                                                    <br>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Konfirmasi Password*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input id="password-confirm" readonly type="password" value="dispsiadpers" placeholder="Konfirmasi Password" class="form-control" name="password_confirmation" required>
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9 text-right">
                                        <a href="{{ action('Auth\RegisterController@daftar') }}" class="btn btn-outline-danger m-t-10">Batal</a>
                                        <button type="submit" class="btn btn-outline-success m-t-10">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            
@endsection