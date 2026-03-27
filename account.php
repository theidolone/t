<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Account - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link id="theme" rel="stylesheet" href="defaultstyle.css">
        <style>
            #home {
                text-decoration-style: underline;
                text-decoration-color: #357266;
                text-underline-offset: 1em;
                text-decoration-thickness: 0.2em;
            }
        </style>
    </head>

    <body class="default-body dark">
        <?php 
        include ("header.php")
        ?>

        <h1 class="manrope-title">Welcome to your account</h1>
        <h3 class="manrope-title">Done here? <a href="logout.php">Log out</a></h3>
        
        <?php
        include ("footer.php")
        ?>
    </body>

</html>