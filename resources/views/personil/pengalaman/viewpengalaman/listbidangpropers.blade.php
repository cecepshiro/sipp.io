@extends('layouts.app2')
<script>
        function hapusData1(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletebidangpro/'+ id,
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
<h3 class="box-title m-b-0">List Bidang Profesi Personel</h3>
<hr>
<div class="table-responsive">
<br>
<!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
<table id="example5" class="cell-border compact nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Bidang Profesi Pers</th>
            <th>Bidang Profesi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Kode Bidang Profesi</th>
            <th>Bidang Profesi</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 0;?> 
        @forelse($data5 as $d5)
        <?php $no++ ;
            $temp=DB::table('data_bidangpropers')->select('kode_bidangprofesi')->where('kode_bidangpropers', $d5->kode_bidangpropers )->value('kode_bidangprofesi');
            $namabidang=DB::table('data_bidangprofesi')->select('bidangprofesi')->where('kode_bidangprofesi', $temp )->value('bidangprofesi');
        ?>
        <?php
        ?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $d5->kode_bidangpropers }}</td>
            <td>{{ $namabidang }}</td>
            <td>
                <button class="btn btn-outline-primary btn-sm">Edit</button>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData1({{$d5->kode_bidangpropers}})">Hapus</a>   
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Data Kosong</td>
        </tr>
        @endforelse
        </tr>
    </tbody>
</table>
</div>