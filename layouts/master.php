<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!-- End Bootstrap CSS -->

    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="asset/css/core.css">
    <!-- End Core CSS -->

    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
    <!-- End Responsive CSS -->

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- End Fontawesome -->

    <title>NG Filestorage</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-white navbar-light mx-auto py-1 shadow px-4">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img src="asset/img/logo.svg" alt="Logo" style="width:40px;"> FileStorage
      </a>
      <!-- End Brand -->

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-ellipsis-v"></i>
      </button>
      <!-- End Toggler/collapsibe Button -->

      <!-- Navbar links -->
      <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#label" href="#"><i class="fas fa-tags"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#rename" href="#"><i class="fas fa-edit"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#remove"><i class="fas fa-trash-alt"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#download"><i class="fas fa-cloud-download-alt"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#upload"><i class="fas fa-cloud-upload-alt"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#about"><i class="fas fa-info-circle"></i></a>
          </li>
        </ul>
      </div>
      <!-- End Navbar links -->
      <a class="nav-link p-1 user" href="#"><img src="asset/img/user.svg" style="width:30px;"></a>

      <!-- User Panel -->
      <?php
      $user = show("SELECT * FROM user");
      ?>
      <div class="user-panel text-center bg-light shadow py-2">
        <div class="edit-user">
          <p><?= $user[0]['username']?></p>
        </div>
        <div class="logout py-1">
          <a href="logic/logout.php" class="btn btn-warning text-light p-0 px-3">Logout</a>
        </div>
      </div>
      <!-- End User Panel -->
    </nav>
    <!-- End Navbar -->


    <!-- Modal -->
    <?php require_once("modals.php"); ?>
    <!-- End Modal -->

    <!-- Content -->
    <div class="wrap-content mx-auto">
      <div class="container-fluid">
        <div class="row">
          
          <!-- Notification -->
          <?php require_once("logic/notif.php");?>
          <!-- Notification -->

          <!-- Files -->
          <div id="wrap-files" class="wrap-files border col-md-8">
          <?php require_once("files-section.php");?>
          </div>
          <!-- End Files -->

          <!-- View File -->
          <div id="wrap-v-file" class="wrap-v-file col-md-4 p-0">
          </div>
          <!-- End View File -->

        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer class="bg-white mx-auto border p-2">
      <p class="text-center">Copyright &copy 2019 | Powered By Nusantara Global</p>
    </footer>
    <!-- End Footer -->

    <!-- JavaScript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/core.js"></script>
    <!-- End JavaScript -->
  </body>
</html>