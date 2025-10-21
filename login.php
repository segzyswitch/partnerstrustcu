<?php
// include 'config/site-config.php';
session_start();
if ( isset($_SESSION["ptcu_account_id"]) && isset($_SESSION["accnt_status"]) ) {
  header("Location: accounts/dashboard");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>PartnersTrust CU | Sign in</title>
  <link rel="icon" type="image/x-icon" href="ui/assets/img/favicon.ico" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="ui/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="ui/assets/css/plugins.css" rel="stylesheet" type="text/css" />
  <link href="ui/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->
  <link rel="stylesheet" type="text/css" href="ui/assets/css/forms/theme-checkbox-radio.css">
  <link rel="stylesheet" type="text/css" href="ui/assets/css/forms/switches.css">
  <link rel="stylesheet" type="text/css" href="ui/assets/css/loader.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" integrity="sha512-H/zVLBHVS8ZRNSR8wrNZrGFpuHDyN6+p6uaADRefLS4yZYRxfF4049g1GhT+gDExFRB5Kf9jeGr8vueDsyBhhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="ui/assets/js/loader.js"></script>
  <script src="../cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen">
  <div class="loader">
    <div class="loader-content">
      <div class="spinner-grow align-self-center"></div>
    </div>
  </div>
</div>
<!--  END LOADER -->

<div class="form-container">
  <div class="form-form">
    <div class="form-form-wrap w-100">
      <div class="form-container">
        <div class="form-content">
        	<div style="margin-bottom:25px;margin-left:-8px;">
						<a href="./index"><img src="assets/images/logo/logo.png" height="40" oncontextmenu="return false" /></a>
					</div>
          <h5 class="mb-4">Log In to your account.</h5>
          <form class="text-left" id="loginForm" method="POST" enctype="multipart/form-data">
            <div class="form">
              <div id="username-field" class="field-wrapper input">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input id="username" name="email" type="text" class="form-control" placeholder="Username or email address" required>
              </div>
              <div id="password-field" class="field-wrapper input mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="d-sm-flex justify-content-between">
                <div class="field-wrapper toggle-pass">
                  <p class="d-inline-block">Show Password</p>
                  <label class="switch s-primary">
                    <input type="checkbox" id="toggle-password" class="d-none">
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
              <br>
              <div class="w-100 feedback">
                <?php
                if ( isset($_GET['locked']) ) {
                  ?>
                  <div class="alert-danger alert">
                    <i class="fa fa-exclamation-circle"></i> Account locked, contact support on how to get back to your account
                  </div>
                  <?php
                }
                ?>
              </div>
              <input type="hidden" name="user_login">
              <button type="submit" class="btn btn-primary btn-block mb-4 submit-btn">Sign in</button>
              <div class="field-wrapper">
                <a href="reset-password" class="forgot-pass-link">Forgot Password?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="form-image" oncontextmenu="return false">
    <div class="l-image" oncontextmenu="return false">
      <video autoplay muted loop id="bg-video" class="h-100" oncontextmenu="return false">
        <source src="assets/blurvid.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="ui/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="ui/bootstrap/js/popper.min.js"></script>
<script src="ui/bootstrap/js/bootstrap.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="ui/assets/js/authentication/form-1.js"></script>
<!-- Custom Js -->
<script src="assets/js/forms.js"></script>
</body>
</html>