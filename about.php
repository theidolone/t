<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>About - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link id="theme" rel="stylesheet" href="defaultstyle.css">
    </head>

    <body class="default-body dark">
        <?php 
        include ("header.php")
        ?>

        <main id="about-main">

            <section id="info">
                <h1 class="manrope-title">About Us</h1>
                <h2 class="manrope-title">What is Greenfield Local Hub?</h2>
                <h3 class="manrope-body">GLH is a cooperative of local farmers working together to support eachother and to serve our community with excellent quality produce.</h3>
                <h2 class="manrope-title">What are your farming practices like?</h2>
                <h3 class="manrope-body">The GLH farmer's union makes sure to stay up-to-date with the law, ensuring consistent compliance with agricultural and retail rulings, along with traditional techniques passed down by those before us to respect the land and keep it healthy.</h3>
            </section>

            <section id="contact">
                <h1 class="manrope-title">Contact Us</h1>
                <h3 class="manrope-body">Telephone: 0161 000 1111</h3>
                <h3 class="manrope-body">E-mail: contact@greenfield.com</h3>
            </section>

        </main>

        <?php
        include ("footer.php")
        ?>
    </body>

</html>