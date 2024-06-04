<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Responsive Navbar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
  <nav>
    <div class="logo-container">
      <img class="logo" src="images/logo.png" alt="logo" />
    </div>
    <ul id="sidemenu" class="menu-list">
      <div class="icon cancel-btn">
        <i class="fa-solid fa-xmark"></i>
      </div>
      <li><a href="#header">Home</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="reviews.html">Reviews</a></li>
      <li><a href="action.html">Action</a></li>
      <li><a href="FAQ.html">FAQ</a></li>
      <button class="sign-up">
        <a href="login.php">Sign up</a>
        <div class="arrow-wrapper">
          <div class="arrow"></div>
        </div>
      </button>
    </ul>
    <div class="icon menu-btn">
      <i class="fa-solid fa-bars"></i>
    </div>
  </nav>
  <script src="js/navbar.js"></script>
</body>
</html>