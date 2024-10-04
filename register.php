
<?php 

require_once 'db/db.php';

if (isset($_POST['Register'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $c_password = $_POST['con_password'];

        $login_data = $db->login;
        if($password==$c_password)
        {
        	$data = $login_data->insertone(["email"=>$email,"password"=>$password,"name"=>$name]);
        	header('location:index.php');
        }
        else
        {
        	echo "<script>alert('Both Password are not match')</script>";
        }

}

 ?>

<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from preclinic.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2024 07:43:41 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon"
            href="assets/img/favicon.png">
        <title>Preclinic - Medical & Hospital - Bootstrap 5 Admin
            Template</title>

        <link rel="stylesheet" type="text/css"
            href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/feather.css">

        <link rel="stylesheet"
            href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet"
            href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>

        <div class="main-wrapper login-body">
            <div class="container-fluid px-0">
                <div class="row">

                    <div class="col-lg-6 login-wrap">
                        <div class="login-sec">
                            <div class="log-img">
                                <img class="img-fluid"
                                    src="assets/img/login-02.png" alt="Logo">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 login-wrap-bg">
                        <div class="login-wrapper">
                            <div class="loginbox">
                                <div class="login-right">
                                    <div class="login-right-wrap">
                                        <div class="account-logo">
                                            <a href="index.html"><img
                                                    src="assets/img/login-logo.png"
                                                    alt></a>
                                        </div>
                                        <h2>Getting Started</h2>

                                        <form method="POST">
                                            <div class="input-block">
                                                <label>Full Name <span
                                                        class="login-danger">*</span></label>
                                                <input class="form-control"
                                                    type="text" name="name">
                                            </div>
                                            <div class="input-block">
                                                <label>Email <span
                                                        class="login-danger">*</span></label>
                                                <input class="form-control"
                                                    type="email" name="email">
                                            </div>
                                            <div class="input-block">
                                                <label>Password <span
                                                        class="login-danger">*</span></label>
                                                <input
                                                    class="form-control pass-input"
                                                    type="password" name="password">
                                                <span
                                                    class="profile-views feather-eye-off toggle-password"></span>
                                            </div>
                                            <div class="input-block">
                                                <label>Confirm Password <span
                                                        class="login-danger">*</span></label>
                                                <input
                                                    class="form-control pass-input-confirm"
                                                    type="password" name="con_password">
                                                <span
                                                    class="profile-views feather-eye-off confirm-password"></span>
                                            </div>
                                            <div class="input-block login-btn">
                                                <input class="btn btn-primary btn-block"
                                                    type="submit" name="Register" value="register">
                                            </div>
                                        </form>

                                        <div class="next-sign">
                                            <p class="account-subtitle">Already
                                                have account? <a
                                                    href="index.php">Login</a></p>

                                            <div class="social-login">
                                                <a href="javascript:;"><img
                                                        src="assets/img/icons/login-icon-01.svg"
                                                        alt></a>
                                                <a href="javascript:;"><img
                                                        src="assets/img/icons/login-icon-02.svg"
                                                        alt></a>
                                                <a href="javascript:;"><img
                                                        src="assets/img/icons/login-icon-03.svg"
                                                        alt></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="assets/js/jquery-3.7.1.min.js"
            type="7c9e91022f2444ab9f294ebe-text/javascript"></script>

        <script src="assets/js/bootstrap.bundle.min.js"
            type="7c9e91022f2444ab9f294ebe-text/javascript"></script>

        <script src="assets/js/feather.min.js"
            type="7c9e91022f2444ab9f294ebe-text/javascript"></script>

        <script src="assets/js/app.js"
            type="7c9e91022f2444ab9f294ebe-text/javascript"></script>
        <script
            src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="7c9e91022f2444ab9f294ebe-|49"
            defer></script></body>

    <!-- Mirrored from preclinic.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2024 07:43:41 GMT -->
</html>