<?php
session_start(); 
// Config
require_once("logic/conf/conf.php");

if(!isset($_SESSION['login'])){
  redirect("login/");
}
// Layouts
  require_once("layouts/master.php");