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
    <div class="svg-container">
        <svg width="557" height=589" viewBox="0 0 357 389" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="12.0021" cy="50.0015" rx="216" ry="269" transform="rotate(130 12.0021 50.0015)" fill="url(#paint0_linear_482_21)" />
            <defs>
                <linearGradient id="paint0_linear_482_21" x1="12.0022" y1="-218.998" x2="12.0022" y2="319.002" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F9C803" />
                    <stop offset="1" stop-color="#F9C803" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="svg-container2">
        <svg width="446" height="450" viewBox="0 0 246 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="214.738" cy="40" rx="131.521" ry="169.961" transform="rotate(130 214.738 40)" fill="url(#paint0_linear_482_23)" />
            <defs>
                <linearGradient id="paint0_linear_482_23" x1="214.738" y1="-129.961" x2="214.738" y2="209.961" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F9C803" />
                    <stop offset="1" stop-color="#F9C803" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    <nav>
        <div class="logo-container">
            <img src="images/logo.png" alt="logo" class="logo">
        </div>
        <ul id="sidemenu">
            <li><a href="#header">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="#contact">Contact</a></li>
            <button><a href="login.php">Sign In</a></button>
            <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
        </ul>
        <i class="fa-solid fa-bars" onclick="openmenu()"></i>
    </nav>
    </div>
    </div>
    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
        var sidemenu = document.getElementById("sidemenu");

        function openmenu() {
            sidemenu.style.right = "0"
        }

        function closemenu() {
            sidemenu.style.right = "-100%"
        }
    </script>
</body>

</html>