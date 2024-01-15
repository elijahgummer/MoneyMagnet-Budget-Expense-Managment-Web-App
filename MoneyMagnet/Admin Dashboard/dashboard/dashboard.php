<?php
    require_once("../dashNavbar.php");
    require ("../../includes/functions.inc.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>MoneyMagnet | Expense & Budget Tracker</title>
  <link rel="stylesheet" href="../Admincss/style.css" />
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <section class="home-section">

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Expenses</div>
            <div class="number">$<?= $totalTransaction?></div>
            <div class="indicator">
              <i class="bx bx-up-arrow-alt"></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="bx bx-wallet-alt cart"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Income</div>
            <div class="number">$<?= $totalIncome?></div>
            <div class="indicator">
              <i class="bx bx-up-arrow-alt"></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="bx bx-line-chart cart two"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Budget vs. Actual</div>
            <div class="number">$3,500 / $4,000</div>
            <div class="indicator">
              <i class="bx bx-up-arrow-alt"></i>
              <span class="text">You are $500 under budget</span>
            </div>
          </div>
          <i class="bx bx-money cart"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Monthly Trends</div>
            <div class="chart-container">
              <canvas id="monthlyTrendsChart" width="100%" height="250"></canvas>
            </div>
            <div class="chart-labels">
              <div class="label">
                <span class="dot" style="background-color: rgba(75, 192, 192, 1);"></span>
                <span class="label-text">Expenses</span>
              </div>
            </div>
          </div>
        </div>


      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Transactions</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Customer</li>
              <li><a href="#">Alex Doe</a></li>
              <li><a href="#">David Mart</a></li>
              <li><a href="#">Roe Parter</a></li>
              <li><a href="#">Diana Penty</a></li>
              <li><a href="#">Martin Paw</a></li>
              <li><a href="#">Doe Alex</a></li>
              <li><a href="#">Aiana Lexa</a></li>
              <li><a href="#">Rexel Mags</a></li>
              <li><a href="#">Tiana Loths</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Sales</li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Pending</a></li>
              <li><a href="#">Returned</a></li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Pending</a></li>
              <li><a href="#">Returned</a></li>
              <li><a href="#">Delivered</a></li>
              <li><a href="#">Pending</a></li>
              <li><a href="#">Delivered</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Total</li>
              <li><a href="#">$204.98</a></li>
              <li><a href="#">$24.55</a></li>
              <li><a href="#">$25.88</a></li>
              <li><a href="#">$170.66</a></li>
              <li><a href="#">$56.56</a></li>
              <li><a href="#">$44.95</a></li>
              <li><a href="#">$67.33</a></li>
              <li><a href="#">$23.53</a></li>
              <li><a href="#">$46.52</a></li>
            </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Seling Product</div>
          <ul class="top-sales-details">
            <li>
              <a href="#">
                <img src="../images/sunglasses.jpg" alt="" />
                <span class="product">Vuitton Sunglasses</span>
              </a>
              <span class="price">$1107</span>
            </li>
            <li>
              <a href="#">
                <img src="../images/jeans.jpg" alt="" />
                <span class="product">Hourglass Jeans </span>
              </a>
              <span class="price">$1567</span>
            </li>
            <li>
              <a href="#">
                <img src="../images/nike-min.jpg" alt="" />
                <span class="product">Nike Sport Shoe</span>
              </a>
              <span class="price">$1234</span>
            </li>
            <li>
              <a href="#">
                <img src="../images/scarves.jpg" alt="" />
                <span class="product">Hermes Silk Scarves.</span>
              </a>
              <span class="price">$2312</span>
            </li>
            <li>
              <a href="#">
                <img src="../images/blueBag.jpg" alt="" />
                <span class="product">Succi Ladies Bag</span>
              </a>
              <span class="price">$1456</span>
            </li>
            <li>
              <a href="#">
                <img src="../images/bag.jpg" alt="" />
                <span class="product">Gucci Womens's Bags</span>
              </a>
              <span class="price">$2345</span>
            </li>

            <li>
              <a href="#">
                <img src="../images/addidas.jpg" alt="" />
                <span class="product">Addidas Running Shoe</span>
              </a>
              <span class="price">$2345</span>
            </li>
            <li>
              <a href="#">
                <img src="../images/shirt.jpg" alt="" />
                <span class="product">Bilack Wear's Shirt</span>
              </a>
              <span class="price">$1245</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
    

    // Sample data for the chart (replace with your actual data)
    const monthlyData = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Expenses',
        data: [2000, 2200, 1800, 2500, 2100, 2300], // Replace with actual expense data
        borderColor: 'rgba(75, 192, 192, 1)', // Line color
        borderWidth: 2,
        fill: false, // Do not fill the area under the line
      }]
    };

    // Get the canvas element
    const ctx = document.getElementById('monthlyTrendsChart').getContext('2d');

    // Create the chart
    const chart = new Chart(ctx, {
      type: 'line',
      data: monthlyData,
      options: {  
        scales: {
          y: {
            beginAtZero: true,
          },
        },
        responsive: true,
        maintainAspectRatio: false, // Allows chart to adjust to container size
      },
    });



  </script>
</body>

</html>