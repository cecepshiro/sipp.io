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
                                <li class="tab active">
                                    <a href="#pengalaman" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Pengalaman Personel</span> </a>
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
                                <div class="tab-pane active" id="pengalaman">
                                    <div class="row">
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
                                <div class="tab-pane" id="pendidikan">
                                    @include('personil.pengalaman.formpengalaman.formpendidikan')
                                </div>
                                <div class="tab-pane" id="pekerjaan">
                                    @include('personil.pengalaman.formpengalaman.formpekerjaan')
                                    <hr>
                                    <hr>
                                    <div class="datapekerjaan">
                                    </div>
                                </div>
                                <div class="tab-pane" id="bidang">
                                    @include('personil.pengalaman.formpengalaman.formbidangprofesi')
                                </div>
                                <div class="tab-pane" id="praktik">
                                    @include('personil.pengalaman.formpengalaman.formpraktikprofesi')
                                    <hr>
                                    <hr>
                                    <div class="datapraktikpro">
                                    </div>
                                </div>
                                <div class="tab-pane" id="profesional">
                                    @include('personil.pengalaman.formpengalaman.formpengalamanprofesional')
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
        
@endsection
<script src="{{ asset('asset/js/dynamicform.js') }}"></script>
<script>
    $(document).ready(function(){      
    //$('.datapendidikan').load("/getpendidikan");
    $(document).on('click', '.tambah3', function(){
    var html = '';
    html += '<tr>';
    html += '<td><select name="kode_jenjang[]" placeholder="Masukan Jenjang"  class="form-control item_jenjang"><option value="">Pilih Jenjang Unit</option>@foreach($jenjang as $j) <option>{{ $j->jenjang }}</option> @endforeach</select></td>';
    html += '<td><input type="text" name="nama_pt[]" placeholder="Masukan Perguruan Tinggi" class="form-control item_perguruan" /></td>';
    html += '<td><input type="text" name="kota[]" placeholder="Masukan Kota" class="form-control item_kota" /></td>';
    html += '<td><input type="text" name="bidang_ilmu[]" placeholder="Masukan Bidang Ilmu" class="form-control item_bidang" /></td>';
    html += '<td><input type="text" name="tahun_lulus[]" placeholder="Masukan Tahun Lulus" class="form-control item_lulus" /></td>';
    html += '<td><button type="button" name="hapus3" class="btn btn-danger btn-sm hapus3"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
    $('#tabelpendidikan').append(html);
    });
    
    $(document).on('click', '.hapus3', function(){
    $(this).closest('tr').remove();
    });

    $('#formpendidikan').on('submit', function(event){
    event.preventDefault();
    var error = '';
    $('.item_jenjang').each(function(){
    var count = 1;
    if($(this).val() == '')
    {
        error += "<p>Masukan Jenjang Pendidikan "+count+" Row</p>";
        return false;
    }
    count = count + 1;
    });

    $('.item_perguruan').each(function(){
    var count = 1;
    if($(this).val() == '')
    {
        error += "<p>Masukan Nama Perguruan "+count+" Row</p>";
        return false;
    }
    count = count + 1;
    });

    $('.item_kota').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Kota "+count+" Row</p>";
            return false;
        }
    count = count + 1;
    });

    $('.item_lulus').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Tahun Lulus "+count+" Row</p>";
            return false;
        }
    count = count + 1;
    });

    $('.item_bidang').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Bidang  Ilmu "+count+" Row</p>";
            return false;
        }
    count = count + 1;
    });

    var form_data = $(this).serialize();
    if(error == '')
    {
    $.ajax({
        url:"/simpanpendidikan",
        method:"POST",
        data:form_data,
        success:function(data)
        {
           // console.log(data);
        $('#tabelpendidikan').find("tr:gt(0)").remove();
        //$('.datapengembanganpro').load("/getpengembanganpro");
        $('#error4').html('<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
        }
    });
    }
    else
    {
    $('#error4').html('<div class="alert alert-danger alert-dismissable">'+error+'</div>');
    }
    });
    
});
</script>