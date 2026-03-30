<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Basket - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link id="theme" rel="stylesheet" href="defaultstyle.css">
        <style>
            #basket {
                text-decoration: underline;
                text-decoration-color: var(--accent);
                text-underline-offset: 1em;
                text-decoration-thickness: 0.2em;
            }
        </style>
    </head>

    <body class="default-body dark">
        <?php 
        include ("header.php")
        ?>

        <h1 class="manrope-title">Welcome to Greenfield Local Hub</h1>
        <p class="manrope-body"> Filler Body </p>

        <?php
        include ("footer.php")
        ?>
    </body>

</html>