<?php
session_start();
require ("dbh.inc.php");
require ("functions.inc.php");

//if user click change password button
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['checkpwd'];
    if (empty($pwd) || empty($pwdRepeat)) {
        header("Location: ../forgotpwd.php?newpwd=empty");
        exit();
    }else if($pwd != $pwdRepeat){
        header("Location: ../forgotpwd.php?error=passwordsdontmatch");
        exit();
    }
    if (InvalidEmail($email) !== false){
        header("Location: ../forgotpwd.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("Location: ../TeacherRegistration.php?error=passwordsdontmatch");
        exit();
    }
    
    resetPassword($conn, $pwd, $email);

    }
    else{
        header("Location: ../forgotpwd.php");
        exit();
    }
    


?>