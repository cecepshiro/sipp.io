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
                        <h4 class="page-title">Daftar Pengalaman</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Form Ubah Pengalaman</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--.row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Form Ubah Bidang Profesi Personil</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <form method="POST" class="form-horizontal" action="{{ route('bidangpropers.updatepers') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Kode Bidang Profesi Personil</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" maxlenght="5"  placeholder="Masukkan Kode Bidang ProPers" readonly class="form-control" name="kode_bidangpropers" value="{{ $data['kode_bidangpropers'] }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Bidang Profesi</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <select class="form-control" name="kode_bidangprofesi" required autofocus>
                                                <option value="">Pilih Bidang Profesi</option>
                                                @foreach($bidang as $b)
                                                <option <?php if($data['kode_bidangprofesi'] == $b->kode_bidangprofesi) echo 'selected' ; ?> value="{{ $b->kode_bidangprofesi }}">{{ $b->bidangprofesi }}</option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputname" class="col-sm-3 control-label">Bukti/Lampiran</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="file"  accept=".pdf,.doc,.docx"  onChange="validate(this.value)"  placeholder="Masukkan Lampiran" class="form-control" name="lampiran" value="{{ $data['lampiran'] }}" required>
                                            <div class="input-group-addon"><i class="ti-menu-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9 text-right">
                                        <a href="{{ url('/pengalamanpers') }}" class="btn btn-outline-danger m-t-10">Batal</a>
                                        <button type="submit" class="btn btn-outline-success m-t-10">Ubah Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <script>
function validate(file) {
    var ext = file.split(".");
    ext = ext[ext.length-1].toLowerCase();      
    var arrayExtensions = ["doc" , "docx", "pdf"];

    if (arrayExtensions.lastIndexOf(ext) == -1) {
        alert("Jenis Berkas Tidak Didukung.");
        $("#fileinput").val("");
    }
}
</script>      
@endsection