<?php
session_start();
require '../../includes/dbh.inc.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('../message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Budget Edit
                            <a href="budget.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['BudgetID'])) {
                            $budget_id = mysqli_real_escape_string($conn, $_GET['BudgetID']);
                            $query = "SELECT * FROM budgets WHERE BudgetID='$budget_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $budget = mysqli_fetch_array($query_run);
                        ?>
                                <form action="budget-code.php" method="POST">
                                    <input type="hidden" name="BudgetID" value="<?= $budget['BudgetID']; ?>">

                                    <div class="mb-3">
                                        <label>Budget Name</label>
                                        <input type="text" name="Name" value="<?= $budget['Name']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                        <label for="category">Category:</label>
                                        <select id="category" name="category">
                                            <option value="food">Food</option>
                                            <option value="gas">Gas</option>
                                            <option value="rent">Rent</option>
                                            <option value="utilities">Utilities</option>
                                            <option value="entertainment">Entertainment</option>
                                            <option value="groceries">Groceries</option>
                                            <option value="clothing">Clothing</option>
                                            <option value="transportation">Transportation</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="education">Education</option>
                                            <option value="travel">Travel</option>
                                            <option value="insurance">Insurance</option>
                                            <option value="savings">Savings</option>
                                            <option value="dining_out">Dining Out</option>
                                            <option value="personal_care">Personal Care</option>
                                            <option value="gifts">Gifts</option>
                                            <option value="subscriptions">Subscriptions</option>
                                            <option value="electronics">Electronics</option>
                                            <option value="home_maintenance">Home Maintenance</option>
                                            <option value="charity">Charity/Donations</option>
                                            <option value="fitness">Fitness</option>
                                            <option value="hobbies">Hobbies</option>
                                            <option value="pet_care">Pet Care</option>
                                            <option value="car_maintenance">Car Maintenance</option>
                                            <option value="debt_payments">Debt Payments</option>
                                            <option value="investments">Investments</option>
                                            <option value="miscellaneous">Miscellaneous</option>
                                            <!-- Add more options as needed -->

                                        </select>
                                    </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <input type="text" name="Description" value="<?= $budget['Description']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Start Date</label>
                                        <input type="date" name="StartDate" value="<?= $budget['StartDate']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>End Date</label>
                                        <input type="date" name="EndDate" value="<?= $budget['EndDate']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Total Amount</label>
                                        <input type="decimal" name="TotalAmount" value="<?= $budget['TotalAmount']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="updateBudget" class="btn btn-primary">
                                            Update Budget
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>