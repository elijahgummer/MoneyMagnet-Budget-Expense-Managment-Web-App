<?php
require_once("../dashNavbar.php");
require_once('../../Includes/functions.inc.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../Admincss/budget.css">
    <title>Budget Details</title>
</head>

<body>
    <section class="home-section">
        <div class="container mt-4">
            <div class="messageyel">
                <?php include('../message.php'); ?>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Budget Details
                                <div tabindex="0" class="plusButton" id="openModalBtn">
                                    <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                        <g mask="url(#mask0_21_345)">
                                            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
                                        </g>
                                    </svg>
                                </div>



                            </h4>
                        </div>

                        <div class="modal" id="budgetModal">
                            <div class="modal-content">
                                <h2>Create New Budget</h2>
                                <form id="budgetForm" action="budget-code.php" method="POST">
                                    <div class="form-group">
                                        <label for="budgetName">Budget Name:</label>
                                        <input type="text" id="budgetName" name="budgetName" required />
                                    </div>
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
                                    <div class="form-group">
                                        <label for="budgetDescription">Budget Description:</label>
                                        <input type="text" id="budgetDescription" name="budgetDescription" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="startDate">Start Date:</label>
                                        <input type="date" id="startDate" name="startDate" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="endDate">End Date:</label>
                                        <input type="date" id="endDate" name="endDate" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="totalAmount">Total Amount:</label>
                                        <input type="number" id="totalAmount" name="totalAmount" required />
                                    </div>
                                    <div class="modal-buttons">
                                        <button type="button" class="btn-cancel" id="cancelModalBtn">Cancel</button>
                                        <button type="submit" name="save_budget" class="btn-save">Save Budget</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>budgetID</th>
                                        <th>ID</th>
                                        <th>Budget Category</th>
                                        <th>Budget Name</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $user_id = $_SESSION['userid'];
                                    $query = "SELECT budgets.BudgetID, budgets.id AS budget_id, budgets.Category, budgets.Name, budgets.Description, budgets.StartDate, budgets.EndDate, budgets.TotalAmount, userdata.*
                                    FROM budgets
                                    JOIN userdata ON budgets.id = userdata.id
                                    WHERE budgets.id = '$user_id';";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $budget) {
                                    ?>
                                            <tr>
                                                <td><?= $budget['BudgetID']; ?></td>
                                                <td><?= $budget['id']; ?></td>
                                                <td><?= $budget['Category']; ?></td>
                                                <td><?= $budget['Name']; ?></td>
                                                <td><?= $budget['Description']; ?></td>
                                                <td><?= $budget['StartDate']; ?></td>
                                                <td><?= $budget['EndDate']; ?></td>
                                                <td><?= $budget['TotalAmount']; ?></td>

                                                <td>
                                                    <a href="budgetView.php?BudgetID=<?= $budget['BudgetID']; ?>" class="btn btn-info btn-sm"><i class="uil uil-eye"></i></a>
                                                    <a href="budgetEdit.php?BudgetID=<?= $budget['BudgetID']; ?>" class="btn btn-warning btn-sm"><i class="uil uil-edit"></i></a>
                                                    <form action="budget-code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_budget" value="<?= $budget['BudgetID']; ?>" class="btn btn-danger btn-sm"><i class="uil uil-times"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<h5> No Budgets Found </h5>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Adminjs/addBudget.js"></script>
</body>

</html>