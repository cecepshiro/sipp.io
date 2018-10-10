@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Ubah Agama</div>
                <div class="card-body">
                <a href="{{ route('agama.index') }}" class="btn btn-outline-danger btn-sm">Kembali</a>
                <br>
                <br>
                <form method="POST" action="{{ route('agama.update', ['agama'=> $data['id']]) }}" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nim">Agama</label>
                        <input class="form-control" type="text" name="agama" value="{{$data->agama}}" placeholder="Agama" required>
                    </div>
                    <div class="row">
                        <div class="col-md-1 offset-md-9">
                        <a href="{{ route('agama.index') }}" class="btn btn-outline-danger btn-sm">Batal</a>
                        </div>
                        <div class="col-md-1 offset-md-0">
                        <input type="submit" class="btn btn-outline-success btn-sm" value="Ubah">
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
