@extends('layouts.app2')
    <script>
            function hapusDataJenjang(id) {
                if (confirm("Apakah anda akan menghapus ini ?!")) {
                    $.ajax({
                        url: '/deletejenjang/'+ id,
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
                            $('#pesanFlash').html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Data Terhapus</div>');
                            //$('#example').DataTable().ajax.reload();.
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
                            <li class="active">Jenjang Pendidikan</li>
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
                            @if(Auth::user()->akse==0)
                            <a href="{{ route('jenjang.create') }}" class="btn btn-outline-success btn-sm">Tambah Data</a>
                            @endif
                            <div class="table-responsive">
                            <br>
                            <span id="pesanFlash"></span>
                            <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                            <table id="example" class="cell-border compact nowrap" style="width:100%">
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
                                                <a href="{{ route('jenjang.edit', ['bidang'=>$d->kode_jenjang]) }}" class="btn btn-outline-primary btn-sm">
                                                Edit</a>
                                                <a class="btn btn-outline-danger btn-sm waves-effect waves-light remove-record" onclick="hapusDataJenjang('{{$d->kode_jenjang}}')">Hapus</a>   
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