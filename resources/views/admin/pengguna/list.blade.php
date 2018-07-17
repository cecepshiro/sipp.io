@extends('layouts.app2')

@section('content')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="{{ url('/') }}"><b><img src="{{ asset('asset/image/logo.png') }}" alt="home" /></b><span class="hidden-xs"><img src="{{ asset('asset/image/dispsiad.png') }}" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left pull-left hidden-xs">
                    <li>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                   
                   
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('image/avatar.png') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->name }}</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">                           
                            <form action="{{ action('PersonilController@profil') }}" method="get" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}"><a></a>
                                <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}"><a></a>
                                <li><a><button type="submit" class="btnCustom btnCustom-default">Profil Diri</button></a>
                                </li>
                            </form>
                            
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Keluar</a></li>
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
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{ asset('image/avatar.png') }}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><form action="{{ action('PersonilController@profil') }}" method="get" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}"><a></a>
                                    <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}"><a></a>
                                    <a><button type="submit" style="float: left" class="btnCustom btnCustom-default"><i class="ti-user"></i> Profil Diri</button></a>
                                </form>
                            </li>
                            <li><form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a><button type="submit" style="float: left" class="btnCustom btnCustom-default"><i class="fa fa-power-off"></i> Keluar</button></a>
                                </form>
                            </li>
                        </ul>
                    </li>
                            <li class="nav-small-cap m-t-10">--- Data Personel</li>
                            <li> <a href="{{ route('personil.index') }}" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Daftar Personel</span></a>
                            <li class="nav-small-cap m-t-10">--- Data Pengalaman</li>
                            <li> <a href="{{ route('personil.index') }}" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Daftar Pengalaman</span></a>
                            <li class="nav-small-cap m-t-10">--- Data Registrasi</li>
                            <li> <a href="{{ route('register') }}" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Registrasi Pengguna</span></a>
                            <li> <a href="{{ route('register') }}" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Daftar Pengguna</span></a>
                            <li class="nav-small-cap m-t-10">--- Data Master</li>
                            <li> <a href="{{ route('agama.index') }}" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Data Agama</span></a>
                            <li class="nav-small-cap m-t-10">--- Data Laporan</li>
                            <li> <a href="{{ route('agama.index') }}" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Laporan</span></a>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Master</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Daftar Registrasi</li>
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
                            <h3 class="box-title">Data Pengguna</h3>
                            <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Agama</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
                                    <th>Agama</th>
                                    <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                    <tbody>
                                        <?php $no = 0;?>
										@forelse($data as $d)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d->id_anggota }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->password }}</td>
                                            <td>
                                            <form action="{{ action('RegisterController@hapus', ['RegisterController@hapus'=>$d->id]) }}" method="post">
                                                <div class="form-group">
                                                    @if(Auth::user()->hak_akses==0)
                                                    <a href="{{ action('RegisterController@edit', ['RegisterController@hapus'=>$d->id]) }}" class="btn btn-outline-warning btn-sm">
                                                    Edit</a>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                                    @endif
                                            
                                                </div>
                                            </form>
                                            </td>
                                        </tr>
										@empty
                                        <tr>
                              			  <td colspan="5">Data Kosong</td>
                              			</tr>
                                        @endforelse
                                        </tr>
                                    </tbody>
                            </table>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
@endsection