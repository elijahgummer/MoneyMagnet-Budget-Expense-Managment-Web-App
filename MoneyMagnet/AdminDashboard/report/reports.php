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
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Income',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    data: [1000, 1500, 1200, 1800, 2000]
                }, {
                    label: 'Expenses',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    data: [800, 1000, 900, 1200, 1500]
                }]
            };

            var incomeExpenseChart = new Chart(document.getElementById('incomeExpenseCanvas'), {
                type: 'bar',
                data: incomeExpenseData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Category-wise Spending Breakdown Chart
            var spendingBreakdownData = {
                labels: ['Groceries', 'Utilities', 'Entertainment', 'Dining'],
                datasets: [{
                    data: [300, 150, 200, 100],
                    backgroundColor: ['rgba(255, 99, 132, 0.8)', 'rgba(75, 192, 192, 0.8)', 'rgba(255, 205, 86, 0.8)', 'rgba(54, 162, 235, 0.8)']
                }]
            };

            var spendingBreakdownChart = new Chart(document.getElementById('spendingBreakdownCanvas'), {
                type: 'doughnut',
                data: spendingBreakdownData
            });

            // Historical Trends Chart
            var historicalTrendsData = {
                labels: ['2018', '2019', '2020', '2021', '2022'],
                datasets: [{
                    label: 'Total Income',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    data: [5000, 6000, 7000, 8000, 9000]
                }, {
                    label: 'Total Expenses',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    data: [3000, 4000, 5000, 6000, 7000]
                }]
            };

            var historicalTrendsChart = new Chart(document.getElementById('historicalTrendsCanvas'), {
                type: 'line',
                data: historicalTrendsData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Call the function to generate charts
        generateCharts();
    </script>

</body>
</html>
        