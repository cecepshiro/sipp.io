@extends('layouts.app2')
<h3 class="box-title m-b-0">List Bidang Profesi Personel</h3>
<hr>
<div class="table-responsive">
<br>
<!-- <table id="example" class="table table-striped table-bordered" style="width:100%"> -->
<table id="example5" class="cell-border compact nowrap" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Bidang Profesi</th>
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
            $temp=DB::table('data_bidangprofesi')->select('bidangprofesi')->where('kode_bidangprofesi', $d5->kode_bidangprofesi )->value('bidangprofesi');
        ?>
        <?php
        ?>
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $d5->kode_bidangpropers }}</td>
            <td>{{ $temp }}</td>
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