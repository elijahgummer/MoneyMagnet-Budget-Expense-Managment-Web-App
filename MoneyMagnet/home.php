<?php
require_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Money Magnet | Home</title>
</head>

<body>
    <div id="header">
        <div class="container">
            <div class="content">
                <div class="content-container">
                    <h2>Money Magnet</h2>
                    <div class="type-animation-text">
                        <h3 class="typeHeader">Helps You, <span class="auto-type"></span></h3>
                    </div>
                    <div class="fixed-container">
                        <div class="InputContainer">
                            <input type="text" name="text" class="input" id="input" placeholder="Search">

                            <label for="input" class="labelforsearch">
                                <div class="searchIcon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </label>
                            <div class="border"></div>

                            <button class="micButton"><svg viewBox="0 0 384 512" class="micIcon">
                                    <path d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"></path>
                                </svg>
                            </button>

                        </div>
                        <p class="sentence">Empower your financial journey with<br> Money Magnet, where smart budgeting<br> and seamless expense tracking come <br>together to help you achieve your <br>financial goals and build a secure future.</p>
                        <button class="getStarted">Get Started<i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="features">
        <div class="container">
            <div class="content-container">
                <h3 class="header">Features</h3>
                <div class="features-container">
                    <div class="feature-card">
                        <img src="images/wallet-magnify-glass.png" alt="wallet-magnify-glass">
                        <h4 class="feature-header">EXPENSE TRACKING</h4>
                        <p class="content">Effortlessly track your<br> expenses and gain insights<br> into your spending habits<br> with our intuitive expense<br> tracking tools.</p>
                    </div>
                    <div class="feature-card">
                        <img src="images/growth-chart.png" alt="growth-chart">
                        <h4 class="feature-header">INVESTMENT INSIGHTS</h4>
                        <p class="content">Maximize Growth with Investment Insights – Uncover opportunities for smarter investments and financial success.</p>
                    </div>
                    <div class="feature-card">
                        <img src="images/budget-notepad.png" alt="budget-notepad">
                        <h4 class="feature-header">BUDGETING TOOLS</h4>
                        <p class="content">Seamlessly manage your<br> finances and achieve your<br> goals with our powerful<br> budgeting tools.</p>
                    </div>
                </div>
            </div>
            <div class="svg-container3">
                <svg width="850" height="1154" viewBox="0 0 500 654" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="114.5" cy="327" rx="385.5" ry="327" fill="url(#paint0_linear_482_4)" />
                    <defs>
                        <linearGradient id="paint0_linear_482_4" x1="114.5" y1="0" x2="114.5" y2="654" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F9C803" />
                            <stop offset="1" stop-color="#F9C803" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="svg-container4">
                <svg width="650" height="700" viewBox="0 0 350 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="258.5" cy="250" rx="258.5" ry="250" fill="url(#paint0_linear_482_7)" />
                    <defs>
                        <linearGradient id="paint0_linear_482_7" x1="258.5" y1="0" x2="258.5" y2="500" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F9C803" />
                            <stop offset="1" stop-color="#F9C803" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
    <div id="reviews">
        <div class="container">
            <div class="content-container">
                <h5 class="header">Reviewed by People</h5>
                <h2 class="sub-header">Client's Testimonals</h2>
            </div>
            <div class="card-container">
                <div class="card">
                    <p class="card-content">“I AM RICH IN WIZARD MONEY KNOW”</p>
                    <div class="profile-content">
                        <img src="images/harry.png" alt="user-image" class="profile-image">
                        <div class="user-info">
                            <p class="profile-name">Harry Potter</p>
                            <p class="location">Belgrade</p>
                        </div>
                        <i class="fa-solid fa-quote-right"></i>
                    </div>
                </div>
                <div class="card">
                    <p class="card-content">“Bloody hell, this is the best wizard money tracker ever!!!!”</p>
                    <div class="profile-content">
                        <img src="images/Ron.png" alt="user-image" class="profile-image">
                        <div class="user-info">
                            <p class="profile-name">Ron Rizzly</p>
                            <p class="location">London</p>
                        </div>
                        <i class="fa-solid fa-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="action">
        <div class="container">
            <div class="image-container">
                <img src="images/callToAction.png" alt="call to action">
            </div>
            <div class="content">
                <h1>Catalyst for Financial Transformation</h1>
                <p>Unlock financial success with Money Magnet. Join now for a smarter money management experience.</p>
                <button class="call-to-action-btn">Join Know</button>
            </div>
        </div>
    </div>
    <div class="FAQ">
        <div class="container">
            <div class="content">
                <h1>FAQ</h1>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="js/home.js"></script>
</body>

</html>