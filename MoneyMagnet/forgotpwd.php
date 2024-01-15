<?php
require_once("navbar.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glassmorphism Login and Registration Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <!-- Login Form -->
            <form id="forgotpwd-form" action="includes/forgotpwd.inc.php" method="post">
                <h2>Change Password</h2>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Fill in all fields!</div>";
                    } else if ($_GET["error"] == "invalidemail") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Please enter a valid email address.</div>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Oops! Something went wrong. Please try again later.</div>";
                    } else if ($_GET["error"] == "none") {
                        echo "<div class='successMessage'><i class='fas fa-check-circle'></i> You have successfully changed your password!</div>";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Incorrect account information. Please try again.</div>";
                    } else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Passwords Don't Match</div>";
                    }
                }
                ?>
                <div class="input-field">
                    <input type="text" name="email" required>
                    <label>Enter your current email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="pwd" required>
                    <label>Enter your new password</label>
                </div>
                <div class="input-field">
                    <input type="password" name="checkpwd" required>
                    <label>Enter your new password again</label>
                </div>

                <div class="forget">
                    <div class="checkbox-wrapper-13">
                        <input type="checkbox" id="c1-13">
                        <p>Remember me</p>
                    </div>
                </div>
                <button type="submit" name="submit">Submit</button>
                <p class="message">Already a member?<a href="login.php">Login</a></p>
            </form>