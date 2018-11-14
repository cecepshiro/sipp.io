<link href="{{ asset('asset/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<script src="{{ asset('asset/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/dataTables.bootstrap.min.js') }}"></script>
<link href="{{ asset('asset/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@extends('layouts.app2')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script>
        function hapusDataPendidikan(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletependidikan/'+ id,
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
                        
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
    <script>
        function hapusPekerjaan(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletepekerjaan/'+ id,
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
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
    <script>
        function hapusBidang(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletebidangpro/'+ id,
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
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
        <script>
        function hapusPraktik(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletepraktikpro/'+ id,
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
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
    <script>
        function hapusPro(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletepengembanganpro/'+ id,
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
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
            <script>
             $(document).ready(function() {
                $('#lihatpendidikan').DataTable();
                $('#lihatpekerjaan').DataTable();
                $('#lihatbidang').DataTable();
                $('#lihatpraktik').DataTable();
                $('#lihatpro').DataTable();
            } );
            </script>
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
                        <h4 class="page-title">Data Pengalaman</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="active">Data Pengalaman</li>
                        </ol>
                    </div>
                    <div id="erroal" hide></div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs CUSTOMTAB2">
                                <!-- <li class="tab active">
                                    <a href="#pengalaman" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Pengalaman Personel</span> </a>
                                </li> -->
                                <li class="tab active" id="">
                                    <a href="#stats" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Statistik Personel</span> </a>
                                </li>
                                <li class="tab" id="">
                                    <a href="#pendidikan" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Riwayat Pendidikan</span> </a>
                                </li>
                                <li class="tab" id="">
                                    <a href="#pekerjaan" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Riwayat Pekerjaan</span> </a>
                                </li>
                                <li class="tab" id="">
                                    <a href="#bidang" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Bidang Profesi</span> </a>
                                </li>
                                <li class="tab" id="">
                                    <a href="#praktik" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Praktik Profesi</span> </a>
                                </li>
                                <li class="tab" id="">
                                    <a href="#profesional" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Pengembangan Profesional</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="stats">
                                    <h3 class="box-title m-b-0">Statistik Pengalaman Personel</h3>
                                        <hr>
                                            <div class="white-box">
                                                <h4 class="page-title">Statistik Pengalaman Personel<h4>
                                                <canvas id="grafikBatang" width="30%" height="10%"></canvas>
                                            </div>
                                        </section>
                                    </div>
                                <div class="tab-pane" id="pendidikan">
                                <h3 class="box-title m-b-0">List Pendidikan Profesional Personel</h3>
                                    <hr>
                                    <div class="table-responsive">
                                    <br>
                                    <table id="lihatpendidikan" class="table table-condensed nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Jenjang</th>
                                                <th>Nama PT</th>
                                                <th>Kota</th>
                                                <th>Bidang Ilmu</th>
                                                <th>Tahun Lulus</th>
                                                @if(Auth::user()->akses==3)
                                                <th>Aksi</th>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;?> 
                                            @forelse($pendidikan as $d5)
                                            <?php $no++ ;?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $d5->kode_jenjang }}</td>
                                                <td>{{ $d5->nama_pt }}</td>
                                                <td>{{ $d5->kota }}</td>
                                                <td>{{ $d5->bidang_ilmu }}</td>
                                                <td>{{ $d5->tahun_lulus }}</td>
                                                @if(Auth::user()->akses==3)
                                                <td>
                                                    <!-- <a href="{{ route('pendidikan.edit', $d5->kode_pendidikan) }}" class="btn btn-outline-primary btn-sm">Edit</a> -->
                                                @if($d5->lampiran!=null)
                                                    <a href="{{ route('report.pendidikan', $d5->kode_pendidikan) }}" class="btn btn-outline-success btn-sm">Download Lampiran</a>
                                                @elseif($d5->lampiran==null)
                                                    <a href="#" class="btn btn-outline-warning btn-sm">Lampiran Kosong</a>
                                                @endif
                                                    <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusDataPendidikan('{{$d5->kode_pendidikan}}')">Hapus</a>   
                                                </td>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7">Data Kosong</td>
                                            </tr>
                                            @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </section>
                                </div>
                                <div class="tab-pane" id="pekerjaan">
                                    <h3 class="box-title m-b-0">List Pengalaman Pekerjaan Personel</h3>
                                    <hr>
                                    <div class="table-responsive">
                                    <br>
                                    <span id="pesanFlash"></span>
                                    <table id="lihatpekerjaan" class="table table-condensed nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lembaga</th>
                                                <th>Alamat</th>
                                                <th>No. Telp</th>
                                                <th>Jabatan</th>
                                                <th>Mulai</th>
                                                <th>Sampai</th>
                                                @if(Auth::user()->akses==3)
                                                <th>Aksi</th>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;?> 
                                            @forelse($pekerjaan as $d4)
                                            <?php $no++ ;?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $d4->nama_lembaga }}</td>
                                                <td>{{ $d4->alamat }}</td>
                                                <td>{{ $d4->no_telp }}</td>
                                                <td>{{ $d4->pekerjaan }}</td>
                                                <td>{{ $d4->dari }}</td>
                                                <td>{{ $d4->sampai }}</td>
                                                @if(Auth::user()->akses==3)
                                                <td>
                                                    <!-- <a href="{{ route('pekerjaan.edit', $d4->kode_pekerjaan) }}" class="btn btn-outline-primary btn-sm">Edit</a> -->
                                                @if($d4->lampiran!=null)
                                                    <a href="{{ route('report.pekerjaan', $d4->kode_pekerjaan) }}" class="btn btn-outline-success btn-sm">Download Lampiran</a>
                                                @elseif($d4->lampiran==null)
                                                    <a href="#" class="btn btn-outline-warning btn-sm">Lampiran Kosong</a>
                                                @endif
                                                    <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusPekerjaan('{{$d4->kode_pekerjaan}}')">Hapus</a>   
                                                </td>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8">Data Kosong</td>
                                            </tr>
                                            @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>                                    
                                </div>
                                <div class="tab-pane" id="bidang">
                                    <h3 class="box-title m-b-0">List Bidang Profesi Personel</h3>
                                    <hr>
                                    <div class="table-responsive">
                                    <br>
                                    <span id="pesanFlash"></span>
                                    <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                                    <table id="lihatbidang" class="table table-condensed nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Bidang Profesi Pers</th>
                                                <th>Bidang Profesi</th>
                                                @if(Auth::user()->akses==3)
                                                <th>Aksi</th>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;?> 
                                            @forelse($bidang as $d3)
                                            <?php $no++ ;
                                                $temp=DB::table('data_bidangpropers')->select('kode_bidangprofesi')->where('kode_bidangpropers', $d3->kode_bidangpropers )->value('kode_bidangprofesi');
                                                $namabidang=DB::table('data_bidangprofesi')->select('bidangprofesi')->where('kode_bidangprofesi', $temp )->value('bidangprofesi');
                                            ?>
                                            <?php
                                            ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $d3->kode_bidangpropers }}</td>
                                                <td>{{ $namabidang }}</td>
                                                @if(Auth::user()->akses==3)
                                                <td>
                                                <!-- <a href="{{ route('bidangpropers.editpers', $d3->kode_bidangpropers) }}" class="btn btn-outline-primary btn-sm">Edit</a> -->
                                                @if($d3->lampiran!=null)
                                                    <a href="{{ route('report.bidangprofesi', $d3->kode_bidangpropers) }}" class="btn btn-outline-success btn-sm">Download Lampiran</a>
                                                @elseif($d3->lampiran==null)
                                                    <a href="#" class="btn btn-outline-warning btn-sm">Lampiran Kosong</a>
                                                @endif
                                                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusBidang('{{$d3->kode_bidangpropers}}')">Hapus</a>   
                                                </td>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
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
                                <div class="tab-pane" id="praktik">
                                    <h3 class="box-title m-b-0">List Pengalaman Praktik Profesi Personel</h3>
                                    <hr>
                                    <div class="table-responsive">
                                    <br>
                                    <span id="pesanFlash"></span>
                                    <!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
                                    <table id="lihatpraktik" class="table table-condensed nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Pemeriksaan</th>
                                                <th>Tindakan</th>
                                                <th>Tahun Pelaksanaan</th>
                                                @if(Auth::user()->akses==3)
                                                <th>Aksi</th>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;?> 
                                            @forelse($praktik as $d2)
                                            <?php $no++ ;?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $d2->pemeriksaan }}</td>
                                                <td>{{ $d2->tindakan }}</td>
                                                <td>{{ $d2->tahunpelaksanaan }}</td>
                                                @if(Auth::user()->akses==3)
                                                <td>
                                                <!-- <a href="{{ route('praktik.edit', $d2->kode_praktik) }}" class="btn btn-outline-primary btn-sm">Edit</a> -->
                                                @if($d2->lampiran!=null)
                                                    <a href="{{ route('report.praktik', $d2->kode_praktik) }}" class="btn btn-outline-success btn-sm">Download Lampiran</a>
                                                @elseif($d2->lampiran==null)
                                                    <a href="#" class="btn btn-outline-warning btn-sm">Lampiran Kosong</a>
                                                @endif
                                                    <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusPraktik('{{$d2->kode_praktik}}')">Hapus</a>   
                                                </td>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
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
                                <div class="tab-pane" id="profesional">
                                    <h3 class="box-title m-b-0">List Pengembangan Profesional Personel</h3>
                                    <hr>
                                    <div class="table-responsive">
                                    <br>
                                    <span id="pesanFlash"></span>
                                    <table id="lihatpro" class="table table-condensed nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kegiatan</th>
                                                <th>Tempat</th>
                                                <th>Tahun</th>
                                                @if(Auth::user()->akses==3)
                                                <th>Aksi</th>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;?> 
                                            @forelse($pengembangan as $d1)
                                            <?php $no++ ;?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $d1->kegiatan }}</td>
                                                <td>{{ $d1->tempat }}</td>
                                                <td>{{ $d1->tahun }}</td>
                                                @if(Auth::user()->akses==3)
                                                <td>
                                                <!-- <a href="{{ route('pengembanganprofesional.edit', $d1->kode_pro) }}" class="btn btn-outline-primary btn-sm">Edit</a> -->
                                                @if($d1->lampiran!=null)
                                                    <a href="{{ route('report.pro', $d1->kode_pro) }}" class="btn btn-outline-success btn-sm">Download Lampiran</a>
                                                @elseif($d1->lampiran==null)
                                                    <a href="#" class="btn btn-outline-warning btn-sm">Lampiran Kosong</a>
                                                @endif
                                                    <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusPro('{{$d1->kode_pro}}')">Hapus</a>   
                                                </td>
                                                @elseif(Auth::user()->akses==1)
                                                @endif
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
                </div>
                <!-- /.row -->
            </div>
            <script>
var ctx = document.getElementById("grafikBatang").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Pendidikan", "Pekerjaan", "Bidang Profesi", "Praktik Profesi", "Pengembangan Profesional"],
        datasets: [{
            label: '# Jumlah Pengalaman',
            data: [ 
                <?php 
                    $rentang = DB::table('data_pendidikan')->select(DB::RAW('count(data_pendidikan.user_id), user_id'))->from('data_pendidikan')->where('user_id', $ccp)->groupBy('user_id')->value('count');                
                    echo $rentang;
                ?>,
                <?php 
                    $rentang = DB::table('data_pekerjaan')->select(DB::RAW('count(data_pekerjaan.user_id), user_id'))->from('data_pekerjaan')->where('user_id', $ccp)->groupBy('user_id')->value('count');                
                    echo $rentang;
                ?>,
                <?php 
                    $rentang = DB::table('data_bidangpropers')->select(DB::RAW('count(data_bidangpropers.user_id), user_id'))->from('data_bidangpropers')->where('user_id', $ccp)->groupBy('user_id')->value('count');                
                    echo $rentang;
                ?>,
                <?php 
                    $rentang = DB::table('data_praktik')->select(DB::RAW('count(data_praktik.user_id), user_id'))->from('data_praktik')->where('user_id', $ccp)->groupBy('user_id')->value('count');                
                    echo $rentang;
                ?>,
                <?php 
                    $rentang = DB::table('data_pengembangan_pro')->select(DB::RAW('count(data_pengembangan_pro.user_id), user_id'))->from('data_pengembangan_pro')->where('user_id', $ccp)->groupBy('user_id')->value('count');                
                    echo $rentang;
                ?>,
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script> 
@endsection