@extends('layouts.app2')

@section('content')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="{{ route('personil.index') }}"><b><img src="{{ asset('asset/image/logo.png') }}" alt="home" /></b><span class="hidden-xs"><img src="{{ asset('asset/image/dispsiad.png') }}" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left pull-left hidden-xs">
                    <li>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                   
                   
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('asset/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->name }}</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i>Profil Diri</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- .Megamenu -->
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs"></span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Forms Elements</li>
                                    <li><a href="form-basic.html">Basic Forms</a></li>
                                    <li><a href="form-layout.html">Form Layout</a></li>
                                    <li><a href="form-advanced.html">Form Addons</a></li>
                                    <li><a href="form-material-elements.html">Form Material</a></li>
                                    <li><a href="form-float-input.html">Form Float Input</a></li>
                                    <li><a href="form-upload.html">File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Advance Forms</li>
                                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                                    <li><a href="form-pickers.html">Form-pickers</a></li>
                                    <li><a href="form-wizard.html">Form-wizards</a></li>
                                    <li><a href="form-typehead.html">Typehead</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                    <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Table Example</li>
                                    <li><a href="basic-table.html">Basic Tables</a></li>
                                    <li><a href="table-layouts.html">Table Layouts</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                    <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                    <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                    <li><a href="editable-tables.html">Editable Tables</a></li>
                                    <li><a href="foo-tables.html">FooTables</a></li>
                                    <li><a href="jsgrid.html">JsGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Charts</li>
                                    <li> <a href="flot.html">Flot Charts</a> </li>
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chart-js.html">Chart-js</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="knob-chart.html">Knob Charts</a></li>
                                    <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                    <li><a href="extra-charts.html">Extra Charts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-12 m-t-40 demo-box">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-purple"><a href="http://wrappixel.com/demos/admin-templates/pixeladmin/inverse/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 1</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-success"><a href="index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 2</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-info"><a href="https://wrappixel.com/demos/admin-templates/pixeladmin/dark/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 3</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-inverse"><a href="https://wrappixel.com/demos/admin-templates/pixeladmin/horizontal-nav-fullwidth/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 4</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-warning"><a href="https://wrappixel.com/demos/admin-templates/pixeladmin/inverse-rtl/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 5</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-danger"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Buy Now</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                   
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
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
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{ asset('asset/plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href=""><i class="ti-user"></i>Profil Diri</a></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Keluar</a></li>
                        </ul>
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
                            <div class="user-bg"> <img width="100%" alt="user" src="{{ asset('asset/image/images/large/img1.jpg') }}">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        @foreach($data2 as $dt)
                                            @if($dt->foto != null)
                                                <a href="javascript:void(0)"><img src="/image/{{ $dt->foto }}" class="thumb-lg img-circle" alt="img"></a>
                                            @else
                                                <a href="javascript:void(0)"><img src="{{ asset('image/avatar.png') }}" class="thumb-lg img-circle" alt="img"></a>
                                            @endif
                                        @endforeach
                                        <?php
                                            $nama=DB::table('users')->select('name')->where('id_anggota', $cari)->value('name');
                                            $temp=DB::table('users')->select('id')->where('id_anggota', $cari)->value('id');
                                            $temp2=DB::table('data_personil')->select('no_hp')->where('user_id', $temp)->value('no_hp');
                                            $temp3=DB::table('data_personil')->select('id')->where('user_id', $temp)->value('id');
                                            $tmpt=DB::table('data_personil')->select('tempat_lahir')->where('id', $temp3)->value('tempat_lahir');
                                            $tgl=DB::table('data_personil')->select('tgl_lahir')->where('id', $temp3)->value('tgl_lahir');
                                            $kodeagama=DB::table('data_personil')->select('kode_agama')->where('id', $temp3)->value('kode_agama');
                                            $namaagama=DB::table('data_agama')->select('agama')->where('id', $kodeagama)->value('agama');
                                        ?>
                                        <h4 class="text-white">{{ $nama }}</h4>
                                        <h5 class="text-white">{{ $cari }}</h5></div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                <?php
                                    $kodepersonil=Db::table('data_personil')->select('id')->where('user_id', $temp)->value('id');
                                ?>
                                <form method="post"  action="{{ route('profile.update', ['profile'=> $kodepersonil]) }}" enctype="multipart/form-data"><input type="hidden" name="_method" value="PATCH">
                                        {{ csrf_field() }}
                                        <input type="hidden" class="form-control" name="id" value="{{ $temp }}"  required>
                                        <input type="file" class="form-control form-control-line" name="foto"  required>
                                        <button type="submit" class="btn btn-success">Ganti Foto</button>

                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                <li class="tab">
                                    <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profil</span> </a>
                                </li>
                                <li class="tab" id="tes">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Detail Profil</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="profile">
                                    <div class="row">
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
                                    <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h4 class="font-bold m-t-30">Skill Set</h4>
                                    <hr>
                                    <h5>Wordpress <span class="pull-right">80%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                    <h5>HTML 5 <span class="pull-right">90%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                    <h5>jQuery <span class="pull-right">50%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                    <h5>Photoshop <span class="pull-right">70%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="settings">
                                    <div class="" style="float:right">
                                        <!-- <button onclick="matikanForm('myForm',false);" class="btn btn-primary">Edit</button>
                                        <button onclick="matikanForm('myForm',true);" class="btn btn-danger">Batal</button> -->
                                    </div>
                                    <form id="myForm2" class="form-horizontal form-material" method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <?php
                                        $tmp3=DB::table('users')->select('name')->where('id_anggota', $cari)->value('name');
                                        $cek=DB::table('data_personil')->select('id')->where('user_id', Auth::user()->id)->value('id');
                                    ?>

                                        <br>
                                        @if($cek==NULL)
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
                                                    <input class="form-control form-control-line" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Tgl. Lahir</label>
                                                <div class="col-md-12">
                                                    <input class="form-control form-control-line" type="date" name="tgl_lahir" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                <div class="row">
                                                <div class="col-md-4 offset-md-3">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="jenis_kelamin" required value="L" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1" >Laki-Laki</label>
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="jenis_kelamin" required value="P" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select class="form-control"  name="kode_agama" placeholder="Agama" required>
                                                <option>Pilih Agama</option>
                                                @foreach($agama as $ag)
                                                    <option value="{{ $ag->id }}">{{ $ag->agama }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Alamat Sekarang</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control form-control-line" type="text" name="alamat_sekarang" placeholder="Masukkan Alamat Sekarang" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Telp. Rumah</label>
                                                <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text" name="telp_rumah" placeholder="Masukkan Telp. Rumah" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">No. Handphone</label>
                                                <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text" name="no_hp" placeholder="Masukkan No. HP" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Tempat Kerja</label>
                                                <div class="col-md-12">
                                                    <input class="form-control form-control-line" type="text" name="tempat_kerja" placeholder="Masukkan Tempat Kerjas" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Alamat Kantor</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control form-control-line" type="text" name="alamat_kantor" placeholder="Masukkan Alamat Kantor" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Alamat Tempat Praktik</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control form-control-line" type="text" name="alamat_tempat_praktik" placeholder="Masukkan Alamat Tempat Praktik" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Telp. Kantor</label>
                                                <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text"  name="telp_kantor" placeholder="Masukkan Telp. Kantor" required>
                                                </div>
                                            </div>
                                        @else
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
                                            @foreach($data2 as $d2)
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Tempat Lahir</label>
                                                <div class="col-md-12">
                                                    <input class="form-control form-control-line" value="{{ $d2->tempat_lahir }}" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Tgl. Lahir</label>
                                                <div class="col-md-12">
                                                    <input class="form-control form-control-line" value="{{ $d2->tgl_lahir }}" type="date" name="tgl_lahir" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                                <div class="row">
                                                @if($d2->jenis_kelamin == 'L')
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
                                                @elseif($d2->jenis_kelamin == 'P')
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
                                                <label for="agama">Agama</label>
                                                <select class="form-control"  name="kode_agama" placeholder="Agama" required>
                                                <option>Pilih Agama</option>
                                                @foreach($agama as $ag)
                                                    <option <?php if($ag->id == $d2->kode_agama) echo 'selected' ; ?> value="{{ $ag->id }}">{{ $ag->agama }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Alamat Sekarang</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control form-control-line" type="text" name="alamat_sekarang" placeholder="Masukkan Alamat Sekarang" required>{{ $d2->alamat_sekarang }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Telp. Rumah</label>
                                                <div class="col-md-12">
                                                <input class="form-control form-control-line" value="{{ $d2->telp_rumah }}" type="text" name="telp_rumah" placeholder="Masukkan Telp. Rumah" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">No. Handphone</label>
                                                <div class="col-md-12">
                                                <input class="form-control form-control-line" value="{{ $d2->no_hp }}" type="text" name="no_hp" placeholder="Masukkan No. HP" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Tempat Kerja</label>
                                                <div class="col-md-12">
                                                    <input class="form-control form-control-line" value="{{ $d2->tempat_kerja }}" type="text" name="tempat_kerja" placeholder="Masukkan Tempat Kerjas" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Alamat Kantor</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control form-control-line" type="text" name="alamat_kantor" placeholder="Masukkan Alamat Kantor" required>{{ $d2->alamat_kantor }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Alamat Tempat Praktik</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control form-control-line" type="text" name="alamat_tempat_praktik" placeholder="Masukkan Alamat Tempat Praktik" required>{{ $d2->alamat_tempat_praktik }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Telp. Kantor</label>
                                                <div class="col-md-12">
                                                <input class="form-control form-control-line" type="text" value="{{ $d2->telp_kantor }}" name="telp_kantor" placeholder="Masukkan Telp. Kantor" required>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit"class="btn btn-success"  style="float:right">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/genu.jpg') }}" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/ritesh.jpg') }}" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/arijit.jpg') }}" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/govinda.jpg') }}" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/hritik.jpg') }}" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/john.jpg') }}" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('asset/plugins/images/users/pawandeep.jpg') }}" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Informatika Universitas Jenderal Achmad Yani </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection
