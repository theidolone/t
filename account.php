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
            #account {
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

        <h1 class="manrope-title">Welcome to your account</h1>
        <h2 class="manrope-body" style="display: inline;">Currently logged in as</h2> <h2 class="manrope-title" style="display: inline;"><?php echo $_SESSION["email"] ?></h2>
        <h3 class="manrope-body">Done here? <a href="logout.php" style="color: var(--accent)" class="manrope-title">Log out</a></h3>
        
        <?php
        include ("footer.php")
        ?>
    </body>

</html>