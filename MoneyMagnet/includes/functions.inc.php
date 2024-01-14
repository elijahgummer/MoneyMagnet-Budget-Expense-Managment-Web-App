<?php

function emptyInputSignup($name, $email, $pwd)
{
    if (empty($name) || empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $email)
{
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
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pwd)
{
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

function emptyInputLogin($email, $pwd)
{
    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd)
{
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
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["id"];
        $_SESSION["useremail"] = $uidExists["email"];
        header("Location: ../Admin Dashboard/dashboard/dashboard.php");
        exit();
    }
}



// <------------------TOTAL INCOME FEATURE------------------->

// Function to get user's income records
function getUserIncomeRecords($conn, $user_id)
{
    // Replace this query with your actual query to get income records for a user
    $sql = "SELECT * FROM userincome WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql);

    $incomeRecords = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $incomeRecords[] = $row;
    }

    return $incomeRecords;
}

// Function to calculate total income
function calculateTotalIncome($incomeRecords)
{
    $totalIncome = 0;

    foreach ($incomeRecords as $record) {
        $totalIncome += $record['incomeAmount'];
    }

    return $totalIncome;
}

// Get user's income records
$incomeRecords = getUserIncomeRecords($conn, $user_id);

// Calculate total income
$totalIncome = calculateTotalIncome($incomeRecords);

// <------------------TOTAL TRANSACTIONS FEATURE ------------------------->

function getUserTransactionRecords($conn, $user_id)
{
    // Replace this query with your actual query to get income records for a user
    $sql = "SELECT * FROM transactions WHERE id = '$user_id'";
    $transactionResult = mysqli_query($conn, $sql);

    $transactionRecords = array();
    while ($row = mysqli_fetch_assoc($transactionResult)) {
        $transactionRecords[] = $row;
    }

    return $transactionRecords;
}

// Function to calculate total income
function calculateTotalTransactions($transactionRecords)
{
    $totalTransaction = 0;

    foreach ($transactionRecords as $tranRecord) {
        $totalTransaction += $tranRecord['amount'];
    }

    return $totalTransaction;
}

// Get user's transactions records
$transactionRecords = getUserTransactionRecords($conn, $user_id);

// Calculate total transaction
$totalTransaction = calculateTotalTransactions($transactionRecords);

// <------------NET BALANCE------->

$netBalance = $totalIncome - $totalTransaction;



    


