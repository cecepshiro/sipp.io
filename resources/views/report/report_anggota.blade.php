<html>
<header>
<link href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
</header>
<table class="table table-bordered-custom" style="width:100%">
    <tr>
        <td colspan="16">Markas Besar Angkatan Darat Dinas Psikologi</td>
    </tr>
    <tr>
        <td colspan="16" align="center">LAPORAN ANGGOTA</td>
    </tr>
    <div style="font-size: 15px;">
    <?php
        $new=DB::table('data_personil')->select(DB::raw('count(*) as baru'))->value('id_anggota');
        $man=DB::table('data_personil')->select(DB::raw('count(*) as laki'))->where('jenis_kelamin', 'L')->value('id_anggota');
        $woman=DB::table('data_personil')->select(DB::raw('count(*) as perempuan'))->where('jenis_kelamin', 'P')->value('id_anggota');
        $sum=DB::table('data_personil')->select(DB::raw('count(*) as total'))->value('id_anggota');
    ?>
    <tr>
        <td colspan="16" style="background-color:yellow;">I. JUMLAH ANGGOTA</td>
    </tr>
    <tr>
        <td colspan="4" width="15%">Jumlah Anggota</td>
        <td colspan="12"  width="40%" >{{ $sum }} Anggota</td>
    </tr>
    <tr>
        <td colspan="4"  width="15%" >Jumlah Anggota Laki-Laki</td>
        <td colspan="12"  width="5%" >{{ $man }} Anggota</td>
    </tr>
    <tr>
        <td colspan="4" width="15%">Jumlah Anggota Perempuan</td>
        <td colspan="12" width="5%">{{ $woman }} Anggota</td>
    </tr>
    <tr>
        <td colspan="16" style="background-color:yellow;">II. DAFTAR ANGGOTA</td>
    </tr>
    <tr>
        <td style="background-color:gray;" width="5%">No.</td>
        <td style="background-color:gray;" colspan="1" width="10%">NRP</td>
        <td style="background-color:gray;" colspan="2" width="30%">Nama Anggota</td>
        <td style="background-color:gray;" colspan="2" width="10%">Pangkat</td>
        <td style="background-color:gray;" colspan="3" width="10%">Tempat Lahir</td>
        <td style="background-color:gray;" colspan="1" width="10%">Tgl. Lahir</td>
        <td style="background-color:gray;" colspan="1" width="5%">JK.</td>
        <td style="background-color:gray;" colspan="1" width="15%">Agama</td>
        <td style="background-color:gray;" colspan="2" width="15%">Suku Bangsa</td>
        <td style="background-color:gray;" colspan="1" width="5%">Gol Darah</td>
        <td style="background-color:gray;" colspan="1" width="5%">No.Handphone</td>
    </tr>
    <?php
        $i=0;
    ?>
    @foreach($data as $d)
    <?php
        $i++;
        $nama=DB::table('users')->select('name')->where('id',  $d->user_id)->value('name');
        $nrp=DB::table('users')->select('id_anggota')->where('id',  $d->user_id)->value('id_anggota');
    ?>
    <tr>
        <td width="5%">{{ $i }}</td>
        <td colspan="1" width="10%">{{ $nrp }}</td>
        <td colspan="2" width="30%">{{ $nama }}</td>
        <td colspan="2" width="10%">{{ $d->pangkat }}</td>
        <td colspan="3" width="10%">{{ $d->tempat_lahir }}</td>
        <td colspan="1" width="10%">{{ $d->tgl_lahir }}</td>
        <td colspan="1" width="5%">{{ $d->jenis_kelamin }}</td>
        <td colspan="1" width="15%">{{ $d->agama }}</td>
        <td colspan="2" width="15%">{{ $d->suku_bangsa }}</td>
        <td colspan="1" width="5%">{{ $d->gol_darah }}</td>
        <td colspan="1" width="5%">{{ $d->no_hp }}</td>
    </tr>
    @endforeach
</table>
</body>
<script src="{{ asset('asset/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
</html>