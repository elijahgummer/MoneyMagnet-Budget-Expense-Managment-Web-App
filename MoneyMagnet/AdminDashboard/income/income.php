<?php
require_once("../dashNavbar.php");
require '../../includes/dbh.inc.php';
require_once('../../Includes/functions.inc.php');




$user_id = $_SESSION['userid'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Income</title>
  <!-- ===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="../Admincss/income.css">
</head>

<body>
  <section class="home-section">
    <main>
      
      <div class="incomeContainer">
        <h2 style="color: #FFC800;">Income Details</h2>
        <!-- Display Table -->
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>incomeID</th> 
              <th>Income Source</th>
              <th>Amount</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $user_id = $_SESSION['userid'];
            $query = "SELECT userincome.incomeID, userincome.id AS userincomeID, userincome.source, userincome.incomeAmount, userincome.date , userdata.*
                                    FROM userincome
                                    JOIN userdata ON userincome.id = userdata.id
                                    JOIN transactions ON userincome.id = transactions.id
                                    WHERE userincome.id = '$user_id';";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $income) {
            ?>
                <tr>
                  <td><?= $income['incomeID']; ?></td>
                  <td><?= $income['id']; ?></td>
                  <td><?= $income['source']; ?></td>
                  <td><?= $income['incomeAmount']; ?></td>
                  <td><?= $income['date']; ?></td>




                  <td>
                    <div class="crudButtons">
                      <a href="incomeView.php?incomeID=<?= $income['incomeID']; ?>" class="btn infobtn"><i class="uil uil-eye"></i></a>
                      <a href="incomeEdit.php?incomeID=<?= $income['incomeID']; ?>" class="btn warningbtn"><i class="uil uil-edit"></i></a>
                      <form action="income-code.php" method="POST" class="d-inline">
                        <button type="submit" name="delete_income" value="<?= $income['incomeID']; ?>" class="btn dangerbtn"><i class="uil uil-times"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>



            <?php
              }
            } else {
              echo "<h5> No Income Found </h5>";
            }
            ?>
          </tbody>
        </table>

        <!-- Add Income Form -->
        <form class="incomeForm" action="income-code.php" method="post">
          <div class="form-group">
            <label for="source" style="color: #333;">Income Source:</label>
            <input type="text" id="source" name="source" required>
          </div>

          <div class="form-group">
            <label for="amount" style="color: #333;">Amount:</label>
            <input type="number" id="amount" name="incomeAmount" required>
          </div>

          <div class="form-group">
            <label for="date" style="color: #333;">Date:</label>
            <input type="date" id="date" name="date" required>
          </div>

          <button class="addIncome" type="submit" name="save_income">Add Income</button>
        </form>
      </div>
    </main>

    <section class="transaction-statistics">
      <h2>Transaction Statistics</h2>
      <div class="statistics-card">
        <h3>Total Income</h3>
        <p>$<?= $totalIncome; ?></p>
      </div>
      <div class="statistics-card">
        <h3>Total Expenses</h3>
        <p>$<?= $totalTransaction;?></p>
      </div>
      <div class="statistics-card">
        <h3>Net Balance</h3>
        <p>$<?= $netBalance;?></p>
      </div>
    </section>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>