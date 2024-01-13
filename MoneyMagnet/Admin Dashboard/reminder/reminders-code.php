<?php
session_start();
require '../../includes/dbh.inc.php';
require '../../includes/functions.inc.php';



if(isset($_POST['delete_reminder']))
{
    $reminder_id = mysqli_real_escape_string($conn, $_POST['delete_reminder']);

    $query = "DELETE FROM reminders WHERE reminderID = '$reminder_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Reminder Deleted Successfully";
        header("Location: reminders.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Reminder Not Deleted";
        header("Location: reminders.php");
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


if(isset($_POST['save_reminder']))
{
    $reminderName = mysqli_real_escape_string($conn, $_POST['reminderName']);
    $reminderDate = mysqli_real_escape_string($conn, $_POST['reminderDate']);
    $Description = mysqli_real_escape_string($conn, $_POST['reminderDescription']);
    $user_id = $_SESSION['userid'];
    $query = "INSERT INTO reminders (reminderName, reminderDate, description, id) VALUES ('$reminderName', '$reminderDate', '$Description', '$user_id')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Reminder Created Successfully";
        header("Location: reminders.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Reminder Not Created";
        header("Location: reminders.php");
        exit(0);
    }
}

?>
