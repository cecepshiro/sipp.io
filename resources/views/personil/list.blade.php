@extends('layouts.app2')

    <script>
        function hapusDataPersonil(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletedatapersonil/'+ id,
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
                        <h4 class="page-title">Data Personel</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">List Personel</li>
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
                            <h3 class="box-title">List Personel</h3>
                            <div class="table-responsive">
                            <!-- <table id="example" class="table table-striped table-bordered nowrap" style="width:100%"> -->
                            <table id="example" class="cell-border compact nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tgl. Lahir</th>
                                        <th>Jk</th>
                                        <th>Agama</th>
                                        <th>Alamat Sekarang</th>
                                        <th>Telp. Rumah</th>
                                        <th>No. HP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tgl. Lahir</th>
                                        <th>Jk</th>
                                        <th>Agama</th>
                                        <th>Alamat Sekarang</th>
                                        <th>Telp. Rumah</th>
                                        <th>No. HP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                    <tbody>
                                        <?php $no = 0;?>
										@forelse($data as $d)
                                        <?php
                                        $no++;
                                        $kode=DB::table('users')->select('id_anggota')->where('id', $d->user_id)->value('id_anggota');
                                        $nama=DB::table('users')->select('name')->where('id', $d->user_id)->value('name');
                                        ?>
                                        <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $kode }}</td>
                                        <td>{{ $nama }}</td>
                                        <td>{{ $d->tempat_lahir }}</td>
                                        <td>{{ $d->tgl_lahir }}</td>
                                        <td>{{ $d->jenis_kelamin }}</td>
                                        <td>{{ $d->agama }}</td>
                                        <td>{{ $d->alamat_sekarang }}</td>
                                        <td>{{ $d->telp_rumah }}</td>
                                        <td>{{ $d->no_hp }}</td>
                                        <td>
                                            <?php
                                                $kode=DB::table('users')->select('id')->where('id', $d->user_id)->value('id');
                                            ?>
                                            <a href="{{ route('pengalaman.show', ['pengalaman'=>$kode]) }}" class="btn btn-outline-primary btn-sm">Lihat Pengalaman</a>
                                            <a href="{{ route('personil.edit', ['personil'=>$d->kode_personil]) }}" class="btn btn-outline-success btn-sm">Edit</a>
                                            <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusDataPersonil('{{$d->kode_personil}}')">Hapus</a>   
                                        </td>
                                        </tr>
										@empty
                                        <tr>
                              			  <td colspan="11">Data Kosong</td>
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
                <!-- /.row -->
            </div>
@endsection