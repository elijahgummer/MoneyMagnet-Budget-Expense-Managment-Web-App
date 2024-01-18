<?php
session_start();
require '../../includes/dbh.inc.php';
require '../../includes/functions.inc.php';



if(isset($_POST['delete_income']))
{
    $income_id = mysqli_real_escape_string($conn, $_POST['delete_income']);

    $query = "DELETE FROM userincome WHERE incomeID = '$income_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Income Deleted Successfully";
        header("Location: income.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Income Not Deleted";
        header("Location: income.php");
        exit(0);
    }
}

if(isset($_POST['updateincome']))
{
    $income_id = mysqli_real_escape_string($conn, $_POST['incomeID']);
    $income_source = mysqli_real_escape_string($conn, $_POST['source']);
    $date = mysqli_real_escape_string($conn, $_POST['incomeDate']);
    $total_amount = mysqli_real_escape_string($conn, $_POST['incomeAmount']);


    $query = "UPDATE userincome SET source ='$income_source', incomeAmount ='$total_amount', date ='$date' WHERE incomeID ='$income_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "income Updated Successfully";
        header("Location: income.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "income Not Updated";
        header("Location: income.php");
        exit(0);
    }

}


if(isset($_POST['save_income']))
{
    $Source = mysqli_real_escape_string($conn, $_POST['source']);
    $Amount = mysqli_real_escape_string($conn, $_POST['incomeAmount']);
    $Date = mysqli_real_escape_string($conn, $_POST['date']);
    $user_id = $_SESSION['userid'];
    $query = "INSERT INTO userincome (source, incomeAmount, date, id) VALUES ('$Source', '$Amount', '$Date', '$user_id')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Income Created Successfully";
        header("Location: income.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Income Not Created";
        header("Location: income.php");
        exit(0);
    }
}

?>
