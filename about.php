<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style/about.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>About Us</title>
</head>

<body>
    <header>
        <?php
            include "include/navbar.php";
        ?>
    </header>

    <section>
                <?php
                    include "include/aboutUs.php";
                ?>
    </section>

    <section>
                <?php
                    include "include/whatWeOffer.php";
                ?>
    </section>

    <section id="whatWeOffer-page" data-aos="fade-down" data-aos-duration="1000">
        <div class="whatWeOffer-text">
            <h3>Our Team</h3>
            <h1>What We Offer</h1>
        </div>
        <div class="whatWeoffer-cards">
            <div class="card">
                <img src="assets/whatWeOffer-img1.jpg" alt="">
                <h3>Ethan Mitchell</h3>
                <h4>CEO</h4>
            </div>
            <div class="card">
                <img src="assets/whatWeOffer-img2.jpg" alt="">
                <h3>Olivia Anderson</h3>
                <h4>COO</h4>
            </div>
            <div class="card">
                <img src="assets/whatWeOffer-img3.jpg" alt="">
                <h3>Lucas Harrison</h3>
                <h4>CFO</h4>
            </div>
            <div class="card">
                <img src="assets/whatWeOffer-img4.jpg" alt="">
                <h3>Sophia Bennett</h3>
                <h4>CIO</h4>
            </div>
        </div>
    </section>

    <section>
            <?php
                include "include/testimonial.php";
            ?>
    </section>


    <section>
            <?php
                include "include/footer.php";
            ?>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

