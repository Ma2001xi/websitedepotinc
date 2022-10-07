<?php 
include("program.php");
login();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="font/css/all.css">
   <title>design</title>
</head>
  <body>
    <nav>
      <div class="brand">
        <a href="">CHRISGATE</a>
      </div>
      <div class="toggle-icon">
        <i class="fa fa-bars"></i>
      </div>
      <div>
        <ul class="menu">
          <li><a href="">HOME</a></li>
           <li><a href="">ABOUT</a></li>
            <li><a href="">SERVICE</a></li>
             <li><a href="">CONTACT</a></li>
        </ul>
      </div>
      <div class="social">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-instagram"></i>
      </div>
    </nav>
    <header>
      <div class="header-contents">
        <h3>
          please fill the form below
        </h3>
        <form style="width:40vw;" method="post">
          <p>
            <input type="email" placeholder="Enter an email" name="email" class="form-control">
          </p>
          
           <p>
            <input type="Password" placeholder="Password" name="pword" class="form-control">
          </p>
           <p>
            <input type="submit" value="Login" name="log" class="btn btn-primary">
            <p>Don't have account yet?  <a href="register.php">register</a></p>
          </p>
        </form>
      </div>
    </header>
  </body>
  </html>