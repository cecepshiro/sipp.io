@extends('layouts.app2')
    <script>
        function hapusData(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/posts/'+ id,
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
                            <li class="active">Daftar Pengguna</li>
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
                            <h3 class="box-title">Daftar Pengguna</h3>
                            <div class="table-responsive">
                            <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                            <table id="example" class="cell-border compact nowrap" style="width:100%">
                            <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>NRP</th>
                                    <th>Nama Personel</th>
                                    <th>Hak Akses</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    <th>No</th>
                                    <th>NRP</th>
                                    <th>Nama Personel</th>
                                    <th>Hak Akses</th>
                                    <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                    <tbody>
                                        <?php $no = 0;?>
										@forelse($data as $d => $value)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td >{{ $no }}</td>
                                            <td>{{ $value->id_anggota }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>
                                                @if($value->akses=='0')
                                                    Admin
                                                @elseif($value->akses=='1')
                                                    Atasan
                                                @elseif($value->akses=='2')
                                                    Anggota
                                                @elseif($value->akses=='3')
                                                    Staff Infolahta
                                                @else($value->akses==null)
                                                    Tentukan Hak Akses
                                                @endif
                                            </td>
                                            <td>
                                            @if(Auth::user()->akses==1 || Auth::user()->akses==2 || Auth::user()->akses==0)
                                            <a href="{{ route('registeruser.edit', ['registeruser'=>$value->id]) }}" class="btn btn-outline-primary btn-sm">Edit Password</a>
                                            <a class="btn btn-outline-danger btn-sm waves-effect waves-light remove-record" onclick="hapusData({{$value->id}})">Hapus</a>
                                            @elseif(Auth::user()->akses==3)
                                            <a href="{{ route('registeruser.halakses', ['registeruser.halakses'=>$value->id]) }}" class="btn btn-outline-success btn-sm">Ubah Hak Akses</a>
                                            <a href="{{ route('registeruser.edit', ['registeruser'=>$value->id]) }}" class="btn btn-outline-primary btn-sm">Edit Password</a>
                                            <a class="btn btn-outline-danger btn-sm waves-effect waves-light remove-record" onclick="hapusData({{$value->id}})">Hapus</a>
                                            @endif   
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