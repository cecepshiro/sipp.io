@extends('layouts.app2')
<h3 class="box-title m-b-0">List Pendidikan Profesional Personel</h3>
<hr>
<div class="table-responsive">
<br>
<!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
<table id="example" class="display nowrap" style="width:100%">
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