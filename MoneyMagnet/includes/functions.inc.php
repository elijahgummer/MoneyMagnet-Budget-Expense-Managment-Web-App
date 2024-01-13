<?php 

function emptyInputSignup($name, $email, $pwd) {
    $result;
    if (empty($name) || empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
    }


function invalidEmail ($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
    }

function uidExists($conn, $email) {
    $sql = "SELECT * FROM userdata WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();

    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $name, $email, $pwd) {
    $sql = "INSERT INTO userdata (name, email, password) VALUES (?, ?, ?) ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();

    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();
}

function emptyInputLogin($email, $pwd) {
    $result;
    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
    }

    function loginUser($conn, $email, $pwd) {
        $uidExists = uidExists($conn, $email);
    
        if ($uidExists === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        }
    
        $pwdHashed = $uidExists["password"];
        $checkPwd = password_verify($pwd, $pwdHashed);
    
        if ($checkPwd === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        } 
        else if ($checkPwd === true) {
            session_start();
            $_SESSION["userid"] = $uidExists["id"];
            $_SESSION["useremail"] = $uidExists["email"];
            header("Location: ../Admin Dashboard/dashboard/dashboard.php");
            exit();
        }
    }
?>    