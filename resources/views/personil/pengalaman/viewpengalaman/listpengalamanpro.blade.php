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
                $('#tabelpro').DataTable();
            } );
    </script>
<h3 class="box-title m-b-0">List Pengembangan Profesional Personel</h3>
<hr>
<div class="table-responsive">
<br>
<span id="pesanFlash"></span>
<table id="tabelpro" class="cell-border compact nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tempat</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;?> @forelse($data2 as $d2)
        <?php $no++;
        $cek=DB::table('data_pengembangan_pro')->select('lampiran')->where('user_id', Auth::user()->id)->value('lampiran');
        ?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $d2->kegiatan }}</td>
            <td>{{ $d2->tempat }}</td>
            <td>{{ $d2->tahun }}</td>
            <td>
            @if($cek==null)
            <a href="{{ route('pengembanganprofesional.edit', $d2->kode_pro) }}" class="btn btn-outline-warning btn-sm">Masukan Lampiran</a>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData4('{{$d2->kode_pro}}')">Hapus</a>   
            @elseif($cek!=null)
            <a href="{{ route('pengembanganprofesional.edit', $d2->kode_pro) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                <a class="btn btn-outline-danger btn-sm remove-record" onclick="hapusData4('{{$d2->kode_pro}}')">Hapus</a>
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