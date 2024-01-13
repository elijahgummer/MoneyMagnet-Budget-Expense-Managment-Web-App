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

if(isset($_POST['updateBudget']))
{
    $budget_id = mysqli_real_escape_string($conn, $_POST['BudgetID']);
    $budget_name = mysqli_real_escape_string($conn, $_POST['Name']);
    $budget_category = mysqli_real_escape_string($conn, $_POST['category']);
    $budget_description = mysqli_real_escape_string($conn, $_POST['Description']);
    $startDate = mysqli_real_escape_string($conn, $_POST['StartDate']);
    $endDate = mysqli_real_escape_string($conn, $_POST['EndDate']);
    $total_amount = mysqli_real_escape_string($conn, $_POST['TotalAmount']);


    $query = "UPDATE budgets SET Name ='$budget_name', Description ='$budget_description', category ='$budget_category', TotalAmount ='$total_amount',  StartDate ='$startDate', EndDate ='$endDate' WHERE BudgetID ='$budget_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Budget Updated Successfully";
        header("Location: goals.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Budget Not Updated";
        header("Location: goals.php");
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
