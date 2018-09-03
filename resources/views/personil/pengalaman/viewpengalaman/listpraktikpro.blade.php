@extends('layouts.app2')
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