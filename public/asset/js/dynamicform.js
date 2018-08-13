    //dynamic form input bidang profesi
    $(document).ready(function(){      
        var postURL = "<?php echo url('addmore'); ?>";
        var i=1;  

        $('#add').click(function(){  
            i++;  
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="bidangprofesi[]" placeholder="Masukkan Nama Bidang" class="form-control" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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

    //dynamic form input pekerjaan

    $(document).ready(function(){
        $('.datapekerjaan').load("/getpekerjaan");
        $(document).on('click', '.add', function(){
        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="nama_lembaga[]" placeholder="Masukan Lembaga" class="form-control item_nama" /></td>';
        html += '<td><input type="text" name="alamat[]" placeholder="Masukan Alamat" class="form-control item_alamat" /></td>';
        html += '<td><input type="text" name="no_telp[]" placeholder="Masukan No.Telp" class="form-control item_telp" /></td>';
        html += '<td><input type="text" name="pekerjaan[]" placeholder="Masukan Jabatan" class="form-control item_pekerjaan" /></td>';
        html += '<td><input type="date" name="dari[]" placeholder="Masukan Tgl. Mulai" class="form-control item_dari" /></td>';
        html += '<td><input type="date" name="sampai[]" placeholder="Masukan Tgl. Selesai" class="form-control item_sampai" /></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
        $('#item_table').append(html);
        });
        
        $(document).on('click', '.remove', function(){
        $(this).closest('tr').remove();
        });

        $('#insert_form').on('submit', function(event){
        event.preventDefault();
        var error = '';
        $('.item_nama').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Nama Lembaga "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });
        
        $('.item_alamat').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Alamat "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        $('.item_telp').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan No. Telp "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        $('.item_pekerjaan').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Pekerjaan "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        $('.item_dari').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Tgl Awal Pengalaman "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        $('.item_sampai').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Tgl Akhir Pengalaman "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });
   

        var form_data = $(this).serialize();
        if(error == '')
        {
        $.ajax({
            url:"/simpanpekerjaan",
            method:"POST",
            data:form_data,
            success:function(data)
            {
                //console.log(data);
            $('#item_table').find("tr:gt(0)").remove();
            //$('#erroal').show();
            $('.datapekerjaan').load("/getpekerjaan");
            $('#error').html('<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
            }
        });
        }
        else
        {
        $('#error').html('<div class="alert alert-danger alert-dismissable">'+error+'</div>');
        }
        });
        
    });

    //dynamic form input praktik profesi

    $(document).ready(function(){   
        $('.datapraktikpro').load("/getpraktikpro");   
        $(document).on('click', '.tambah', function(){
        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="pemeriksaan[]" placeholder="Masukan Tujuan" class="form-control item_pemeriksaan" /></td>';
        html += '<td><input type="text" name="tindakan[]" placeholder="Masukan Tindakan" class="form-control item_tindakan" /></td>';
        html += '<td><input type="date" name="tahunpelaksanaan[]" placeholder="Masukan Tahun" class="form-control item_pelaksanaan" /></td>';
        html += '<td><button type="button" name="hapus" class="btn btn-danger btn-sm hapus"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
        $('#tabel_praktik').append(html);
        });
        
        $(document).on('click', '.hapus', function(){
        $(this).closest('tr').remove();
        });

        $('#formpraktik').on('submit', function(event){
        event.preventDefault();
        var error = '';
        $('.item_pemeriksaan').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Pemeriksaan "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });
        
        $('.item_tindakan').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Tindakan "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        $('.item_pelaksanaan').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Tahun Pelaksanaan "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        var form_data = $(this).serialize();
        if(error == '')
        {
        $.ajax({
            url:"/simpanpraktikprofesi",
            method:"POST",
            data:form_data,
            success:function(data)
            {
                //console.log(data);
            $('#tabel_praktik').find("tr:gt(0)").remove();
            //$('#erroal').show();
            $('.datapraktikpro').load("/getpraktikpro");
            $('#error2').html('<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
            }
        });
        }
        else
        {
        $('#error2').html('<div class="alert alert-danger alert-dismissable">'+error+'</div>');
        }
        });
        
    });



    //dynamic form input praktik profesi

    $(document).ready(function(){      
        $('.datapengembanganpro').load("/getpengembanganpro");
        $(document).on('click', '.tambah2', function(){
        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="kegiatan[]" placeholder="Masukan Kegiatan" class="form-control item_kegiatan" /></td>';
        html += '<td><input type="text" name="tempat[]" placeholder="Masukan Tempat" class="form-control item_tempat" /></td>';
        html += '<td><input type="text" name="tahun[]" placeholder="Masukan Tahun" maxlenght="4" class="form-control item_tahun" /></td>';
        html += '<td><button type="button" name="hapus2" class="btn btn-danger btn-sm hapus2"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
        $('#tabelpengembanganpro').append(html);
        });
        
        $(document).on('click', '.hapus2', function(){
        $(this).closest('tr').remove();
        });

        $('#formpengembanganpro').on('submit', function(event){
        event.preventDefault();
        var error = '';
        $('.item_kegiatan').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Kegiatan "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        $('.item_tempat').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
            error += "<p>Masukan Tempat "+count+" Row</p>";
            return false;
        }
        count = count + 1;
        });

        $('.item_tahun').each(function(){
            var count = 1;
            if($(this).val() == '')
            {
                error += "<p>Masukan Tahun "+count+" Row</p>";
                return false;
            }
        count = count + 1;
        });

        var form_data = $(this).serialize();
        if(error == '')
        {
        $.ajax({
            url:"/pengembanganpro",
            method:"POST",
            data:form_data,
            success:function(data)
            {
               // console.log(data);
            $('#tabelpengembanganpro').find("tr:gt(0)").remove();
            $('.datapengembanganpro').load("/getpengembanganpro");
            //$('#erroal').show();
            $('#error3').html('<div class="alert alert-success alert-dismissable">Data Tersimpan</div>');
            }
        });
        }
        else
        {
        $('#error3').html('<div class="alert alert-danger alert-dismissable">'+error+'</div>');
        }
        });
        
    });