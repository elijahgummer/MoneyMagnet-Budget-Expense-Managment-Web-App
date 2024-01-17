<?php
session_start();
require '../../includes/dbh.inc.php';
require '../../includes/functions.inc.php';



if(isset($_POST['delete_goal']))
{
    $goal_id = mysqli_real_escape_string($conn, $_POST['delete_goal']);

    $query = "DELETE FROM goals WHERE goalID = '$goal_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "goal Deleted Successfully";
        header("Location: goals.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "goal Not Deleted";
        header("Location: goals.php");
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


if(isset($_POST['save_goal']))
{
    $goalName = mysqli_real_escape_string($conn, $_POST['goalName']);
    $goalAmount = mysqli_real_escape_string($conn, $_POST['goalAmount']);
    $targetDate = mysqli_real_escape_string($conn, $_POST['goalTargetDate']);
    $goalDescription = mysqli_real_escape_string($conn, $_POST['Description']);
    $user_id = $_SESSION['userid'];
    $query = "INSERT INTO goals (goalName, goalAmount, targetDate, description, id) VALUES ('$goalName', '$goalAmount', '$targetDate', '$goalDescription' , '$user_id')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Goal Created Successfully";
        header("Location: goals.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Goal Not Created";
        header("Location: goals.php");
        exit(0);
    }
}

?>
