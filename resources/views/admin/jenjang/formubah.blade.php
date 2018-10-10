@extends('layouts.app2')
<script src="{{ asset('asset/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
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
                    <h4 class="page-title">Data Master</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Jenjang Pendidikan</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <!--.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Form Ubah Jenjang Pendidikan</h3>
                        <p class="text-muted m-b-30 font-13"></p>
                        <form method="POST" class="form-horizontal" action="{{ route('jenjang.update', ['jenjang'=> $data['kode_jenjang']]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputname" class="col-sm-3 control-label">
                                    <br>Jenjang Pendidikan*</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <table class="table" id="dynamic_field">
                                            <tr>
                                                <td>
                                                    <input type="text" maxlength="30" name="jenjang" value="{{ $data['jenjang'] }}" placeholder="Masukkan Jenjang Pendidikan"
                                                        class="form-control" required/>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group m-b-0">
                                                <div class="col-sm-offset-8 col-sm-9 text-right">
                                                    <a href="{{ route('jenjang.index') }}" class="btn btn-outline-danger waves-effect waves-light m-t-10">Batal</a>
                                                    <button type="submit" class="btn btn-outline-success waves-effect waves-light m-t-10">Simpan</button>
                                                </div>
                                    </div>
                                </div>
                            </div>   
                        </form>                         
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

    @endsection