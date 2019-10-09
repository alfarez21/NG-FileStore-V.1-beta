<?php

// Config
require_once("conf/conf.php");

// label
if (isset($send)) {
  $label = htmlspecialchars(trim(strtolower($label)));
  if(update("files","label='$label'","id=$idP") > 0){
    redirect("../?stts=labelditambahkan");  
  }
  else{
    redirect("../?stts=labelgagalditambah");
  }
}