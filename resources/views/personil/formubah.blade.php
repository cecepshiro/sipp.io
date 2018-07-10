@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Data Personil</div>
                <div class="card-body">
                <a href="{{ route('personil.index') }}" class="btn btn-outline-danger btn-sm">Kembali</a>
                <br>
                <br>
                <form method="POST" action="{{ route('personil.update', ['personil'=> $data['id']]) }}"  enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <?php
                    $tmp=DB::table('users')->select('id_anggota')->where('id', Auth::user()->id)->value('id_anggota');
                    $tmp2=DB::table('users')->select('name')->where('id', Auth::user()->id)->value('name');
                ?>
                    <div class="form-group">
                        <label for="nama">ID Anggota</label>
                        <input class="form-control" type="hidden" name="user_id" value="{{ Auth::user()->id }}" placeholder="ID Anggota" readonly required>
                        <input class="form-control" type="text" name="id_anggota" value="{{ $tmp }}" placeholder="ID Anggota" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{ $tmp2 }}" placeholder="Nama" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}" placeholder="Masukkan Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Tgl. Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <div class="row">
                        @if($data->jenis_kelamin == 'L')
                        <div class="col-md-4 offset-md-3">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="jenis_kelamin" checked required value="L" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1" >Laki-Laki</label>
                            </div>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="jenis_kelamin" required value="P" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                            </div>
                        </div>
                        @elseif($data->jenis_kelamin == 'P')
                        <div class="col-md-4 offset-md-3">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="jenis_kelamin" required value="L" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1" >Laki-Laki</label>
                            </div>
                        </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="jenis_kelamin" checked required value="P" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control"  name="kode_agama" placeholder="Agama" required>
                        <option>Pilih Agama</option>
                        @foreach($agama as $ag)
                            <option <?php if($ag->id == $data->kode_agama) echo 'selected' ; ?> value="{{ $ag->id }}">{{ $ag->agama }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat_sekarang">Alamat Sekarang</label>
                        <textarea class="form-control" type="text" name="alamat_sekarang" placeholder="Masukkan Alamat Sekarang" required>{{ $data->alamat_sekarang }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">Telp. Rumah</label>
                        <input class="form-control" type="text" name="telp_rumah" value="{{ $data->telp_rumah }}" placeholder="Masukkan Telp. Rumah" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">No. HandPhone</label>
                        <input class="form-control" type="text" name="no_hp" value="{{ $data->no_hp }}" placeholder="Masukkan No. HP" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Tempat Kerja</label>
                        <input class="form-control" type="text" name="tempat_kerja" value="{{ $data->tempat_kerja }}" placeholder="Masukkan Tempat Kerjas" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat Kantor</label>
                        <textarea class="form-control" type="text" name="alamat_kantor" value="{{ $data->alamat_kantor }}" placeholder="Masukkan Alamat Kantor" required>{{ $data->alamat_kantor }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat Tempat Praktik</label>
                        <textarea class="form-control" type="text" name="alamat_tempat_praktik" value="{{ $data->alamat_tempat_praktik }}" placeholder="Masukkan Alamat Tempat Praktik" required>{{ $data->alamat_tempat_praktik }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">Telp. Kantor</label>
                        <input class="form-control" type="text" name="telp_kantor" value="{{ $data->telp_kantor  }}" placeholder="Masukkan Telp. Kantor" required>
                    </div>
                    <div class="row">
                        <div class="col-md-1 offset-md-9">
                        <a href="{{ route('personil.index') }}" class="btn btn-outline-danger btn-sm">Batal</a>
                        </div>
                        <div class="col-md-1 offset-md-0">
                        <input type="submit" class="btn btn-outline-success btn-sm" value="Simpan">
                        </div>
                    </div>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
