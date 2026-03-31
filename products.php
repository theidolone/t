<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Listing - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link id="theme" rel="stylesheet" href="defaultstyle.css">

        <style>
            #image {
                width: 626px;
                height: 482px;
                margin: auto;
                margin-top: 3em;
            }

            #description{
                width: 33%;
                float: left;
            }
        </style>
    </head>

    <body class="default-body">
        <?php 
        include ("header.php")
        ?>

        <main class="manrope-body">
            <div id="description">
                <h1 class="manrope-title">Organic Nairobi Carrots</h1>
                <p>Sweet, natural carrots grown locally, offering a refreshing flavour alongside it's satisfying crunch. 
                    Grown with sustainable farming methods, these Nairobi carrots are perfect for snacking or 
                    for use in cooking to add a sweet crunch to dishes.</p>
            </div>
            <div id="image">
                <img src="./images/carrots.jpg">
            </div>
        </main>
        
        <?php
        include ("footer.php")
        ?>
    </body>

</html>