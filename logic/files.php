<?php

  // Config
  require_once("conf/conf.php");

  if ($searchkey != "") {
    $sql = "SELECT * FROM files WHERE filename like '%$searchkey%'";
  }
  else{
    $sql = "SELECT * FROM files";
  }

  $files = show($sql);
  $check = checkrows($sql);
  if ($check == 0) {
    $Ef = alert("danger",false,"<center>File Tidak Ada</center>");
  }
  else {
    foreach ($files as $file) {
      $type = $file['type'];
      $img = ftypeImg($type);
      $fl .= "
      <div class='col-sm-2 col-4 file py-2 px-2' idFile='{$file['id']}'>
        <div class='icon-file mx-auto'>
          <img src='asset/img/$img.svg' width='100%'/>
        </div>
        <p>{$file['filename']}</p>
        <input type='text' value='{$file['label']}' hidden>
      </div>
      ";
    }
  } 