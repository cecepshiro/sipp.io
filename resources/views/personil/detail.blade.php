@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">Detail Data Personil</div>
                <div class="card-body">
                    <a href="{{ route('personil.create') }}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
                    <br>
                    <br>
                    <table class="table bordered">
                        <tr>
                            <th>No</th>
                            <th>ID Anggota</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl. Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat Sekarang</th>
                            <th>Telp. Rumah</th>
                            <th>No. HP</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 0;?>
                        @forelse($data as $d)
                        <?php $no++ ;?>
                        <?php
                            $agama=DB::table('data_agama')->select('agama')->where('id', $d->kode_agama)->value('agama');
                            $kode=DB::table('users')->select('id_anggota')->where('id', $d->user_id)->value('id_anggota');
                            $nama=DB::table('users')->select('name')->where('id', $d->user_id)->value('name');
                        ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $kode }}</td>
                            <td>{{ $nama }}</td>
                            <td>{{ $d->tempat_lahir }}</td>
                            <td>{{ $d->tgl_lahir }}</td>
                            <td>{{ $d->jenis_kelamin }}</td>
                            <td>{{ $agama }}</td>
                            <td>{{ $d->alamat_sekarang }}</td>
                            <td>{{ $d->telp_rumah }}</td>
                            <td>{{ $d->no_hp }}</td>
                            <td>
                            <form action="{{ route('personil.destroy', ['personil'=>$d->id]) }}" method="post">
                                <div class="form-group">
                                    @if(Auth::user()->hak_akses==0)
                              		<a href="{{ route('personil.edit', ['personil'=>$d->id]) }}" class="btn btn-outline-warning btn-sm">
                              		Edit</a>
                                    <input type="hidden" name="_method" value="DELETE">
                              		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    @endif
                                </div>
                            </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="11">Data Kosong</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
