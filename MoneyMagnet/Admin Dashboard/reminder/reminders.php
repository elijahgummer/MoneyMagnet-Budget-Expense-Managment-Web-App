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
    <title>Reminders</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../Admincss/reminders.css">
</head>

<body>
    <section class="home-section">
        <main>
            <section class="reminder-form">
                <h2>Add a Reminder</h2>
                <form id="reminderForm" action="reminders-code.php" method="POST">
                    <div class="form-group">
                        <label for="reminderName">Reminder Name:</label>
                        <input type="text" id="reminderName" name="reminderName" required>
                    </div>
                    <div class="form-group">
                        <label for="reminderDescription">Description:</label>
                        <textarea id="reminderDescription" name="reminderDescription" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="reminderDate">Next Occurrence Date:</label>
                        <input type="date" id="reminderDate" name="reminderDate" required>
                    </div>
                    <button class="addReminder" type="submit" name="save_reminder">Add Reminder</button>
                </form>
            </section>

            <section class="reminder-list">
                <h2>Your Reminders</h2>
                <?php
                $user_id = $_SESSION['userid'];
                $query = "SELECT reminders.reminderID, reminders.id AS reminder_id, reminders.reminderDate, reminders.description, reminders.reminderName , userdata.*
                                    FROM reminders
                                    JOIN userdata ON reminders.id = userdata.id
                                    WHERE reminders.id = '$user_id';";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $reminders) {
                ?>
                        <ul id="reminderList">
                            <li>
                                <span class="reminderName">Reminder Name: <?= $reminders['reminderName']; ?></span><br>
                                <span class="reminderID">ID: <?= $reminders['reminderID']; ?></span><br>
                                <span class="reminderDate">Date: <?= $reminders['reminderDate']; ?></span><br>
                                <span class="description"><?= $reminders['description']; ?></span>
                            </li>
                            <div class="crudButtons">
                                <a href="reminderView.php?reminderID=<?= $reminders['reminderID']; ?>" class="btn btn-info btn-sm"><i class="uil uil-eye"></i></a>
                                <a href="reminderEdit.php?reminderID=<?= $reminders['reminderID']; ?>" class="btn btn-warning btn-sm"><i class="uil uil-edit"></i></a>
                                <form action="reminders-code.php" method="POST" class="d-inline">
                                    <button type="submit" name="delete_reminder" value="<?= $reminders['reminderID']; ?>" class="btn btn-danger btn-sm"><i class="uil uil-times"></i></button>
                                </form>
                            </div>
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