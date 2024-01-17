<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget and Expense Tracker Settings</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../Admincss/settings.css">

    
</head>
<body>

    <div id="settingsModal" class="modal">
        <div class="modal-content">
            <a href="../dashboard/dashboard.php"><span class="close" id="closeModalBtn">&times</span></a>
            <h2>User Settings</h2>
            <div class="settings-container">
                <form>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address">
                    </div>

                    <div class="form-group">
                        <label>Notification Preferences</label>
                        <div class="notification-options">
                            <label>
                                <input type="checkbox" name="notifications" value="email"> Email
                            </label>
                            <label>
                                <input type="checkbox" name="notifications" value="sms"> SMS
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="theme">Choose a Theme</label>
                        <select id="theme" name="theme">
                            <option value="light">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="monthlyIncome">Monthly Income</label>
                        <input type="number" id="monthlyIncome" name="monthlyIncome" placeholder="Enter your monthly income">
                    </div>

                    <div class="form-group">
                        <label for="budgetLimit">Budget Limit</label>
                        <input type="number" id="budgetLimit" name="budgetLimit" placeholder="Set your monthly budget limit">
                    </div>

                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <select id="currency" name="currency">
                            <option value="USD">US Dollar (USD)</option>
                            <option value="EUR">Euro (EUR)</option>
                            <option value="GBP">British Pound (GBP)</option>
                            <!-- Add more currency options as needed -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="expenseCategories">Expense Categories</label>
                        <input type="text" id="expenseCategories" name="expenseCategories" placeholder="Enter your preferred expense categories (comma-separated)">
                        <p class="note">Separate categories with commas (e.g., Food, Transportation, Entertainment)</p>
                    </div>

                    <div class="form-group">
                        <label for="notificationThreshold">Expense Notification Threshold</label>
                        <input type="number" id="notificationThreshold" name="notificationThreshold" placeholder="Set a threshold amount to receive expense notifications">
                    </div>

                    <div class="button-container">
                        <button type="submit">Save Settings</button>
                        <button type="button" id="resetSettings">Reset Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../Adminjs/settings.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
