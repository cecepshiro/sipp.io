@extends('layouts.app2')
<script>
        function hapusDataBidang(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletemasterbidang/'+ id,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);                       
                        } else if (data['error']) {
                            alert(data['error']);
                        }
                        window.location.reload();
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
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
                            <h3 class="box-title">Daftar Bidang Pengguna</h3>
                            <a href="{{ route('bidang.create') }}" class="btn btn-primary btn-xs">Tambah Data</a>
                            <div class="table-responsive">
                            <br>
                            <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                            <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Kode Bidang</th>
                                    <th>Bidang Profesi</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Bidang</th>
                                    <th>Bidang Profesi</th>
                                    <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                    <tbody>
                                        <?php $no = 0;?>
										@forelse($data as $d)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d->kode_bidangprofesi }}</td>
                                            <td>{{ $d->bidangprofesi }}</td>
                                            <td>
                                                <a href="{{ route('bidang.edit', $d->kode_bidangprofesi) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusDataBidang('{{$d->kode_bidangprofesi}}')">Hapus</a>   
                                            </td>
                                        </tr>
										@empty
                                        <tr>
                              			  <td colspan="4">Data Kosong</td>
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