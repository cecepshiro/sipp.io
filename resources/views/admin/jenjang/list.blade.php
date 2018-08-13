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
                            <h3 class="box-title">Daftar Jenjang Pendidikan</h3>
                            <a href="{{ route('jenjang.create') }}" class="btn btn-primary btn-xs">Tambah Data</a>
                            <div class="table-responsive">
                            <br>
                            <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                            <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Kode Jenjang</th>
                                    <th>Jenjang</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
                                    <th>Kode Jenjang</th>
                                    <th>Jenjang</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                    <tbody>
                                        <?php $no = 0;?>
										@forelse($data as $d)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d->kode_jenjang }}</td>
                                            <td>{{ $d->jenjang }}</td>
                                            <td>{{ $d->keterangan }}</td>
                                            <td>
                                            <form action="{{ route('jenjang.destroy', ['bidang'=>$d->kode_jenjang]) }}" method="post">
                                                <div class="form-group">
                                                    <a href="{{ route('jenjang.edit', ['bidang'=>$d->kode_jenjang]) }}" class="btn btn-outline-warning btn-sm">
                                                    Edit</a>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
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