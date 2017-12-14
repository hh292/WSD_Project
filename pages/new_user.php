<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WSD Project - FALL2017</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>WSD Todo-Task Project</h1>
                  </div>
                  <p>An easy way to elicit your task!</p>
                  <p>Designed and Developed By:<b> Himanshu Hunge</b></p>
                  </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="register-form" action="index.php?page=accounts&action=register" method="POST">
                    <div class="form-group">
                      <input id="register-username" type="email" name="email" required class="input-material">
                      <label for="register-username" class="label-material">Email Address</label>
                    </div>
                    <div class="form-group">
                      <input id="register-First name" type="First Name" name="fname" required class="input-material">
                      <label for="register-First name" class="label-material">First Name      </label>
                    </div>
                    <div class="form-group">
                      <input id="register-Last name" type="Last Name" name="lname" required class="input-material">
                      <label for="register-Last name" class="label-material">Last Name      </label>
                    </div>
                    <div class="form-group">
                      <input id="register-Phonenumber" type="Phone Number" name="phone" required class="input-material">
                      <label for="register-Phonenumber" class="label-material">Phone Number        </label>
                    </div>
                    <div class="form-group">
                      <input id="register-Birthdate" type="Birthday" name="bday" required class="input-material">
                      <label for="register-Birthdate" class="label-material">Birthdate        </label>
                    </div>
                    <div class="form-group">
                      <input id="register-Gender" type="Gender" name="gender" required class="input-material">
                      <label for="register-Gender" class="label-material">Gender        </label>
                    </div>
                    <div class="form-group">
                      <input id="register-passowrd" type="password" maxlength="6" name="password" required class="input-material">
                      <label for="register-passowrd" class="label-material">password        </label>
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template">
                      <label for="license">Agree the terms and policy</label>
                    </div>

                    <input id="register" type="submit" value="Register" class="btn btn-primary">
                  </form><small>Already have an account? </small><a href="index.php" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://remote.com/himanshuhunge" class="external">Himanshu Hunge</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>