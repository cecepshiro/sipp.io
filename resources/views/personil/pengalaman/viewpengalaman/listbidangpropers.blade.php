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
                        $('#pesanFlash').html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Data Terhapus</div>');
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
            }else{           
            }
        }
    </script>
     <script>
             $(document).ready(function() {
                $('#tabelbidang').DataTable();
            } );
    </script>
<h3 class="box-title m-b-0">List Bidang Profesi Personel</h3>
<hr>
<div class="table-responsive">
<br>
<span id="pesanFlash"></span>
<!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
<table id="tabelbidang" class="cell-border compact nowrap" style="width:100%">
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
            $cek=DB::table('data_bidangpropers')->select('lampiran')->where('user_id', Auth::user()->id)->value('lampiran');
        ?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $d5->kode_bidangpropers }}</td>
            <td>{{ $namabidang }}</td>
            <td>
            @if($cek==null)
            <a href="{{ route('bidangpropers.editpers', $d5->kode_bidangpropers) }}" class="btn btn-outline-warning btn-sm">Masukan Lampiran</a>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData1('{{$d5->kode_bidangpropers}}')">Hapus</a>   
            @elseif($cek!=null)
            <a href="{{ route('bidangpropers.editpers', $d5->kode_bidangpropers) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData1('{{$d5->kode_bidangpropers}}')">Hapus</a>   
            @endif
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