<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>WSD Project - Fall2017</title>
  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to Web Application</h1>
      <form method="post" action="index.php?page=accounts&action=login">
        <p><input type="text" name="login" value="" placeholder="Email"></p>
        <p><input type="password" name="psw" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

<!-- <form action="index.php?page=accounts&action=signup" method="POST"> -->
    <div class="login-help">

       <form action="index.php?page=accounts&action=signup" method="POST">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tasks.com</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><font color="white">Not a member yet?</font><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">Signup</button></li>
        </ul>
    </div>
</nav>
</form>


    <!--  <h1><a href="index.php?page=accounts&action=signup">Register</a></h1>
   <!--   <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p> -->
    </div> 
  </section>

  <section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/login-form" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/login-form.zip" target="_parent">Download</a>
    </p>
    <p class="about-author">
      &copy;2017 <a href="https://remote.com/himanshuhunge" target="_blank">Himanshu Hunge</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">NJIT License</a><br>
      Instructed by <a href="http://informatics.njit.edu/people/kwilliam/" target="_blank">Keith Williams</a>
  </section>
</body>
</html>