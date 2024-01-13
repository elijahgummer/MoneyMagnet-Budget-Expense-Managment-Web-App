<?php
session_start();
require '../../includes/dbh.inc.php';
require '../../includes/functions.inc.php';



if(isset($_POST['delete_transaction']))
{
    $transaction_id = mysqli_real_escape_string($conn, $_POST['delete_transaction']);

    $query = "DELETE FROM transactions WHERE transactionID ='$transaction_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Transaction Deleted Successfully";
        header("Location: transactions.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Transaciton Not Deleted";
        header("Location: transactions.php");
        exit(0);
    }
}

if(isset($_POST['updateTransaction']))
{
    $transaction_id = mysqli_real_escape_string($conn, $_POST['transactionID']);
    $transactionDate = mysqli_real_escape_string($conn, $_POST['transactionDate']);
    $transaction_description = mysqli_real_escape_string($conn, $_POST['Description']);
    $Amount = mysqli_real_escape_string($conn, $_POST['Amount']);


    $query = "UPDATE transactions SET transactionDate ='$transactionDate', Description ='$transaction_description', amount ='$Amount' WHERE transactionID ='$transaction_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Transaction Updated Successfully";
        header("Location: transactions.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Transaction Not Updated";
        header("Location: transactions.php");
        exit(0);
    }

}


if(isset($_POST['save_transaction']))
{
    $transactionDate = mysqli_real_escape_string($conn, $_POST['transactionDate']);
    $transactionDescription = mysqli_real_escape_string($conn, $_POST['transactionDescription']);
    $Amount = mysqli_real_escape_string($conn, $_POST['transactionAmount']);
    $user_id = $_SESSION['userid'];
    $query = "INSERT INTO transactions (transactionDate, Description, amount, id) VALUES ('$transactionDate','$transactionDescription','$Amount', '$user_id')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Transaction Created Successfully";
        header("Location: transactions.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Transaction Not Created";
        header("Location: transactions.php");
        exit(0);
    }
}

?>
