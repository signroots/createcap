<?php
session_start();
if (isset($_SESSION['admin']) and isset($_SESSION['pass'])) {
    header("Location:dash.php");
}

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Create Cap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="authentica  tion-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="index.html" class="logo"><img src="assets/images/logo.png" height="50" alt="logo"></a>
                                            </div>
                                            <h4 class="font-size-18 mt-4"></h4>
                                        </div>

                                        <div class="p-2 mt-5">
                                            <form id="log-fr">
                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" name="nam" placeholder="Enter username">
                                                </div>
                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control" id="userpassword" name="pass" placeholder="Enter password">
                                                </div>



                                                <div class="mt-4 text-center">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                </div>

                                                <p id="wrong"></p>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>
    <script>
        $('#log-fr').on('submit', (e) => {
            e.preventDefault();
            let fdat = new FormData(document.getElementById('log-fr'));
            $.post({
                url: 'check.php',
                processData: false,
                contentType: false,
                cache: false,
                data: fdat,
                dataType: 'json',
                beforeSend: () => {},
                success: (r) => {
                    if (r.stat) {
                        location.replace('dash.php')
                    } else {
                        $("#wrong").text('incorrect name or password');
                    }
                },
                error: (e) => {},
                complete: () => {}
            })
        })
    </script>

</body>

</html>