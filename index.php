<!DOCTYPE html>
<html>

    <head>
        <style>

                #home {
                    background-color: #7dcd85;
                    color: #a91aa4;
                    text-decoration: underline #a91aa4 3px;
                    text-underline-offset: 0.6em;
                }
                
                #carouselExampleFade {
                    display: flex;
                    justify-content: center;
                    width: 20em;
                    height: auto;
                }

                * {
                    box-sizing: border-box
                }
                .carousel-container {
                    max-width: 1000px;
                    position: relative;
                    margin: auto;
                }

                .mySlides {
                    display: none;
                }

                .prev, .next {
                    cursor: pointer;
                    position: absolute;
                    top: 50%;
                    width: auto;
                    margin-top: -22px;
                    padding: 16px;
                    color: white;
                    font-weight: bold;
                    font-size: 18px;
                    transition: 0.6s ease;
                    border-radius: 0 3px 3px 0;
                    user-select: none;
                }

                .next {
                    right: 0;
                    border-radius: 3px 0 0 3px;
                }

                .prev:hover .next:hover {
                    background-color: rgba(0, 0, 0, 0.8);
                }

                .fade {
                    animation-name: fade;
                    animation-duration: 1.5s;
                }

                @keyframes fade {
                    from {opacity: .4}
                    to {opacity: 1}
                }

                .carousel-wrapper {
                    padding: 1.3em;
                    background-color: rgba(125, 205, 133, 0.5);
                    border-radius: 30px;
                    border-style: solid;
                    border-width: 2px;
                }


        </style>
        <link rel="stylesheet" href="default.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>

    <body>
        <?php
        include("header.php")
        ?>
        <section id="wrapper">

        <div id="root">
            <div id="title">
                <h1 class="manrope-title">Welcome to Rolsa Technologies</h1>
            </div>

            <div id="content">
                <div class="carousel-wrapper">
                    <div class="carousel-container">

                        <div class="mySlides fade">
                            <img src="panels.jpg" style="width:100%;">
                        </div>

                        <div class="mySlides fade">
                            <img src="turbines.webp" style="width:100%;">
                        </div>

                        <div class="mySlides fade">
                            <img src="pump.png" style="width:100%;">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
            <p class="manrope-body paragraph">filler text</p>
        </div>

        </section>
        <?php
        include("footer.php")
        ?>
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
            }
        </script>
    </body>

</html>