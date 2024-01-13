<?php
session_start();
  require_once("../../includes/dbh.inc.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>MoneyMagnet | Expense & Budget Tracker</title>
  <link rel="stylesheet" href="../Admincss/style.css" />
  <link rel="stylesheet" href="../Admincss/settings.css">
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- ===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-dollar'></i>
      <span class="logo_name">Money</span>
      <span class="second">Magnet</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../dashboard/dashboard.php" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../income/income.php">
          <i class="fa-solid fa-sack-dollar"></i> 
          <span class="links_name">Income</span>
        </a>
      </li>
      <li>
        <a href="../transaction/transactions.php">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Transactions</span>
        </a>
      </li>
      <li>
        <a href="../budget/budget.php">
          <i class='bx bx-money'></i>
          <span class="links_name">Budgets</span>
        </a>
      </li>
      <li>
        <a href="../report/reports.php">
          <i class="bx bx-chart"></i>
          <span class="links_name">Reports</span>
        </a>
      </li>
      <li>
        <a href="../goal/goals.php">
          <i class='bx bx-target-lock'></i>
          <span class="links_name">Goals</span>
        </a>
      </li>
      <li>
        <a href="../reminder/reminders.php">
          <i class='bx bx-bell'></i>
          <span class="links_name">Reminders</span>
        </a>
      </li>
      <li>
        <a href="../settings/settings.php" id="settingsModalBtn">
          <i class="bx bx-cog"></i>
          <span class="links_name">Settings</span>
        </a>
      </li>
      <li class="log_out">
        <a href="../../Includes/logout.inc.php">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search..." />
        <i class="bx bx-search"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name"><?php
                                  if (isset($_SESSION["userid"])) {
                                    $user_id = $_SESSION['userid'];
                                    $sql = "SELECT Name FROM userdata WHERE id = '$user_id'";
                                    $result = mysqli_query($conn, $sql);

                                    if ($result) {
                                      $user = mysqli_fetch_assoc($result);
                                      echo "Welcome, " . $user['Name'] . "!";
                                    } else {
                                      echo "Error fetching user data.";
                                    }
                                  } else {
                                    echo "Please log in to view your profile.";
                                  }
                                  ?></span>
        <i class="bx bx-chevron-down"></i>
      </div>
    </nav>
  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };
  </script>

  <script src="Adminjs/settings.js"></script>
</body>

</html>