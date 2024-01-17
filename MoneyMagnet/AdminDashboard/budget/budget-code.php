<?php
session_start();
require '../../includes/dbh.inc.php';
require '../../includes/functions.inc.php';



if(isset($_POST['delete_budget']))
{
    $budget_id = mysqli_real_escape_string($conn, $_POST['delete_budget']);

    $query = "DELETE FROM budgets WHERE BudgetID ='$budget_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Budget Deleted Successfully";
        header("Location: budget.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Budget Not Deleted";
        header("Location: budget.php");
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
        header("Location: budget.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Budget Not Updated";
        header("Location: budget.php");
        exit(0);
    }

}


if(isset($_POST['save_budget']))
{
    $budgetName = mysqli_real_escape_string($conn, $_POST['budgetName']);
    $budgetDescription = mysqli_real_escape_string($conn, $_POST['budgetDescription']);
    $budgetCategory = mysqli_real_escape_string($conn, $_POST['category']);
    $startDate = mysqli_real_escape_string($conn, $_POST['startDate']);
    $endDate = mysqli_real_escape_string($conn, $_POST['endDate']);
    $totalAmount = mysqli_real_escape_string($conn, $_POST['totalAmount']);
    $user_id = $_SESSION['userid'];
    $query = "INSERT INTO budgets (Name, Description, Category, StartDate, EndDate, TotalAmount, id) VALUES ('$budgetName','$budgetDescription','$budgetCategory', '$startDate', '$endDate', '$totalAmount', '$user_id')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Budget Created Successfully";
        header("Location: budget.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Budget Not Created";
        header("Location: budget.php");
        exit(0);
    }
}

?>
