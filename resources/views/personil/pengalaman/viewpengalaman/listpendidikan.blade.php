@extends('layouts.app2')

    <script>
        function hapusData3(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletependidikan/'+ id,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);             
                           
                        } else if (data['error']) {
                            alert(data['error']);
                        }
                        window.location.reload();
                        
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
<h3 class="box-title m-b-0">List Pendidikan Profesional Personel</h3>
<hr>
<div class="table-responsive">
<br>
<!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
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
        @forelse($data5 as $d5)
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
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData3({{$d5->kode_pendidikan}})">Hapus</a>   
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
</div>