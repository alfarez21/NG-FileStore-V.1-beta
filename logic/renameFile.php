<?php

// Config
require_once("conf/conf.php");

// Rename
if (isset($send)) {
  $filenameP = htmlspecialchars(trim($filenameP));
  $oldfilename = htmlspecialchars(trim($oldfilename));
  if(update("files","filename='$filenameP'","id = $idP") > 0){
    rename("../app/files/".$oldfilename,"../app/files/".$filenameP);
    redirect("../?stts=renameSucces");
  }
  else{
    redirect("../?stts=renameFailed");
  }
}