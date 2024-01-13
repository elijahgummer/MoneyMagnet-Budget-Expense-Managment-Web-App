<?php
require_once("../dashNavbar.php");
require '../../includes/dbh.inc.php';
require_once('../../Includes/functions.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Goals</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../Admincss/goals.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

<body>
    <section class="home-section">
        <main>

            <section class="goal-form">
                <div class="messageyel">
                    <?php include('../message.php'); ?>
                </div>
                <h2>Add a New Goal</h2>
                <form id="budgetForm" action="goals-code.php" method="POST">
                    <div class="form-group">
                        <label for="goalName">Goal Name:</label>
                        <input type="text" id="goalName" name="goalName" required>
                    </div>
                    <div class="form-group">
                        <label for="goalAmount">Goal Amount:</label>
                        <input type="number" id="goalAmount" name="goalAmount" required>
                    </div>
                    <div class="form-group">
                        <label for="goalTargetDate">Target Date:</label>
                        <input type="date" id="goalTargetDate" name="goalTargetDate" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" id="description" name="Description" required>
                    </div>
                    <button class="addGoal" name="save_goal" type="submit">Add Goal</button>
                </form>
            </section>


            <section class="goal-list">
                <h2>Your Goals</h2>
                <?php
                $user_id = $_SESSION['userid'];
                $query = "SELECT goals.goalID, goals.id AS goal_id, goals.goalName, goals.goalAmount, goals.targetDate, goals.description, userdata.*
                                    FROM goals
                                    JOIN userdata ON goals.id = userdata.id
                                    WHERE goals.id = '$user_id';";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $goals) {
                ?>

                        <ul>
                            <li>
                                <div class="goal-info">
                                    <h3><?= $goals['goalName']; ?></h3>
                                    <p>Goal Amount: <?= $goals['goalAmount']; ?></p>
                                    <p>Target Date: <?= $goals['targetDate']; ?></p>
                                </div>
                                <div class="goal-progress">
                                    <p>Progress: $1,200 / $<?= $goals['goalAmount']; ?></p>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 60%;"></div>
                                    </div>
                                </div>
                                <div class="crudButtons">
                                    <a href="goalView.php?goalID=<?= $goals['goalID']; ?>" class="btn btn-info btn-sm"><i class="uil uil-eye"></i></a>
                                    <a href="budgetEdit.php?goalID=<?= $goals['goalID']; ?>" class="btn btn-warning btn-sm"><i class="uil uil-edit"></i></a>
                                    <form action="goals-code.php" method="POST" class="d-inline">
                                        <button type="submit" name="delete_goal" value="<?= $goals['goalID']; ?>" class="btn btn-danger btn-sm"><i class="uil uil-times"></i></button>
                                    </form>
                                </div>
                            </li>
                            <!-- Add more goal items as needed -->
                        </ul>
                <?php
                    }
                } else {
                    echo "<h5> No Goals Found </h5>";
                }
                ?>
            </section> 
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>