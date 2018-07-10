@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_anggota" class="col-md-4 col-form-label text-md-right">{{ __('ID Anggota') }}</label>

                            <div class="col-md-6">
                                <input id="id_anggota" type="text" class="form-control{{ $errors->has('id_anggota') ? ' is-invalid' : '' }}" name="id_anggota" value="{{ old('id_anggota') }}" required>

                                @if ($errors->has('id_anggota'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_anggota') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="akses" class="col-md-4 col-form-label text-md-right">{{ __('Hak Akses') }}</label>

                            <div class="col-md-6">
                                <select id="akses" class="form-control{{ $errors->has('akses') ? ' is-invalid' : '' }}" name="akses" required autofocus>
                                    <option>Pilih Hak Akses</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Atasan</option>
                                    <option value="2">Anggota</option>
                                </select>
                                @if ($errors->has('akses'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('akses') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
