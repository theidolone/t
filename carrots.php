<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Listing - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="defaultstyle.css">

        <style>
            #image {
                width: 626px;
                height: 482px;
                margin: auto;
                margin-top: 5em;
            }
        </style>
    </head>

    <body class="default-body dark">
        <?php 
        include ("header.php")
        ?>

        <main>
            <div id="image">
                <img src="./images/carrots.jpg">
            </div>
        </main>
        
        <?php
        include ("footer.php")
        ?>
    </body>

</html>