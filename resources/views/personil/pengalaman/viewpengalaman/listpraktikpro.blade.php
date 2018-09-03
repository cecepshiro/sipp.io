@extends('layouts.app2')
    <script>
        function hapusData5(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletepraktikpro/'+ id,
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
<h3 class="box-title m-b-0">List Pengalaman Praktik Profesi Personel</h3>
<hr>
<div class="table-responsive">
<br>
<!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
<table id="example4" class="cell-border compact nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Pemeriksaan</th>
            <th>Tindakan</th>
            <th>Tahun Pelaksanaan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Pemeriksaan</th>
            <th>Tindakan</th>
            <th>Tahun Pelaksanaan</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 0;?> @forelse($data3 as $d3)
        <?php $no++ ;?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $d3->pemeriksaan }}</td>
            <td>{{ $d3->tindakan }}</td>
            <td>{{ $d3->tahunpelaksanaan }}</td>
            <td>
                <button class="btn btn-outline-primary btn-sm">Edit</button>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData5({{$d3->kode_praktik}})">Hapus</a>   
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Data Kosong</td>
        </tr>
        @endforelse
        </tr>
    </tbody>
</table>
</div>