<?php
session_start();

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    
    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputLogin($email, $pwd) !== false){
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $pwd);
}
else {
    header("Location: ../Admin Dashboard/dashboard.php");
    exit();
}