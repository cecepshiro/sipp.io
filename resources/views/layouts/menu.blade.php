
<li class="nav-small-cap m-t-10">--- Data Personel</li>
<li>
    <a href="{{ route('personil.index') }}" class="waves-effect">
        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Daftar Personel</span>
    </a>
    <li class="nav-small-cap m-t-10">--- Data Pengalaman</li>
    <li>
        <a href="{{ route('personil.index') }}" class="waves-effect">
            <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
            <span class="hide-menu">Daftar Pengalaman</span>
        </a>
        <li class="nav-small-cap m-t-10">--- Data Registrasi</li>
        <li>
            <a href="{{ route('register') }}" class="waves-effect">
                <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                <span class="hide-menu">Registrasi Pengguna</span>
            </a>
            <li>
                <a href="{{ action('Auth\RegisterController@daftar') }}" class="waves-effect">
                    <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Daftar Pengguna</span>
                </a>
                <li class="nav-small-cap m-t-10">--- Data Master</li>
                <li>
                    <a href="{{ route('agama.index') }}" class="waves-effect">
                        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Data Agama</span>
                    </a>
                    <li>
                        <a href="{{ route('jenjang.index') }}" class="waves-effect">
                            <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                            <span class="hide-menu">Data Jenjang Pendidikan</span>
                        </a>
                        <li>
                            <a href="{{ route('pendidikan.index') }}" class="waves-effect">
                                <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                                <span class="hide-menu">Data Pendidikan</span>
                            </a>
                            <li>
                                <a href="{{ route('bidang.index') }}" class="waves-effect">
                                    <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                                    <span class="hide-menu">Data Bidang Profesi</span>
                                </a>
                                <li class="nav-small-cap m-t-10">--- Data Laporan</li>
                                <li>
                                    <a href="{{ route('agama.index') }}" class="waves-effect">
                                        <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                                        <span class="hide-menu">Laporan</span>
                                    </a>
