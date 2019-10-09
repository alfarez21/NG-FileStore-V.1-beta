<?php

// Config
require_once("conf/conf.php");

// Remove
if(remove("files","id='$id'") > 0 ){
    unlink("../app/files/".$filename);
    redirect("../?stts=removeSuccess");
}
else{
    redirect("../?stts=removeFailed");
}