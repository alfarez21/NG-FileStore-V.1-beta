<?php
error_reporting(0); 
require_once("../logic/view-file.php");
?>

<!-- View File -->
  <div class="h-v-file p-4">
    <h5>Detail:</h5>
  </div>
  <div class="wrap-thumb-file">
    <div class="img-thumb mx-auto">
      <img src="asset/img/<?= $img; ?>.svg" width="100%">
    </div>
  </div>
  <div class="v-file-name px-3 py-2">
    <h5 class="text-center"><?= $name; ?></h5>
  </div>
  <div class="wrap-file-detail py-2 px-3">
    <div class="file-datail border-top py-3">
      <table class="w-100">
        <tr class="">
          <td class="px-1 d-flex flex-row-reverse">Label :</td>
          <td class="w-60">
            <?= $label; ?>
          </td>
        </tr>
        <tr class="">
          <td class="px-1 d-flex flex-row-reverse">Type :</td>
          <td class="w-60"><?= $type; ?></td>
        </tr>
        <tr class="">
          <td class="px-1 d-flex flex-row-reverse">Size :</td>
          <td class="w-60"><?= $size;?> </td>
        </tr>
        <tr class="">
          <td class="px-1 d-flex flex-row-reverse">Upload:</td>
          <td class="w-60"><?= $upload;?></td>
        </tr>
      </table>
    </div>
  </div>
<!-- End View File -->