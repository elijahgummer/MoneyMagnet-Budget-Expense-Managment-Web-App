<?php
if (isset($_SESSION['message'])) :
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alert</title>
        <link rel="stylesheet" href="..\Admincss\message.css">
    </head>

    <body>
        <div class="container-message">
        <div id="infoMes" class='infoMessage'>
            <i id="info-icon" class='fas fa-info-circle'></i><strong>Hey!</strong> <?= $_SESSION['message']; ?>
            <i id="close" class="fa-solid fa-x" onclick="closeMessage()"></i>

        </div>
        </div>

        <script src="..\Adminjs\message.js"></script>
    </body>

    </html>




<?php
    unset($_SESSION['message']);
endif;
?>