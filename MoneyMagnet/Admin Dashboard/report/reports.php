<?php 
    require_once("../dashNavbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" href="../Admincss/reports.css">
    
    <!-- Add your chart library scripts here, e.g., Chart.js -->
</head>
<body>
    

    <main>
        <section class="report">
            <h2>Income vs. Expenses</h2>
            <div class="chart" id="incomeExpenseChart">
                <!-- Income vs. Expenses chart will be generated here -->
            </div>
        </section>

        <section class="report">
            <h2>Category-wise Spending Breakdown</h2>
            <div class="chart" id="spendingBreakdownChart">
                <!-- Category-wise spending breakdown chart will be generated here -->
            </div>
        </section>

        <section class="report">
            <h2>Historical Trends</h2>
            <div class="chart" id="historicalTrendsChart">
                <!-- Historical trends chart will be generated here -->
            </div>
        </section>
    </main>

</body>
</html>
