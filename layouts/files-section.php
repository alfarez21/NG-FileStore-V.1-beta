<?php 
  // Files
  require_once("logic/files.php");
  
?>

        <!-- Notif -->
        <?= $notif ?>
        <!-- End Notif -->

        <!-- Search Form -->
        <form class="search" method="get">
          <div class="input-group input-group-sm">
            <input type="text" name="searchkey" class="form-control" value="<?=$searchkey?>" placeholder="Search some files">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search"></i></button>
          </div>
        </form>
        <!-- End Search Form -->

        <!-- Files List -->
        <div class="files mt-3">
          <div class="container-fluid">
            <!-- If File Empty -->
            <?= $Ef ?>
            <!-- End If File Empty -->
            <div class="row">
              <!-- File List -->
              <?= $fl ?>
              <!-- End File List -->
            </div>
          </div>
        </div>
        <!-- End Files List -->