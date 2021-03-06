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
                        <h4 class="page-title">Halaman Profil Personel</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="active">Profil Personel</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="{{ asset('asset/plugins/images/large/img3.jpg') }}">
                                <div class="overlay-box">
                                    <div class="user-content">

                                        <!-- GANTI FOTO -->
                                        <?php
                                            $cek2=DB::table('data_personil')->select('user_id')->where('user_id', Auth::user()->id)->value('user_id');
                                        ?>
                                            @if($cek2!=null)
                                            <a href="javascript:void(0)"><img src="/image/{{ $data2['foto'] }}" class="thumb-lg img-circle" alt="img"></a>
                                            @else
                                            <a href="javascript:void(0)"><img src="{{ asset('image/avatar.png') }}" class="thumb-lg img-circle" alt="img"></a>
                                            @endif
                                        <?php
                                            $nama=DB::table('users')->select('name')->where('id_anggota', $cari)->value('name');
                                            $temp=DB::table('users')->select('id')->where('id_anggota', $cari)->value('id');
                                            $temp2=DB::table('data_personil')->select('no_hp')->where('user_id', $temp)->value('no_hp');
                                            $temp3=DB::table('data_personil')->select('kode_personil')->where('user_id', $temp)->value('id');
                                            $tmpt=DB::table('data_personil')->select('tempat_lahir')->where('kode_personil', $temp3)->value('tempat_lahir');
                                            $tgl=DB::table('data_personil')->select('tgl_lahir')->where('kode_personil', $temp3)->value('tgl_lahir');
                                            $namaagama=DB::table('data_personil')->select('agama')->where('kode_personil', $temp3)->value('agama');
                                        ?>
                                        <h4 class="text-white">{{ $nama }}</h4>
                                        <h5 class="text-white">{{ $cari }}</h5></div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                <?php
                                    $kodepersonil=Db::table('data_personil')->select('kode_personil')->where('user_id', $temp)->value('id');
                                ?>
                                 @if($cek2!=null)
                                <form method="post"  action="{{ route('profile.update', ['profile'=> $kodepersonil]) }}" enctype="multipart/form-data"><input type="hidden" name="_method" value="PATCH">
                                        {{ csrf_field() }}
                                        <input type="hidden" class="form-control" name="id" value="{{ $temp }}"  required>
                                        <input type="file" class="form-control form-control-line" name="foto"  required>
                                        <button type="submit" class="btn btn-outline-success">Ganti Foto</button>
                                </form>
                                @else
                                @endif
                                
                                </div>
                            </div>
                            <font size="0.1px">*Maksimal ukuran foto 100kb</font>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                <li class="tab active">
                                    <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profil</span> </a>
                                </li>
                                <li class="tab" id="tes">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Detail Profil</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                    <?php
                                            $cek1=DB::table('data_personil')->select('kode_personil')->where('user_id', Auth::user()->id)->value('id');
                                    ?>
                                    @if($cek1==NULL)
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Nama Lengkap</strong>
                                            <br>
                                            <p class="text-muted">{{ $nama }}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Tmpt/Tgl. Lahir</strong>
                                            <br>
                                            <p class="text-muted">Kosong</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Agama</strong>
                                            <br>
                                            <p class="text-muted">Kosong</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6"> <strong>No. Telp</strong>
                                            <br>
                                            <p class="text-muted">Kosong</p>
                                        </div>
                                        </div>
                                        <hr>
                                        <h4 class="font-bold m-t-30">Silahkan isi terlebih dahulu data diri pribadi anda.</h4>
                                    @else
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Nama Lengkap</strong>
                                            <br>
                                            <p class="text-muted">{{ $nama }}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Tmpt/Tgl. Lahir</strong>
                                            <br>
                                            <p class="text-muted">{{ $tmpt }}  {{ $tgl }}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Agama</strong>
                                            <br>
                                            <p class="text-muted">{{ $namaagama }}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6"> <strong>No. Telp</strong>
                                            <br>
                                            <p class="text-muted">{{ $temp2 }}</p>
                                        </div>
                                        </div>
                                        <hr>
                                        <h4 class="font-bold m-t-30">Pengalaman</h4>
                                        <hr>
                                        <ul><li><h5>Riwayat Pendidikan <span class="pull-right"></span></h5></li>
                                        @foreach($pendidikan as $row)
                                            <ul style="list-style-type: circle;">
                                            <li>{{{ $row->nama_pt }}}
                                            {{{ $row->bidang_ilmu }}}
                                            {{{ $row->tahun_lulus }}}</li>
                                            </ul>
                                        @endforeach
                                        <li><h5>Riwayat Pekerjaan <span class="pull-right"></span></h5></li>
                                        @foreach($pekerjaan as $row)
                                            <ul style="list-style-type: circle;">
                                            <li>{{{ $row->nama_lembaga }}}
                                            {{{ $row->pekerjaan }}}</li>
                                            </ul>
                                        @endforeach
                                        <li><h5>Bidang Profesi <span class="pull-right"></span></h5></li>
                                        @foreach($bidang as $row)
                                            <?php  
                                                $nmbidang=DB::table('data_bidangprofesi')->select('bidangprofesi')
                                                ->where('kode_bidangprofesi', $row->kode_bidangprofesi)->value('bidangprofesi');
                                            ?>
                                            <ul style="list-style-type: circle;">
                                            <li>{{{ $nmbidang }}}</li>
                                            </ul>
                                        @endforeach
                                        <h5><li>Praktik Profesi <span class="pull-right"></span></h5></li>
                                        @foreach($praktik as $row)
                                            <ul style="list-style-type: circle;">
                                            <li>{{{ $row->pemeriksaan }}}
                                            {{{ $row->tahunpelaksanaan }}}
                                            </li>
                                            </ul>
                                        @endforeach
                                        <h5><li>Pengalaman Pengembangan Profesional <span class="pull-right"></span></h5></li>
                                        @foreach($pengembangan as $row)
                                            <ul style="list-style-type: circle;">
                                            <li>{{{ $row->kegiatan }}}
                                            {{{ $row->tahun }}}</li>
                                            </ul>
                                        @endforeach</ol>
                                    @endif
                                </div>
                                <div class="tab-pane" id="settings">
                                    <div class="" style="float:right">
                                    <form action="{{ action('ProfileController@ubahprofil') }}" method="get" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}"><a></a>
                                        <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}"><a></a>
                                        <?php
                                            $cek=DB::table('data_personil')->select('kode_personil')->where('user_id', Auth::user()->id)->value('id');
                                        ?>
                                        @if($cek==NULL)
                                        <a><button type="submit" class="btn btn-outline-primary">Isi Profil</button></a>
                                        @else
                                        <a><button type="submit" class="btn btn-outline-primary">Edit Profil</button></a>
                                        @endif
                                    </form>
                                        <!-- <button onclick="matikanForm('myForm',false);" class="btn   btn-primary">Edit</button>
                                        <button onclick="matikanForm('myForm',true);" class="btn btn-danger">Batal</button> -->
                                    </div>
                                    @if($cek==NULL)
                                    <form id="myForm" class="form-horizontal form-material" method="POST" action="{{ route('personil.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <?php
                                        $tmp3=DB::table('users')->select('name')->where('id_anggota', $cari)->value('name');
                                    ?>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-12">ID Personel</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" type="hidden" name="user_id" value="{{ Auth::user()->id }}" placeholder="ID Anggota" readonly required>
                                                <input class="form-control form-control-line" type="text" name="id_anggota" value="{{ $cari }}" placeholder="ID Anggota" readonly required>    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Nama Lengkap</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text" name="nama" value="{{ $tmp3 }}" placeholder="Nama" readonly required>
                                            </div>
                                        </div>
                                    </form>
                                    @else
                                    <form id="myForm" class="form-horizontal form-material" method="POST" action="{{ route('personil.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <?php
                                        $tmp3=DB::table('users')->select('name')->where('id_anggota', $cari)->value('name');
                                    ?>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-12">ID Personel</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" type="hidden" name="user_id" value="{{ Auth::user()->id }}" placeholder="ID Anggota" readonly required>
                                                <input class="form-control form-control-line" type="text" name="id_anggota" value="{{ $cari }}" placeholder="ID Anggota" readonly required>    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Nama Lengkap</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text" name="nama" value="{{ $tmp3 }}" placeholder="Nama" readonly required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Tempat Lahir</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" value="{{ $data2['tempat_lahir'] }}" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" readonly required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Tgl. Lahir</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" value="{{ $data2['tgl_lahir'] }}" type="date" name="tgl_lahir" readonly required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                                            <div class="row">
                                            @if($data2['jenis_kelamin'] == 'L')
                                            <div class="col-md-4 offset-md-3">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="jenis_kelamin" readonly checked required value="L" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1" >Laki-Laki</label>
                                                </div>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="jenis_kelamin" readonly required value="P" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                </div>
                                            </div>
                                            @elseif($data2['jenis_kelamin'] == 'P')
                                            <div class="col-md-4 offset-md-3">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="jenis_kelamin" readonly required value="L" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1" >Laki-Laki</label>
                                                </div>
                                            </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="jenis_kelamin" readonly checked required value="P" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control"  name="agama" readonly placeholder="Agama" required>
                                            <option>Pilih Agama</option>
                                            <option <?php if($data2['agama'] == "Islam") echo 'selected' ; ?> value="Islam">Islam</option>
                                            <option <?php if($data2['agama'] == "Kristen") echo 'selected' ; ?> value="Kristen">Kristen</option>
                                            <option <?php if($data2['agama'] == "Protestan") echo 'selected' ; ?> value="Protestan">Protestan</option>
                                            <option <?php if($data2['agama'] == "Hindu") echo 'selected' ; ?> value="Hindu">Hindu</option>
                                            <option <?php if($data2['agama'] == "Budha") echo 'selected' ; ?> value="Budha">Budha</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Suku Bangsa</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text" name="suku_bangsa" value="{{ $data2['suku_bangsa'] }}" placeholder="Suku Bangsa" readonly required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Gol Darah</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text" name="gol_darah" value="{{ $data2['gol_darah'] }}" placeholder="Gol Darah" readonly required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Alamat Sekarang</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" type="text" name="alamat_sekarang" placeholder="Masukkan Alamat Sekarang" readonly required>{{ $data2['alamat_sekarang'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Telp. Rumah</label>
                                            <div class="col-md-12">
                                            <input class="form-control form-control-line" value="{{ $data2['telp_rumah'] }}" type="text" name="telp_rumah" placeholder="Masukkan Telp. Rumah" readonly required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">No. Handphone</label>
                                            <div class="col-md-12">
                                            <input class="form-control form-control-line" value="{{ $data2['no_hp'] }}" readonly type="text" name="no_hp" placeholder="Masukkan No. HP" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Tempat Kerja</label>
                                            <div class="col-md-12">
                                                <input class="form-control form-control-line" value="{{ $data2['tempat_kerja'] }}" readonly type="text" name="tempat_kerja" placeholder="Masukkan Tempat Kerjas" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Alamat Kantor</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" type="text" name="alamat_kantor" readonly placeholder="Masukkan Alamat Kantor" required>{{ $data2['alamat_kantor'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Alamat Tempat Praktik</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" type="text" name="alamat_tempat_praktik" readonly placeholder="Masukkan Alamat Tempat Praktik" required>{{ $data2['alamat_tempat_praktik'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Telp. Kantor</label>
                                            <div class="col-md-12">
                                            <input class="form-control form-control-line" type="text" value="{{ $data2['telp_kantor'] }}" readonly name="telp_kantor" placeholder="Masukkan Telp. Kantor" required>
                                            </div>
                                        </div>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Informatika Universitas Jenderal Achmad Yani </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection
