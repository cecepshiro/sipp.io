<h3 class="box-title m-b-0">Form Pengalaman Profesional Personel</h3>
                                    <hr>
                                    <form method="POST" class="form-horizontal" action="{{ route('pendidikan.store') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="exampleInputuname" class="col-sm-3 control-label">NRP </label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="hidden" value="{{ Auth::user()->id }}" name="id_anggota"> 
                                                    <input id="" type="text" placeholder="Masukkan NRP" class="form-control{{ $errors->has('id_anggota') ? ' is-invalid' : '' }}"
                                                        name="" value="{{ Auth::user()->id_anggota }}" readonly required>
                                                    <div class="input-group-addon">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                    @if ($errors->has('id_anggota'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('id_anggota') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputname" class="col-sm-3 control-label">Jenjang*</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <select id="kode_jenjang" class="form-control{{ $errors->has('kode_jenjang') ? ' is-invalid' : '' }}" name="kode_jenjang" required autofocus>
                                                        <option>Pilih Jenjang Pendidikan</option>
                                                        @foreach($jenjang as $j)
                                                        <option value="{{ $j->kode_jenjang }}">{{ $j->jenjang }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="input-group-addon">
                                                        <i class="ti-location-arrow"></i>
                                                    </div>
                                                    @if ($errors->has('kode_jenjang'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('kode_jenjang') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname" class="col-sm-3 control-label">Nama Perguruan Tinggi </label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input id="nama_pt" type="text" placeholder="Masukkan Nama Perguruan Tinggi" class="form-control{{ $errors->has('nama_pt') ? ' is-invalid' : '' }}"
                                                        name="nama_pt" value="{{ old('nama_pt') }}" required autofocus>
                                                    <div class="input-group-addon">
                                                        <i class="ti-bookmark"></i>
                                                    </div>
                                                    @if ($errors->has('nama_pt'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nama_pt') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname" class="col-sm-3 control-label">Kota </label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input id="kota" type="text" placeholder="Masukkan Nama Kota" class="form-control{{ $errors->has('kota') ? ' is-invalid' : '' }}"
                                                        name="kota" value="{{ old('kota') }}" required autofocus>
                                                    <div class="input-group-addon">
                                                        <i class="ti-flag"></i>
                                                    </div>
                                                    @if ($errors->has('kota'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('kota') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname" class="col-sm-3 control-label">Bidang Ilmu </label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input id="bidang_ilmu" type="text" placeholder="Masukkan Bidang Ilmu" class="form-control{{ $errors->has('bidang_ilmu') ? ' is-invalid' : '' }}"
                                                        name="bidang_ilmu" value="{{ old('bidang_ilmu') }}" required autofocus>
                                                    <div class="input-group-addon">
                                                        <i class="ti-bookmark-alt"></i>
                                                    </div>
                                                    @if ($errors->has('bidang_ilmu'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('bidang_ilmu') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname" class="col-sm-3 control-label">Tahun Lulus </label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input id="tahun_lulus" type="text" placeholder="Masukkan Tahun Lulus" onkeydown="validateNumber(event);" maxlength="4" class="form-control{{ $errors->has('tahun_lulus') ? ' is-invalid' : '' }}"
                                                        name="tahun_lulus" value="{{ old('tahun_lulus') }}" required autofocus>
                                                    <div class="input-group-addon">
                                                        <i class="ti-calendar"></i>
                                                    </div>
                                                    @if ($errors->has('tahun_lulus'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('tahun_lulus') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9 text-right">
                                                <a href="{{ route('pendidikan.index') }}" class="btn btn-info waves-effect waves-light m-t-10">Batal</a>
                                                <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Simpan</button>
                                            </div>
                                        </div>
                                    </form>