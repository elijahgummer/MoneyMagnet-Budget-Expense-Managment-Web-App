<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputSignup($name, $email, $pwd) !== false){
        header("Location: ../login.php?error=emptyinput");
        exit();
    }
    if (InvalidEmail($email) !== false){
        header("Location: ../login.php?error=invalidemail");
        exit();
    }

    createUser($conn, $name, $email, $pwd);

}
else{
    header("Location: ../login.php");
    exit();
}