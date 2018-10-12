<li class="user-pro">
    <a href="#" class="waves-effect">
    <?php
        $cek2=DB::table('data_personil')->select('user_id')->where('user_id', Auth::user()->id)->value('user_id');
        $foto=DB::table('data_personil')->select('foto')->where('user_id', Auth::user()->id)->value('foto');
    ?>
        @if($cek2!=null)
            <img src="/image/{{ $foto }}" alt="user-img" class="img-circle">
        @else
            <img src="{{ asset('image/avatar.png') }}" alt="user-img" class="img-circle">
        @endif
        <span class="hide-menu"> {{ Auth::user()->name }}
            <span class="fa arrow"></span>
        </span>
    </a>
    <ul class="nav nav-second-level">
        <li>
            <form action="{{ route('profile.form') }}" method="get" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <a></a>
                <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}">
                <a></a>
                <a>
                    <button type="submit" style="float: left" class="btnCustom btnCustom-default">
                        <i class="ti-user"></i> Profil Diri</button>
                </a>
            </form>
        </li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <a>
                    <button type="submit" style="float: left" class="btnCustom btnCustom-default">
                        <i class="fa fa-power-off"></i> Keluar</button>
                </a>
            </form>
        </li>
    </ul>
</li>
@if(Auth::user()->akses==0)
<li class="nav-small-cap m-t-10">--- Data Personel</li>
<li>
    <a href="{{ route('personil.index') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Daftar Personel</span>
    </a>
</li>
<li class="nav-small-cap m-t-10">--- Data Registrasi</li>
<li>
    <a href="{{ route('register') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Registrasi Pengguna</span>
    </a>
</li>
<li>
    <a href="{{ action('Auth\RegisterController@daftar') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Daftar Pengguna</span>
    </a>
</li>
@elseif(Auth::user()->akses==1)
<li class="nav-small-cap m-t-10">--- Data Personel</li>
<li>
    <a href="{{ route('personil.index') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Daftar Personel</span>
    </a>
</li>
<li class="nav-small-cap m-t-10">--- Data Laporan</li>
<li>
     <a href="#" onclick="window.open('/reportpers/{{Auth::user()->id}}','Cetak Data Pengalaman ','width=650,height=800').print()" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Laporan</span>
    </a>
</li>
@elseif(Auth::user()->akses==2)
<li class="nav-small-cap m-t-10">--- Data Pengalaman</li>
<li>
    <a href="{{ route('pengalaman.formpengalamanpers') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Daftar Pengalaman</span>
    </a>
</li>
<li class="nav-small-cap m-t-10">--- Data Laporan</li>
<li>
     <a href="#" onclick="window.open('/reportpers/{{Auth::user()->id}}','Cetak Data Pengalaman ','width=650,height=800').print()" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Cetak Laporan</span>
    </a>
</li>
@elseif(Auth::user()->akses==3)
<li class="nav-small-cap m-t-10">
    --- Data Personel</li>
<li>
    <a href="{{ route('personil.index') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Daftar Personel</span>
    </a>
</li>
<li class="nav-small-cap m-t-10">--- Data Registrasi</li>
<li>
    <a href="{{ route('register') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Registrasi Pengguna</span>
    </a>
</li>
<li>
    <a href="{{ action('Auth\RegisterController@daftar') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Daftar Pengguna</span>
    </a>
</li>
<li class="nav-small-cap m-t-10">--- Data Master</li>
<li>
    <a href="{{ route('jenjang.index') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Jenjang Pendidikan</span>
    </a>
    <a href="{{ route('bidang.listbidang') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Bidang Profesi</span>
    </a>
</li>
@endif