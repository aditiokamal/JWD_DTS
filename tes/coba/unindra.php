<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | LMS UNINDRA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://lms.unindra.ac.id/media_public/get_logo/small">
    <link rel="stylesheet" type="text/css" href="https://lms.unindra.ac.id/assets/template/login_colek/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://lms.unindra.ac.id/assets/template/login_colek/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://lms.unindra.ac.id/assets/template/login_colek/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="https://lms.unindra.ac.id/assets/template/login_colek/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="https://lms.unindra.ac.id/assets/template/login_colek/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="https://lms.unindra.ac.id/assets/template/login_colek/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://lms.unindra.ac.id/assets/template/login_colek/css/main_unindra.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader-logo">
            <img src="https://lms.unindra.ac.id/media_public/get_gambar/d2llSWJaazRBRUtSZ2lFQm15V3RiZi9GV3oyd09zSGdTdXlOVjVyR0Zsc20yWkxNc3J4dUNFdi9MbENKd2ZYSg==" alt="loader logo">
        </div>
        <div class="loader-inner">
            <div class="ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-37 p-b-30">


                <form method="post" action="https://lms.unindra.ac.id/login/login_proses" class="login100-form validate-form" autocomplete="off" onSubmit="return rememberme()">
                    <input type="hidden" name="csrf_token" value="MTYwMjc2MTA5M0tsMG55Q1Y1ZWdiWFN0RER0R0ljcXRuZEdZUzd5UnFZ">
                    <input type="hidden" name="0e59f85937eebefad004de3c21e9c6ae" id="0e59f85937eebefad004de3c21e9c6ae" value="aGZyaDF3eE5NdHFsRmJFSEVTMStxMDR6eEcwZkNXeXVqR3lab21naldocz0=" />

                    <span class="login100-form-title p-b-20">
                        <a href="https://lms.unindra.ac.id/home" title="Home"><img class="img-fluid" src="https://lms.unindra.ac.id/media_public/get_gambar/d2llSWJaazRBRUtSZ2lFQm15V3RiZi9GV3oyd09zSGdTdXlOVjVyR0Zsc20yWkxNc3J4dUNFdi9MbENKd2ZYSg==" alt="logo" width="100"> </a>
                    </span>
                    <span class="login100-form-title p-b-20" style="color:#073163">
                        LMS UNINDRA </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Username dibutuhkan">
                        <input class="input100" type="text" name="username" id="username" placeholder="Uername">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password dibutuhkan">
                        <input class="input100" type="password" name="pswd" id="pswd" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div class="contact100-form-checkbox m-l-4">
                        <input class="input-checkbox100" id="login-check" type="checkbox" name="login-check">
                        <label class="label-checkbox100" for="login-check">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn p-t-25">
                        <button type="submit" class="login100-form-btn" name="submit">
                            Login
                        </button>
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <button type="reset" class="reset-form-btn" name="reset">Reset</button>
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <a href="https://lms.unindra.ac.id/home" class="link"><i class="fa fa-home"></i> Home</a>
                    </div>



                </form>
            </div>
        </div>
    </div>



    <script src="https://lms.unindra.ac.id/assets/template/login_colek/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://lms.unindra.ac.id/assets/template/login_colek/vendor/bootstrap/js/popper.js"></script>
    <script src="https://lms.unindra.ac.id/assets/template/login_colek/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://lms.unindra.ac.id/assets/template/login_colek/js/main.js"></script>
    <script src="https://lms.unindra.ac.id/assets/js/jquery.cookie.js"></script>

    <script language="javascript">
        function rememberme() {

            if ($('#login-check').is(':checked')) {
                var username = $('#username').val();
                var pswd = $('#pswd').val();

                // set cookies to expire in 14 days
                $.cookie('colek_member_username', username, {
                    expires: 14
                });
                $.cookie('colek_member_pswd', pswd, {
                    expires: 14
                });
                $.cookie('colek_member_remember', true, {
                    expires: 14
                });

            } else {
                // reset cookies
                if ($.cookie('colek_member_username')) {
                    $.cookie('colek_member_username', null);
                    $.cookie('colek_member_pswd', null);
                    $.cookie('colek_member_remember', null);
                }
            }
            return true;
        }


        $(document).ready(function(e) {
            $(".loader-inner,.loader-logo").fadeOut();
            $(".preloader").delay(300).fadeOut("slow");

            //remember me cookie
            var remember = $.cookie('colek_member_remember');

            if (remember == 'true') {
                var username = $.cookie('colek_member_username');
                var pswd = $.cookie('colek_member_pswd');
                // autofill the fields
                $('#username').val(username);
                $('#pswd').val(pswd);
                $('#login-check').attr('checked', true);
            }
        });
    </script>
</body>

</html>