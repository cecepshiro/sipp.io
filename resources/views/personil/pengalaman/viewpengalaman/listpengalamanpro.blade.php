@extends('layouts.app2')
<h3 class="box-title m-b-0">List Pengembangan Profesional Personel</h3>
<hr>
<div class="table-responsive">
<br>

<table id="example3" class="display nowrap" style="width:100%">
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