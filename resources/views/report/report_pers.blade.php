<html>
<link href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<table class="table table-bordered-custom" style="width:100%">
    <tr>
        <td colspan="15">Markas Besar Angkatan Darat Dinas Psikologi</td>
    </tr>
    <tr>
        <td colspan="15" align="center">RIWAYAT PENGALAMAN PERSONIL</td>
    </tr>
    <div style="font-size: 15px;">
    <tr>
        <td colspan="15">I. DATA POKOK</td>
    </tr>
    <tr>
        <td rowspan="4" width="25%" colspan="2"><center><img src="/image/{{ $datadiri->foto }}" align="middle" class="thumb-lg img-square"></center></td>
        <td  width="15%" >Nama</td>
        <td colspan="4"  width="40%" >{{ $datadiri->name }}</td>
        <td colspan="2"  width="15%" >Agama</td>
        <td colspan="6"  width="5%" >{{ $datadiri->agama }}</td>
    </tr>
    <tr>
        <td width="15%">Pangkat</td>
        <td colspan="4" width="40%">Isi</td>
        <td colspan="2" width="15%">Gol. Darah</td>
        <td colspan="6" width="5%">{{ $datadiri->gol_darah }}</td>
    </tr>
    <tr>
        <td width="15%">NRP</td>
        <td colspan="4" width="40%">{{ $datadiri->id_anggota }}</td>
        <td colspan="2" width="15%">Suku Bangsa</td>
        <td colspan="6" width="5%">{{ $datadiri->suku_bangsa }}</td>
    </tr>
    <tr>
        <td width="15%">Tempat/ Tgl. Lahir</td>
        <td colspan="4" width="40%">{{ $datadiri->tempat_lahir.' / '.$datadiri->tgl_lahir }}</td>
        <td colspan="2" width="15%"></td>
        <td colspan="6" width="5%"></td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td colspan="15">II. RIWAYAT PENDIDIKAN</td>
    </tr>
    <tr>
        <td  width="5%">No.</td>
        <td colspan="2" width="20%">Jenjang</td>
        <td colspan="4" width="30%">Nama PT</td>
        <td colspan="2" width="20%">Kota</td>
        <td colspan="4" width="20%">Bidang Ilmu</td>
        <td colspan="2" width="5%">Tahun Lulus</td>
    </tr>
    <?php
        $i=0;
    ?>
    @foreach($pendidikan as $value)
    <?php
        $i++;
        $kode=DB::table('data_pendidikan')->select('kode_jenjang')->where('user_id',  Auth::user()->id)->value('kode_jenjang');
        $jenjang=DB::table('data_jenjang')->select('jenjang')->where('kode_jenjang',  $kode)->value('jenjang');
    ?>
    <tr>
        <td width="5%">{{ $i }}</td>
        <td colspan="2" width="20%">{{ $jenjang }}</td>
        <td colspan="4" width="30%">{{ $value->nama_pt }}</td>
        <td colspan="2" width="20%">{{ $value->kota }}</td>
        <td colspan="4" width="20%">{{ $value->bidang_ilmu }}</td>
        <td colspan="2" width="5%">{{ $value->tahun_lulus }}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="15">III. RIWAYAT PEKERJAAN</td>
    </tr>
    <tr>
        <td width="5%">No.</td>
        <td colspan="3" width="30%">Nama Lembaga</td>
        <td colspan="4" width="30%">Alamat</td>
        <td colspan="2" width="10%">No. Telp</td>
        <td colspan="3" width="15%">Pekerjaan</td>
        <td colspan="1" width="5%">Dari</td>
        <td colspan="1" width="5%">Sampai</td>
    </tr>
    <?php
        $i=0;
    ?>
    @foreach($pekerjaan as $value2)
    <?php
        $i++;
    ?>
    <tr>
        <td width="5%">{{ $i }}</td>
        <td colspan="3" width="30%">{{ $value2->nama_lembaga }}</td>
        <td colspan="4" width="30%">{{ $value2->alamat }}</td>
        <td colspan="2" width="10%">{{ $value2->no_telp }}</td>
        <td colspan="3" width="15%">{{ $value2->pekerjaan }}</td>
        <td colspan="1" width="5%">{{ $value2->dari }}</td>
        <td colspan="1" width="5%">{{ $value2->sampai }}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="15">IV. RIWAYAT PRAKTIK PERSONIL</td>
    </tr>
    <tr>
        <td width="5%">No.</td>
        <td colspan="4" width="45%">Pemeriksaan</td>
        <td colspan="6" width="45%">Tindakan</td>
        <td colspan="4" width="5%">Tahun Pelaksanaan</td>
    </tr>
    <?php
        $i=0;
    ?>
    @foreach($praktik as $value3)
    <?php
        $i++;
    ?>
    <tr>
        <td width="5%">{{ $i }}</td>
        <td colspan="4" width="45%">{{ $value3->pemeriksaan }}</td>
        <td colspan="6" width="45%">{{ $value3->tindakan }}</td>
        <td colspan="4" width="5%">{{ $value3->tahunpelaksanaan }}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="15">V. RIWAYAT PENGEMBANGAN PROFESIONAL</td>
    </tr>
    <tr>
        <td width="5%">No.</td>
        <td colspan="7" width="45%">Kegiatan</td>
        <td colspan="6" width="45%">Tempat</td>
        <td colspan="2" width="5%">Tahun</td>
    </tr>
    <?php
        $i=0;
    ?>
    @foreach($pengembanganpro as $value4)
    <?php
        $i++;
    ?>
    <tr>
        <td width="5%">{{ $i }}</td>
        <td colspan="7" width="45%">{{ $value4->kegiatan }}</td>
        <td colspan="6" width="45%">{{ $value4->tempat }}</td>
        <td colspan="2" width="5%">{{ $value4->tahun }}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="15">VI. RIWAYAT BIDANG PROFESI PERSONIL</td>
    </tr>
    <tr>
        <td width="5%">No.</td>
        <td colspan="14" width="95%">Bidang Profesi</td>
    </tr>
    <?php
        $i=0;
    ?>
    @foreach($bidangpropers as $value5)
    <?php
        $i++;
        $bidang=DB::table('data_bidangprofesi')->select('bidangprofesi')->where('kode_bidangprofesi',  $value5->kode_bidangprofesi)->value('bidangprofesi');
    ?>
    <tr>
        <td width="5%">{{ $i }}</td>
        <td colspan="14" width="95%">{{ $bidang }}</td>
    </tr>
    @endforeach
    
</table>
</html>