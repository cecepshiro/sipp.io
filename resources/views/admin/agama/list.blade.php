@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Data Agama</div>

                <div class="card-body">
                    <a href="{{ route('agama.create') }}" class="btn btn-outline-primary btn-sm">Tambah Data</a>
                    <br>
                    <br>
                    <table class="table bordered">
                        <tr>
                            <th>No</th>
                            <th>Agama</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 0;?>
                        @forelse($data as $d)
                        <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $d->agama }}</td>
                            <td>
                            <form action="{{ route('agama.destroy', ['agama'=>$d->id]) }}" method="post">
                                <div class="form-group">
                                    @if(Auth::user()->hak_akses==0)
                              		<a href="{{ route('agama.edit', ['agama'=>$d->id]) }}" class="btn btn-outline-warning btn-sm">
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
                            <td colspan="3">Data Kosong</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
