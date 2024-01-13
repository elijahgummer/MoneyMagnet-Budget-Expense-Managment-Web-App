<?php
require '../../includes/dbh.inc.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>transactionsView</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Transaction View Details 
                            <a href="transactions.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['transactionID']))
                        {
                            $transaction_id = mysqli_real_escape_string($conn, $_GET['transactionID']);
                            $query = "SELECT * FROM transactions WHERE transactionID ='$transaction_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $transaction = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>transactionID</label>
                                        <p class="form-control">
                                            <?=$transaction['transactionID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>transactionDate</label>
                                        <p class="form-control">
                                            <?=$transaction['transactionDate'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <p class="form-control">
                                            <?=$transaction['Description'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Amount</label>
                                        <p class="form-control">
                                            <?=$transaction['amount'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
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