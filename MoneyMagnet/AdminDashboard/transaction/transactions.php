<?php
require_once("../dashNavbar.php");
require '../../includes/dbh.inc.php';
require_once('../../Includes/functions.inc.php');


// Assuming $_SESSION["userid"] contains the current user's ID
$user_id = $_SESSION['userid'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>




    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../Admincss/transactions.css">
</head>

<body>
    <section class="home-section">
        <main>
            <section class="transaction-list">
                <div class="messageyel">
                    <?php include('../message.php'); ?>
                </div>
                <h2>Your Transactions</h2>
                <table>
                    <thead>
                        <tr>
                            <th>transaction ID</th>
                            <th>id</th>
                            <th>transaction Date</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="transactionTable">
                        <?php

                        $query = "SELECT transactions.transactionID, transactions.id AS transaction_id, transactions.Description, transactions.transactionDate, transactions.amount, userdata.*, userincome.*
                        FROM transactions
                        JOIN userdata ON transactions.id = userdata.id
                        JOIN userincome ON transactions.id = userincome.id
                        WHERE transactions.id = '$user_id';
                        ";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $transaction) {
                        ?>
                                <tr>
                                    <td><?= $transaction['transactionID']; ?></td>
                                    <td><?= $transaction['id']; ?></td>
                                    <td><?= $transaction['transactionDate']; ?></td>
                                    <td><?= $transaction['Description']; ?></td>
                                    <td><?= $transaction['amount']; ?></td>


                                    <td>
                                        <div class="crudButttons">
                                            <a href="transactionsView.php?transactionID=<?= $transaction['transactionID']; ?>" class="btn infobtn"><i class="uil uil-eye"></i></a>
                                            <a href="transactionsEdit.php?transactionID=<?= $transaction['transactionID']; ?>" class="btn warningbtn"><i class="uil uil-edit"></i></a>
                                            <form action="transactions-code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_transaction" value="<?= $transaction['transactionID']; ?>" class="btn dangerbtn"><i class="uil uil-times"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<h5> No Transactions Found </h5>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>

            <section class="transaction-form">
                <h2>Add a Transaction</h2>
                <form id="transactionsForm" action="transactions-code.php" method="POST">
                    <div class="form-group">
                        <label for="transactionDate">Date:</label>
                        <input type="date" id="transactionDate" name="transactionDate" required>
                    </div>
                    <div class="form-group">
                        <label for="transactionDescription">Description:</label>
                        <input type="text" id="transactionDescription" name="transactionDescription" required>
                    </div>
                    <div class="form-group">
                        <label for="transactionAmount">Amount:</label>
                        <input type="number" id="transactionAmount" name="transactionAmount" required>
                    </div>
                    <button class="addTransaction" type="submit" name="save_transaction">Add Transaction</button>
                </form>
            </section>
        </main>

        <div class="transaction-stat-container">
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
        </div>

    </section>



</body>

</html>