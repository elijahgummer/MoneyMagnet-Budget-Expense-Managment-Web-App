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
    <title>transaction Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Transaction Edit
                            <a href="transactions.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['transactionID'])) {
                            $transaction_id = mysqli_real_escape_string($conn, $_GET['transactionID']);
                            $query = "SELECT * FROM transactions WHERE transactionID='$transaction_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $transaction = mysqli_fetch_array($query_run);
                        ?>
                                <form action="transactions-code.php" method="POST">
                                    <input type="hidden" name="transactionID" value="<?= $transaction['transactionID']; ?>">
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <input type="text" name="Description" value="<?= $transaction['Description']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Transaction Date</label>
                                        <input type="date" name="transactionDate" value="<?= $transaction['transactionDate']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Amount</label>
                                        <input type="decimal" name="Amount" value="<?= $transaction['amount']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="updateTransaction" class="btn btn-primary">
                                            Update Transaction
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