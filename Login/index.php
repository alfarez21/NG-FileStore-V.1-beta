<?php
  session_start();
  require_once("../logic/conf/conf.php");
  if(isset($_SESSION['login'])){
      redirect("../");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- End Bootstrap CSS -->

    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="../asset/css/core.css">
    <!-- End Core CSS -->

    <title>Login</title>
  </head>
  <body>

  	<!-- Login -->
  	<div class="wrap-login bg-white shadow mx-auto">
  		<div class="h-login">
  			<img class="mx-auto d-block mb-1" src="../asset/img/logo.svg">
        <h4 class="text-center">File Storage</h4>
  		</div>
  		<div class="f-login">
        <form action="../logic/login.php" method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" id="pwd">
          </div>
          <button type="submit" class="btn btn-primary w-100" name="send">login</button>
        </form>  
      </div>
  	</div>
  	<!-- End Login -->

  </body>
</html>