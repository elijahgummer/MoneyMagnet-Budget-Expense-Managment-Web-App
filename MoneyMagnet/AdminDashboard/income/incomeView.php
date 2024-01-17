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

    <title>incomeView</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Income View Details 
                            <a href="income.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['incomeID']))
                        {
                            $income_id = mysqli_real_escape_string($conn, $_GET['incomeID']);
                            $query = "SELECT * FROM userincome WHERE incomeID ='$income_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $income = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>incomeID</label>
                                        <p class="form-control">
                                            <?=$income['incomeID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>incomeDate</label>
                                        <p class="form-control">
                                            <?=$income['date'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Source of Income e.g job, sidehustle</label>
                                        <p class="form-control">
                                            <?=$income['source'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Income Amount</label>
                                        <p class="form-control">
                                            <?=$income['incomeAmount'];?>
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