<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="ti-menu"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="{{ url('/') }}">
                <b>
                    <img src="{{ asset('asset/image/logo.png') }}" alt="home" />
                </b>
                <span class="hidden-xs">
                    <img src="{{ asset('asset/image/dispsiad.png') }}" alt="home" />
                </span>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left pull-left hidden-xs">
            <li>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">


            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    <?php
                        $cek2=DB::table('data_personil')->select('user_id')->where('user_id', Auth::user()->id)->value('user_id');
                        $foto=DB::table('data_personil')->select('foto')->where('user_id', Auth::user()->id)->value('foto');
                    ?>
                    @if($cek2!=null)
                        <img src="/image/{{ $foto }}" alt="user-img" width="36" class="img-circle">
                    @else
                        <img src="{{ asset('image/avatar.png') }}" alt="user-img" width="36" class="img-circle">
                    @endif
                    <b class="hidden-xs">{{ Auth::user()->name }}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    @if(Auth::user()->akses==0)
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Keluar</a>
                    </li>
                    @else
                    <li>
                    <form action="{{ route('profile.form') }}" method="get" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <a></a>
                        <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}">
                        <a></a>
                            <a>
                                <button type="submit" class="btnCustom btnCustom-default">Profil Diri</button>
                            </a>
                    </form>
                    </li>

                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Keluar</a>
                    </li>
                    @endif
                   
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- .Megamenu -->


        </ul>
    </div>
</nav>