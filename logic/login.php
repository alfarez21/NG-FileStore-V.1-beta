<?php
session_start();
// config file
require_once('conf/conf.php');


// Login System
if (isset($send)) {
    $username = htmlspecialchars(trim(strtolower($username)));
    $password = htmlspecialchars(trim($password));

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    if(checkrows($query) != 0){
        $userdb = show("SELECT * FROM user WHERE username = '$username' AND password = '$password'"); 
        if($userdb[0]['username'] == $username && $userdb[0]['password'] == $password){
            $_SESSION['login'] = true; 
            // if(isset($_POST['remember'])){
            //     setcookie("login","masuk", time()+(60*60*24*30));
            // }
            redirect("../");
        }
        else{
            redirect("../login/?stts=usernamedanpasswordsalah");
        }
    }
    else{
        redirect("../login/?stts=usertakada");
    }
}