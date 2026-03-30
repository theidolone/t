<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <title>Home - GLH</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link id="theme" rel="stylesheet" href="defaultstyle.css">
        <style>
            #home {
                text-decoration: underline;
                text-decoration-color: var(--accent);
                text-underline-offset: 1em; 
                text-decoration-thickness: 0.2em;
            }
        </style>
    </head>

    <body class="default-body">
        <?php 
        include ("header.php")
        ?>

        <main>


            <section>

                <h1 class="manrope-title" style="text-align: center;">Welcome to Greenfield Local Hub</h1>
                <h3 class="manrope-body" style="text-align: center;">Browse our stock by clicking on the images below, or scrolling down to our product range!</h4>

                <div class="slideshow-container">
                    <div class="slides fade">
                        <a href="carrots.php"><img src="./images/carrots.jpg" style="width: 100%;"></a>
                    </div>
                    <div class="slides fade">
                        <a href="carrots.php"><img src="./images/potatoes.avif" style="width: 100%;"></a>
                    </div>
                    <div class="slides fade">
                        <a href="carrots.php"><img src="./images/tomatoes.jpg" style="width: 100%;"></a>
                    </div>
                </div>
            </section>


            <h1 class="manrope-title" style="text-decoration: underline; text-align: center;">Product Range</h1>

            <div class="listing-container manrope-body">
                <div class="card">
                    <a href="carrots.php"><img src="./images/carrots.jpg" style="width: 100%;"></a>
                    <h1 class="manrope-body">Nairobi Carrots</h1>
                    <p class="price">£1.99</p>
                    <p>Organic Nairobi carrots harvested locally</p>
                    <p><button>Add to basket</button></p>
                </div>
                <div class="card">
                    <a href="carrots.php"><img src="./images/potatoes.avif" style="width: 100%;"></a>
                    <h1 class="manrope-body">Potatoes</h1>
                    <p class="price">£1.50</p>
                    <p>Organic potatoes harvested locally</p>
                    <p><button>Add to basket</button></p>
                </div>
                <div class="card">
                    <a href="carrots.php"><img src="./images/tomatoes.jpg" style="width: 100%;"></a>
                    <h1 class="manrope-body">Tomatoes</h1>
                    <p class="price">£2.99</p>
                    <p>Organic tomatoes harvested locally</p>
                    <p><button>Add to basket</button></p>
                </div>
            </div>


        </main>
        
        <?php
        include ("footer.php")
        ?>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("slides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 5000);
            }
        </script>

    </body>

</html>