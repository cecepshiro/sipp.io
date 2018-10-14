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
                                <!-- <li class="tab active">
                                    <a href="#pengalaman" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Pengalaman Personel</span> </a>
                                </li> -->
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
                                    @include('personil.pengalaman.formpengalaman.formpendidikan')
                                    <hr>
                                    <hr>
                                    <div class="datapendidikan">
                                    </div>
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
                                    <hr>
                                    <hr>
                                    <div class="databidangpropers">
                                    </div>
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
            </div>
        
@endsection



<script type="text/javascript">

        //dynamic form input bidang profesi
        $(document).ready(function(){      
        var postURL = "<?php echo url('addmore'); ?>";
        var i=1;  

        $('#add').click(function(){  
            i++;  
            //$('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><select name="bidangprofesi[]" placeholder="Masukkan Nama Bidang" class="form-control" /><option>Pilih Bidang Profesi</option><option value="1">Tes</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
        });  


        $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
        });  


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#submit').click(function(){            
            $.ajax({  
                    url:postURL,  
                    method:"POST",  
                    data:$('#add_detail').serialize(),
                    type:'json',
                    success:function(data)  
                    {
                        if(data.error){
                            printErrorMsg(data.error);
                        }else{
                            i=1;
                            $('.dynamic-added').remove();
                            $('#add_detail')[0].reset();
                            $(".print-success-msg").find("ul").html('');
                            $(".print-success-msg").css('display','block');
                            $(".print-error-msg").css('display','none');
                            $(".print-success-msg").find("ul").append('<li>Data Tersimpan</li>');
                        }
                    }  
            });  
        });
        function printErrorMsg (msg) {

            $(".print-error-msg").find("ul").html('');

            $(".print-error-msg").css('display','block');

            $(".print-success-msg").css('display','none');

            $.each( msg, function( key, value ) {

            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

            });

        }

    });  

</script>

<script src="{{ asset('asset/js/dynamicform.js') }}"></script>
<script>

    $(document).ready(function(){      
    // var length = $('#test2 > option').length;
    
    $('.datapendidikan').load("/getpendidikan");
   
    $(document).on('click', '.tambah3', function(){
             
    var adaw= $.get("buatkode/"+  $('#hasilpendidikan > option').length ,function(data, status){
    var html = '';
    html += '<tr>';
    html += '<td><select id="hasilpendidikan"  readonly name="kode_pendidikan[]" placeholder="Masukan Kode Pendidikan" class="form-control item_kode_pendidikan" required><option value="'+ data +'">'+ data +'</option></select></td>';
    html += '<td><select name="kode_jenjang[]" placeholder="Masukan Jenjang" class="form-control item_jenjang" required><option value="">Pilih Jenjang Unit</option>@foreach($jenjang as $j)<option value="{{ $j->kode_jenjang }}">{{ $j->jenjang }}</option>@endforeach</select></td>';
    html += '<td><input type="text" name="nama_pt[]" placeholder="Masukan Perguruan Tinggi" class="form-control item_perguruan" required/></td>';
    html += '<td><input type="text" name="kota[]" maxlength="50" placeholder="Masukan Kota" class="form-control item_kota" required/></td>';
    html += '<td><input type="text" name="bidang_ilmu[]" maxlength="100" placeholder="Masukan Bidang Ilmu" class="form-control item_bidang" required/></td>';
    html += '<td><input type="text" maxlength="4" onkeypress="return isNumberKey(event)"  name="tahun_lulus[]" placeholder="Masukan Tahun Lulus" class="form-control item_lulus" required/></td>';
    html += '<td><center><button type="button" name="hapus3" class="btn btn-danger btn-sm hapus3"><span class="glyphicon glyphicon-minus"></span></button></center></td></tr>';
    $('#tabelpendidikan').append(html);
    });
        // console.log($('#hasiljenjang > option').length);
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

    $('.item_bidang').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Bidang  Ilmu "+count+" Row</p>";
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
        $('.datapendidikan').load("/getpendidikan");
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

<!-- Form bidang profesi -->

<script>
    $(document).ready(function(){      
    // var length = $('#test2 > option').length;
    $('.databidangpropers').load("/getbidangpropers");

    $(document).on('click', '.tambahbidangpers', function(){
    var adaw= $.get("buatkodebidangpropers/"+  $('#hasilbidangpropers > option').length ,function(data, status){
    var html = '';
    html += '<tr>';
    html += '<td><select id="hasilbidangpropers"  readonly name="kode_bidangpropers[]" placeholder="Masukan Kode Bidang ProPers" class="form-control item_kode_pers" required><option value="'+ data +'">'+ data +'</option></select></td>';
    html += '<td><select name="kode_bidangprofesi[]" placeholder="Masukan Bidang" class="form-control item_bidang" required><option value="">Pilih Bidang Profesi</option>@foreach($bidang as $mbidang) <option value="{{ $mbidang->kode_bidangprofesi }}">{{ $mbidang->bidangprofesi }}</option> @endforeach</select></td>';
    html += '<td><center><button type="button" name="hapusbidangpers" class="btn btn-danger btn-sm hapus3"><span class="glyphicon glyphicon-minus"></span></button></center></td></tr>';
    $('#tabelbidangprofesi').append(html);
    });
        // console.log($('#hasiljenjang > option').length);
    });


    $(document).on('click', '.hapusbidangpers', function(){
    $(this).closest('tr').remove();
    });

    $('#formbidangbidangprofesipers').on('submit', function(event){
    event.preventDefault();
    var error = '';
    $('.item_kode_pers').each(function(){
    var count = 1;
    if($(this).val() == '')
    {
        error += "<p>Masukan Kode Bidang Personil "+count+" Row</p>";
        return false;
    }
    count = count + 1;
    });

    $('.item_bidang').each(function(){
    var count = 1;
    if($(this).val() == '')
    {
        error += "<p>Masukan Bidang "+count+" Row</p>";
        return false;
    }
    count = count + 1;
    });

    var form_data = $(this).serialize();
    if(error == '')
    {
    $.ajax({
        url:"/simpanbidangprofesipers",
        method:"POST",
        data:form_data,
        success:function(data)
        {
        // console.log(data);
        $('#tabelbidangprofesi').find("tr:gt(0)").remove();
        $('.databidangpropers').load("/getbidangpropers");
        $('#errorbidang').html('<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
        }
    });
    }
    else
    {
    $('#errorbidang').html('<div class="alert alert-danger alert-dismissable">'+error+'</div>');
    }
    });

    });
</script>