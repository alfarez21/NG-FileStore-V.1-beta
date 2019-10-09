<?php

// Show Data From DB
function show($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;	
    }	
    return $rows;
}

// Insert Data TO DB
function insert($table, $columns,$values){
    global $conn;
    $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}

// Check Rows Exist
function checkrows($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    return mysqli_num_rows($result);
}

// Redirect
function redirect($link){
    header("location:$link");
}

// remove form database
function remove($table,$kriteria){
    global $conn;
    $sql = "DELETE FROM $table WHERE $kriteria";
    echo $sql;
    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}

// Update Database
function update($table,$data,$kriteria){
    global $conn;
    $sql = "UPDATE $table SET $data WHERE $kriteria";
    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}

// Upload
function upload($name,$dest){
    $file = $_FILES["$name"];
    if(move_uploaded_file($file["tmp_name"], "$dest". $file["name"])){
        return true;
    }
    else{
        return false;
    }
}

// Check Upload
function CheckUp($name){
    return $_FILES["$name"]['error'];    
}

// File Size
function fsize($name){
    return $_FILES["$name"]['size'];    
}

// File Type
function ftype($name){
    switch ($_FILES["$name"]['type']) {
        case 'application/msaccess':
            return "Microsoft Access Database";
            break;
        
        case 'video/mp4':
            return "MP4 File";
            break;

        case 'image/jpeg':
            return "JPG File";
            break;
    
        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
            return "Microsoft Word Document";
            break;
     
        case 'image/png':
            return "PNG File";
            break;
        
        case 'application/pdf':
            return "PDF File";
            break;
        
        case 'application/vnd.ms-powerpoint':
            return "Microsoft PowerPoint";
            break;
        
        default:
            return "unknow";
            break;
    }    
}

// File Size
function fname($name){
    return $_FILES["$name"]['name'];    
}

// Upload Date
function dateUp(){
    return date("d M, Y");
}

// File Type Img
function ftypeImg($name){
    switch ("$name") {
        case "Microsoft Access Database":
            return "database";
            break;
        
        case 'MP4 File':
            return "video";
            break;

        case 'JPG File':
            return "image";
            break;
    
        case 'Microsoft Word Document':
            return "word";
            break;
     
        case 'PNG File':
            return "image";
            break;
        
        case 'PDF File':
            return "pdf";
            break;
        
        case 'Microsoft PowerPoint':
            return "ppt";
            break;
        
        default:
            return "image";
            break;
    }
}

// Alert
function alert($color,$js,$value){
    if ($js) {
        $btn = "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
    }
    else {
        $btn = "";
    }
    return "
    <div class='alert alert-$color alert-dismissible fade show'>
        $btn
        $value
    </div>
    ";
}