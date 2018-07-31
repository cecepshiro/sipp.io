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
                    <img src="{{ asset('image/avatar.png') }}" alt="user-img" width="36" class="img-circle">
                    <b class="hidden-xs">{{ Auth::user()->name }}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <form action="{{ action('PersonilController@profil') }}" method="get" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <a></a>
                        <input type="hidden" name="profil_id" value="{{ Auth::user()->id_anggota }}">
                        <a></a>
                        <li>
                            <a>
                                <button type="submit" class="btnCustom btnCustom-default">Profil Diri</button>
                            </a>
                        </li>
                    </form>

                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Keluar</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- .Megamenu -->


        </ul>
    </div>
</nav>