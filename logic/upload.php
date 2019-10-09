<?php

// Config
require_once("conf/conf.php");

// Upload 
if(isset($send))
{

    echo $_FILES['file']['type'];
    if(checkUp('file') != 4)
    {
        if(ftype('file') != "unknow")
        {
            $fname = fname('file');
            $fsize = fsize('file');
            $ftype = ftype('file');
            $date = dateUp();
            echo checkrows("SELECT * FROM files");
            if (checkrows("SELECT * FROM files") > 0) {
                $fdb = show("SELECT * FROM files WHERE filename='$fname'");
            }
            echo $fdb[0]['filename'];       
            if ($fdb[0]['filename'] == $fname && $fdb[0]['type'] == $ftype && $fdb[0]['size'] == $fsize) {
                upload('file','../app/files/');                   
                redirect("../?stts=filereplace");
            }
            else
            {
                if(upload('file','../app/files/'))
                {
                    insert("files", 
                        "filename, type, size, upload",
                        "'$fname','$ftype','$fsize','$date'"
                    ); 
                    redirect("../?stts=uploadSuccess");
                }
                else {
                    redirect("../?stts=Uploadfailed");
                }
            }  
        }
        else
        {
            redirect("../?stts=typeNotSuport");            
        }
    }
    else
    {
        redirect("../?stts=UploadEmpty");
    }
    
}