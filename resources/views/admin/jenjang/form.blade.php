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
                        <h4 class="page-title">Data Master</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Data Master</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <!--.row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Form Master Jenjang Pendidikan</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <form method="post" id="insert_masterjenjang" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="table-repsonsive">
                                    <span id="errormasterjenjang"></span>
                                    <div style="overflow-x:auto;">
                                        <table class="table table-bordered nowrap" style="width:100%;" id="item_masterjenjang">
                                            <tr>
                                                <th>Kode Jenjang</th>
                                                <th>Jenjang</th>
                                                <th>Keterangan</th>
                                                <th>
                                                    <center><button type="button" name="addjenjang" class="btn btn-success btn-sm addjenjang">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button></center>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div align="center">
                                    <input type="submit" name="submit" class="btn btn-outline-success" value="Simpan" />

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        
@endsection


<script>
//dynamic form input data master bidang

    $(document).ready(function(){
        $(document).on('click', '.addjenjang', function(){

        var adaw= $.get("/kode_jenjang/"+ $('#hasilmasterjenjang > option').length,function(data, status){
        var html = '';
        html += '<tr>';
        html += '<td><select id="hasilmasterjenjang" readonly name="kode_jenjang[]" placeholder="Masukan Kode Jenjang" class="form-control item_kode_jenjang" required><option value="'+ data +'">'+ data +'</option></select></td>';
        html += '<td><input type="text" name="jenjang[]" placeholder="Masukan Jenjang" class="form-control item_jenjang" required/></td>';
        html += '<td><input type="text" name="keterangan[]" placeholder="Masukan Keterangan" class="form-control item_keterangan" required/></td>';
        html += '<td><center><button type="button" name="removejenjang" class="btn btn-danger btn-sm removejenjang"><span class="glyphicon glyphicon-minus" required></span></button></center></td></tr>';
        $('#item_masterjenjang').append(html);
        });
        //  console.log($('#hasilmasterjenjang > option').length);
        });
        $(document).on('click', '.removejenjang', function(){
        $(this).closest('tr').remove();
        });

        $('#insert_masterjenjang').on('submit', function(event){
        event.preventDefault();
        var error = '';
        $('.item_kode_jenjang').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Kode Jenjang "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });
        
        $('.item_jenjang').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Jenjang "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

         $('.item_keterangan').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Keterangan "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        var form_data = $(this).serialize();
        if(error == '')
        {
        $.ajax({
            url:"/simpanjenjang",
            method:"POST",
            data:form_data,
            success:function(data)
            {
                //console.log(data);
            $('#item_masterjenjang').find("tr:gt(0)").remove();
            $('#errormasterjenjang').html('<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
            }
        });
        }
        else
        {
        $('#errormasterjenjang').html('<div class="alert alert-danger alert-dismissable">'+error+'</div>');
        }
        });
        
    });
</script>