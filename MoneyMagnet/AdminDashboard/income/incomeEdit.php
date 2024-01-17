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


    <link rel="stylesheet" href="../Admincss/budget.css">
    <title>income Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Income Edit
                            <a href="incomes.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['incomeID'])) {
                            $income_id = mysqli_real_escape_string($conn, $_GET['incomeID']);
                            $query = "SELECT * FROM userincome WHERE incomeID='$income_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $income = mysqli_fetch_array($query_run);
                        ?>
                                <form action="incomes-code.php" method="POST">
                                    <input type="hidden" name="incomeID" value="<?= $income['incomeID']; ?>">
                                    <div class="mb-3">
                                        <label>Source of Income</label>
                                        <input type="text" name="source" value="<?= $income['source']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Income Date</label>
                                        <input type="date" name="incomeDate" value="<?= $income['date']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Amount</label>
                                        <input type="decimal" name="incomeAmount" value="<?= $income['incomeAmount']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="updateincome" class="btn btn-primary">
                                            Update income
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