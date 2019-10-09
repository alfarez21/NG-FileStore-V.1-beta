<?php

// Config
require_once("conf/conf.php");
$file = show("SELECT * FROM files WHERE id='$id'");
$labels = $file[0]['label'];
$colorlabel = ['primary','success','danger','warning','secondary'];
$labels = explode(",",$labels);
foreach ($labels as $lbl) {
  $lbl = htmlspecialchars(trim($lbl));
  shuffle($colorlabel);
  $label .= "
    <span class='badge badge-{$colorlabel[0]}'>$lbl</span>
  ";
}
$name = $file[0]['filename'];
$type = $file[0]['type'];
$size = $file[0]['size'] . "KB";
$upload = $file[0]['upload'];
$img = ftypeImg($type);
if (!isset($id)) {
  $label ="-";
  $name = "-";
  $type = "-";
  $size = "-";
  $upload = "-";
  $img = "unknow";
}