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
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
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
                    <h4 class="page-title">Data Master</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Jenjang Pendidikan</li>
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
                        <form method="POST" class="form-horizontal" action="{{ route('jenjang.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputname" class="col-sm-3 control-label">
                                    <br>Jenjang Pendidikan*</label>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <table class="table" id="dynamic_field">
                                            <tr>
                                                <td>
                                                    <input type="text" name="jenjang[]" maxlength="30" placeholder="Masukkan Jenjang Pendidikan"
                                                        class="form-control" required />
                                                </td>
                                                <td>
                                                    <button type="button" name="add" id="add" class="btn btn-outline-primary btn-sm">Tambah</button>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-8 text-right">
                                                    <a href="{{ route('jenjang.index') }}" class="btn btn-danger waves-effect waves-light m-t-10">Batal</a>
                                                    <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">Simpan</button>
                                                </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

    @endsection

    <!-- Multiple Input -->
    <script type="text/javascript">
        $(document).ready(function () {
            var postURL = "<?php echo url('addmore'); ?>";
            var i = 1;

            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '" class="dynamic-added"><td><input type="text" name="jenjang[]" placeholder="Masukkan Jenjang Pendidikan" class="form-control" maxlength="30" required/></td><td><button type="button" name="remove" id="' +
                    i + '" class="btn btn-outline-danger btn-sm btn_remove">Hapus</button></td></tr>');
            });


            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#submit').click(function () {
                $.ajax({
                    url: postURL,
                    method: "POST",
                    data: $('#add_detail').serialize(),
                    type: 'json',
                    success: function (data) {
                        if (data.error) {
                            printErrorMsg(data.error);
                        } else {
                            i = 1;
                            $('.dynamic-added').remove();
                            $('#add_detail')[0].reset();
                            $(".print-success-msg").find("ul").html('');
                            $(".print-success-msg").css('display', 'block');
                            $(".print-error-msg").css('display', 'none');
                            $(".print-success-msg").find("ul").append(
                                '<li>Record Inserted Successfully.</li>');
                        }
                    }
                });
            });

            function printErrorMsg(msg) {

                $(".print-error-msg").find("ul").html('');

                $(".print-error-msg").css('display', 'block');

                $(".print-success-msg").css('display', 'none');

                $.each(msg, function (key, value) {

                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');

                });

            }

        });
    </script>