<?php 
session_start();?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Account</title>
    <link rel="stylesheet" href="assets/bootstrap/css/login.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap/css/login.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10" style="border-radius: .25rem;">
                <div class="card shadow-none o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/ventt.png&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4"><strong>Sign In Account</strong></h4>
                                    </div>
                                        <!-- login Form-->
                                    <form class="user" action="login.php" method="post">
                                        <div class="form-group">
                                            <!--Enter username -->
                                            <input class="form-control form-control-user" type="text" required="" name="username" placeholder="Enter username..">
                                        </div>
                                        <div class="form-group">
                                            <!--Enter Password -->
                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword" name="password" placeholder="Password" name="password" required="">
                                        </div>
                                        <div class="form-group" id="check-box-group">
                                            <div class="text-left custom-control custom-checkbox small" id="div-checkbox">
                                                <div class="form-check text-left form-check-admin">
                                                    <!--Show Password -->
                                                    <input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1" onclick="showPassword()">
                                                    <label class="form-check-label custom-control-label" for="formCheck-1">Show Password</label></div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit">Sign In Account</button>
                                    </form>
                                    <!-- end of Login Form-->
                                    <div class="text-center"></div>
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="assets/js/jlog.min.js"></script>
    <script src="assets/bootstrap/js/login.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/jtheme.js"></script>
     <!--Js function for show password  -->
     <script>
     function showPassword() {
  var x = document.getElementById("exampleInputPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
</body>

</html>