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
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
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
                                <li class="tab active" id="">
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
                                <div class="tab-pane active" id="pendidikan">
                                        @if(Auth::user()->akses==1)
                                        <table id="example" class="cell-border compact nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Jenjang</th>
                                                <th>Nama PT</th>
                                                <th>Kota</th>
                                                <th>Bidang Ilmu</th>
                                                <th>Tahun Lulus</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Jenjang</th>
                                                <th>Nama PT</th>
                                                <th>Kota</th>
                                                <th>Bidang Ilmu</th>
                                                <th>Tahun Lulus</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $no = 0;?> 
                                            @forelse($pendidikan as $d5)
                                            <?php $no++ ;?>
                                            <?php
                                                //$tmp=DB::table('data_jenjang')->where('kode_jenjang', $d5->kode_jenjang)->value('jenjang');
                                            ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $d5->kode_jenjang }}</td>
                                                <td>{{ $d5->nama_pt }}</td>
                                                <td>{{ $d5->kota }}</td>
                                                <td>{{ $d5->bidang_ilmu }}</td>
                                                <td>{{ $d5->tahun_lulus }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="6">Data Kosong</td>
                                            </tr>
                                            @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
                                    @elseif(Auth::user()->akses==0)
                                    <table id="example" class="cell-border compact nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Jenjang</th>
                                                <th>Nama PT</th>
                                                <th>Kota</th>
                                                <th>Bidang Ilmu</th>
                                                <th>Tahun Lulus</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Jenjang</th>
                                                <th>Nama PT</th>
                                                <th>Kota</th>
                                                <th>Bidang Ilmu</th>
                                                <th>Tahun Lulus</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $no = 0;?> 
                                            @forelse($pendidikan as $d5)
                                            <?php $no++ ;?>
                                            <?php
                                                //$tmp=DB::table('data_jenjang')->where('kode_jenjang', $d5->kode_jenjang)->value('jenjang');
                                            ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $d5->kode_jenjang }}</td>
                                                <td>{{ $d5->nama_pt }}</td>
                                                <td>{{ $d5->kota }}</td>
                                                <td>{{ $d5->bidang_ilmu }}</td>
                                                <td>{{ $d5->tahun_lulus }}</td>
                                                <td>
                                                    <a href="{{ route('pendidikan.edit', $d5->kode_pendidikan) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                    <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData3('{{$d5->kode_pendidikan}}')">Hapus</a>   
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7">Data Kosong</td>
                                            </tr>
                                            @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                    <hr>
                                    <hr>
                                    <div class="datapendidikan">
                                    </div>
                                </div>
                                <div class="tab-pane" id="pekerjaan">
                                @if(Auth::user()->akses==1)
                                <table id="example2" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lembaga</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Jabatan</th>
                                            <th>Mulai</th>
                                            <th>Sampai</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lembaga</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Jabatan</th>
                                            <th>Mulai</th>
                                            <th>Sampai</th>
                                        </tr>
                                    </tfoot>
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
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">Data Kosong</td>
                                        </tr>
                                        @endforelse
                                        </tr>
                                    </tbody>
                                </table>
                                @elseif(Auth::user()->akses==0)
                                <table id="example2" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lembaga</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Jabatan</th>
                                            <th>Mulai</th>
                                            <th>Sampai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lembaga</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Jabatan</th>
                                            <th>Mulai</th>
                                            <th>Sampai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
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
                                            <td>
                                                <a href="{{ route('pekerjaan.edit', $d4->kode_pekerjaan) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData3('{{$d4->kode_pekerjaan}}')">Hapus</a>   
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
                                @endif
                                    <hr>
                                    <hr>
                                    <div class="datapekerjaan">
                                    </div>
                                </div>
                                <div class="tab-pane" id="bidang">
                                @if(Auth::user()->akses==1)
                                <table id="example5" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Bidang Profesi Pers</th>
                                            <th>Bidang Profesi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Bidang Profesi</th>
                                            <th>Bidang Profesi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0;?> 
                                        @forelse($bidang as $d5)
                                        <?php $no++ ;
                                            $temp=DB::table('data_bidangpropers')->select('kode_bidangprofesi')->where('kode_bidangpropers', $d5->kode_bidangpropers )->value('kode_bidangprofesi');
                                            $namabidang=DB::table('data_bidangprofesi')->select('bidangprofesi')->where('kode_bidangprofesi', $temp )->value('bidangprofesi');
                                        ?>
                                        <?php
                                        ?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d5->kode_bidangpropers }}</td>
                                            <td>{{ $namabidang }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">Data Kosong</td>
                                        </tr>
                                        @endforelse
                                        </tr>
                                    </tbody>
                                </table>
                                @elseif(Auth::user()->akses==0)
                                <table id="example5" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Bidang Profesi Pers</th>
                                            <th>Bidang Profesi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Bidang Profesi</th>
                                            <th>Bidang Profesi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0;?> 
                                        @forelse($bidang as $d5)
                                        <?php $no++ ;
                                            $temp=DB::table('data_bidangpropers')->select('kode_bidangprofesi')->where('kode_bidangpropers', $d5->kode_bidangpropers )->value('kode_bidangprofesi');
                                            $namabidang=DB::table('data_bidangprofesi')->select('bidangprofesi')->where('kode_bidangprofesi', $temp )->value('bidangprofesi');
                                        ?>
                                        <?php
                                        ?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d5->kode_bidangpropers }}</td>
                                            <td>{{ $namabidang }}</td>
                                            <td>
                                            <a href="{{ route('bidangpropers.editpers', $d5->kode_bidangpropers) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData1('{{$d5->kode_bidangpropers}}')">Hapus</a>   
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
                                @endif
                                    <hr>
                                    <hr>
                                    <div class="databidangpropers">
                                    </div>
                                </div>
                                <div class="tab-pane" id="praktik">
                                @if(Auth::user()->akses==1)
                                <table id="example4" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pemeriksaan</th>
                                            <th>Tindakan</th>
                                            <th>Tahun Pelaksanaan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Pemeriksaan</th>
                                            <th>Tindakan</th>
                                            <th>Tahun Pelaksanaan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0;?> @forelse($praktik as $d3)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d3->pemeriksaan }}</td>
                                            <td>{{ $d3->tindakan }}</td>
                                            <td>{{ $d3->tahunpelaksanaan }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">Data Kosong</td>
                                        </tr>
                                        @endforelse
                                        </tr>
                                    </tbody>
                                </table>
                                @elseif(Auth::user()->akses==0)
                                <table id="example4" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pemeriksaan</th>
                                            <th>Tindakan</th>
                                            <th>Tahun Pelaksanaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Pemeriksaan</th>
                                            <th>Tindakan</th>
                                            <th>Tahun Pelaksanaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0;?> @forelse($praktik as $d3)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d3->pemeriksaan }}</td>
                                            <td>{{ $d3->tindakan }}</td>
                                            <td>{{ $d3->tahunpelaksanaan }}</td>
                                            <td>
                                            <a href="{{ route('praktik.edit', $d3->kode_praktik) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData5('{{$d3->kode_praktik}}')">Hapus</a>   
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
                                @endif
                                    <hr>
                                    <hr>
                                    <div class="datapraktikpro">
                                    </div>
                                </div>
                                <div class="tab-pane" id="profesional">
                                @if(Auth::user()->akses==1)
                                <table id="example3" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kegiatan</th>
                                            <th>Tempat</th>
                                            <th>Tahun</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kegiatan</th>
                                            <th>Tempat</th>
                                            <th>Tahun</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0;?> @forelse($pengembangan as $d2)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d2->kegiatan }}</td>
                                            <td>{{ $d2->tempat }}</td>
                                            <td>{{ $d2->tahun }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">Data Kosong</td>
                                        </tr>
                                        @endforelse
                                        </tr>
                                    </tbody>
                                </table>
                                @elseif(Auth::user()->akses==0)
                                <table id="example3" class="cell-border compact nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kegiatan</th>
                                            <th>Tempat</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kegiatan</th>
                                            <th>Tempat</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 0;?> @forelse($pengembangan as $d2)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $d2->kegiatan }}</td>
                                            <td>{{ $d2->tempat }}</td>
                                            <td>{{ $d2->tahun }}</td>
                                            <td>
                                            <a href="{{ route('pengembanganprofesional.edit', $d2->kode_pro) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData4('{{$d2->kode_pro}}')">Hapus</a>   
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
                                @endif
                                    <hr>
                                    <hr>
                                    <div class="datapengembanganpro">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        
@endsection