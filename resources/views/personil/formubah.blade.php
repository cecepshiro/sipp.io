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
                        <h4 class="page-title">Daftar Personel</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Form Ubah Personel</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--.row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Form Ubah Data Personel</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <form method="POST" class="form-horizontal" action="{{ route('personil.update', ['personil'=> $data['kode_personil']]) }}"  enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PATCH">
                            {{ csrf_field() }}
                            <?php
                                $tmp=DB::table('users')->select('id_anggota')->where('id', Auth::user()->id)->value('id_anggota');
                                $tmp2=DB::table('users')->select('name')->where('id', Auth::user()->id)->value('name');
                            ?>
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">ID Anggota</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="hidden" name="user_id" value="{{ Auth::user()->id }}" placeholder="ID Anggota" readonly required>
                                        <input class="form-control" type="text" name="id_anggota" value="{{ $tmp }}" placeholder="ID Anggota" readonly required>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname" class="col-sm-3 control-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="text" name="nama" value="{{ $tmp2 }}" placeholder="Nama" readonly required>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Tmpt. Lahir</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}" placeholder="Masukkan Tempat Lahir" required>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Tgl. Lahir</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                                @if($data->jenis_kelamin == 'L')
                                                <div class="col-md-4 offset-md-3">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="jenis_kelamin" checked required value="L" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1" >Laki-Laki</label>
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="jenis_kelamin" required value="P" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                    </div>
                                                </div>
                                                @elseif($data->jenis_kelamin == 'P')
                                                <div class="col-md-4 offset-md-3">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="jenis_kelamin" required value="L" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1" >Laki-Laki</label>
                                                    </div>
                                                </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="jenis_kelamin" checked required value="P" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                    </div>
                                                </div>
                                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Agama</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <select class="form-control"  name="agama" placeholder="Agama" required>
                                                <option>Pilih Agama</option>
                                                <option <?php if($data->agama == "Islam") echo 'selected' ; ?> value="Islam">Islam</option>
                                                <option <?php if($data->agama == "Kristen") echo 'selected' ; ?> value="Kristen">Kristen</option>
                                                <option <?php if($data->agama == "Protestan") echo 'selected' ; ?> value="Protestan">Protestan</option>
                                                <option <?php if($data->agama == "Hindu") echo 'selected' ; ?> value="Hindu">Hindu</option>
                                                <option <?php if($data->agama == "Budha") echo 'selected' ; ?> value="Budha">Budha</option>
                                                </select>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Suku Bangsa</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="text" name="suku_bangsa" value="{{ $data->suku_bangsa }}" maxlength="13" onkeypress="return isNumberKey(event)" placeholder="Masukkan Telp. Rumah" required>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Gol Darah</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <select class="form-control"  name="gol_darah" placeholder="Gol Darah" required>
                                                    <option>Pilih Gol. Darah</option>
                                                    <option <?php if($data->gol_darah == "A ") echo 'selected' ; ?> value="A">A</option>
                                                    <option <?php if($data->gol_darah == "B ") echo 'selected' ; ?> value="B">B</option>
                                                    <option <?php if($data->gol_darah == "AB") echo 'selected' ; ?> value="AB">AB</option>
                                                    <option <?php if($data->gol_darah == "O ") echo 'selected' ; ?> value="O">O</option>
                                        </select>
                                        <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Alamat Sekarang</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <textarea class="form-control" type="text" name="alamat_sekarang" placeholder="Masukkan Alamat Sekarang" required>{{ $data->alamat_sekarang }}</textarea>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Telp.Rumah</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="text" name="telp_rumah" value="{{ $data->telp_rumah }}" maxlength="13" onkeypress="return isNumberKey(event)" placeholder="Masukkan Telp. Rumah" required>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">No. Handphone</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="text" name="no_hp" value="{{ $data->no_hp }}" maxlength="13" onkeypress="return isNumberKey(event)" placeholder="Masukkan No. HP" required>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Tmpt. Kerja</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="text" name="tempat_kerja" value="{{ $data->tempat_kerja }}" placeholder="Masukkan Tempat Kerjas" required>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Alamat Kantor</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <textarea class="form-control" type="text" name="alamat_kantor" value="{{ $data->alamat_kantor }}" placeholder="Masukkan Alamat Kantor" required>{{ $data->alamat_kantor }}</textarea>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Alamat Tempat Praktik</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <textarea class="form-control" type="text" name="alamat_tempat_praktik" value="{{ $data->alamat_tempat_praktik }}" placeholder="Masukkan Alamat Tempat Praktik" required>{{ $data->alamat_tempat_praktik }}</textarea>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Telp. Kantor</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <input class="form-control" type="text" name="telp_kantor" value="{{ $data->telp_kantor  }}" maxlength="13" onkeypress="return isNumberKey(event)" placeholder="Masukkan Telp. Kantor" required>
                                            <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9 text-right">
                                        <a href="{{ route('personil.index') }}" class="btn btn-outline-danger waves-effect waves-light m-t-10">Batal</a>
                                        <button type="submit" class="btn btn-outline-info waves-effect waves-light m-t-10">Ubah Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            
@endsection