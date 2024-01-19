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
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <main>
        <section class="report">
            <h2>Income vs. Expenses</h2>
            <div class="chart" id="incomeExpenseChart">
                <!-- Income vs. Expenses chart will be generated here -->
                <canvas id="incomeExpenseCanvas"></canvas>
            </div>
        </section>

        <section class="report">
            <h2>Category-wise Spending Breakdown</h2>
            <div class="chart" id="spendingBreakdownChart">
                <!-- Category-wise spending breakdown chart will be generated here -->
                <canvas id="spendingBreakdownCanvas"></canvas>
            </div>
        </section>

        <section class="report">
            <h2>Historical Trends</h2>
            <div class="chart" id="historicalTrendsChart">
                <!-- Historical trends chart will be generated here -->
                <canvas id="historicalTrendsCanvas"></canvas>
            </div>
        </section>
    </main>

    <script>
        // Function to generate charts
        function generateCharts() {
            // Income vs. Expenses Chart
            var incomeExpenseData = {
                // Add your data here
            };

            var incomeExpenseChart = new Chart(document.getElementById('incomeExpenseCanvas'), {
                type: 'bar', // Choose the chart type (bar, line, pie, etc.)
                data: incomeExpenseData,
                options: {
                    // Add chart options here
                }
            });

            // Category-wise Spending Breakdown Chart
            var spendingBreakdownData = {
                // Add your data here
            };

            var spendingBreakdownChart = new Chart(document.getElementById('spendingBreakdownCanvas'), {
                type: 'doughnut', // Choose the chart type
                data: spendingBreakdownData,
                options: {
                    // Add chart options here
                }
            });

            // Historical Trends Chart
            var historicalTrendsData = {
                // Add your data here
            };

            var historicalTrendsChart = new Chart(document.getElementById('historicalTrendsCanvas'), {
                type: 'line', // Choose the chart type
                data: historicalTrendsData,
                options: {
                    // Add chart options here
                }
            });
        }

        // Call the function to generate charts
        generateCharts();
    </script>

</body>
</html>
