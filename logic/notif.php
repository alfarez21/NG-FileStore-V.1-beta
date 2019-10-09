<?php
// Config
include_once("logic/conf/conf.php");
// notification
switch ($stts) {

  // Upload Notif
  case 'uploadSuccess':
    $notif = alert("success",true,"<center>Berhasil Diupload</center>");
    break;
  
  case 'filereplace':
    $notif = alert("warning",true,"<center>File Dengan Nama Sama Ditimpa</center>");
    break;

  case 'UploadEmpty':
    $notif = alert("danger",true,"<center>Tidak Ada File Yang Dipilih !!</center>");
    break;
  
  case 'Uploadfailed':
    $notif = alert("danger",true,"<center>Kesalahan Upload! </center>");
    break;

  case 'typeNotSuport':
    $notif = alert("danger",true,"<center>Format File Tidak Didukung </center>");
    break;

  // Upload Notif

  // Remove Notif
  case 'removeSuccess':
    $notif = alert("success",true,"<center>File berhasil dihapus </center>");
    break;
  
  case 'removeFailed':
    $notif = alert("danger",true,"<center>File gagal dihapus </center>");
    break;
  // End Remove Notif

  // Rename Notif
  case 'renameSuccess':
    $notif = alert("success",true,"<center>Rename berhasil </center>");
    break;
  
  case 'renameFailed':
    $notif = alert("danger",true,"<center>Rename Gagal </center>");
    break;
  // End Rename Notif

  // Label Notif
case 'labelditambahkan':
    $notif = alert("success",true,"<center>Label ditambahkan </center>");
    break;
  
  case 'labelgagalditambah':
    $notif = alert("danger",true,"<center>Label gagal ditambahan </center>");
    break;
  // End label Notif

  default:
    $notif = "";
    break;
}
// End notification
