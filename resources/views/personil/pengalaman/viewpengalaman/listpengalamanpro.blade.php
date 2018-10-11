@extends('layouts.app2')
    <script>
        function hapusData4(id) {
            if (confirm("Apakah anda akan menghapus ini ?!")) {
                $.ajax({
                    url: '/deletepengembanganpro/'+ id,
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
<h3 class="box-title m-b-0">List Pengembangan Profesional Personel</h3>
<hr>
<div class="table-responsive">
<br>

<table id="example3" class="cell-border compact nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tempat</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tempat</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 0;?> @forelse($data2 as $d2)
        <?php $no++ ;?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $d2->kegiatan }}</td>
            <td>{{ $d2->tempat }}</td>
            <td>{{ $d2->tahun }}</td>
            <td>
                <button class="btn btn-outline-primary btn-sm">Edit</button>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData4('{{$d2->kode_pro}}')">Hapus</a>   
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