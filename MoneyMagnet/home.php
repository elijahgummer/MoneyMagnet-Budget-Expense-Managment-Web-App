<?php
require_once("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>home</title>

</head>

<body>
    <div id="about">
        <div class="container">
            <div class="content-container">
                <h2 class="title">Money Magnet</h2>
                <div class="type-animation-text">
                <h3>Helps You, <span class="auto-type"></span></h3>
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
                </div>
                <p class="sentence">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> ornare aliquet nulla in posuere. Fusce sodales elit sit amet mauris iaculis, et mattis felis suscipit.</p>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="js/home.js"></script>
</body>

</html>