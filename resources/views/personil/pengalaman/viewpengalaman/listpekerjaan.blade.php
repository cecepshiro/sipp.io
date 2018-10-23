@extends('layouts.app2')
<script>
        function hapusPekerjaan(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletepekerjaan/'+ id,
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
                $('#tabelpengalaman').DataTable();
            } );
            </script>

<h3 class="box-title m-b-0">List Pengalaman Pekerjaan Personel</h3>
<hr>
<div class="table-responsive">
<br>
<span id="pesanFlash"></span>
<table id="tabelpengalaman" class="cell-border compact nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lembaga</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Jabatan</th>
            <th>Mulai</th>
            <th>Sampai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Nama Lembaga</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Jabatan</th>
            <th>Mulai</th>
            <th>Sampai</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 0;?> 
        @forelse($data4 as $d4)
        <?php $no++ ;?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $d4->nama_lembaga }}</td>
            <td>{{ $d4->alamat }}</td>
            <td>{{ $d4->no_telp }}</td>
            <td>{{ $d4->pekerjaan }}</td>
            <td>{{ $d4->dari }}</td>
            <td>{{ $d4->sampai }}</td>
            <td>
                <a href="{{ route('pekerjaan.edit', $d4->kode_pekerjaan) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusPekerjaan('{{$d4->kode_pekerjaan}}')">Hapus</a>   
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