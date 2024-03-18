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
        

    <section id="aboutUs-page">
        <div class="aboutUs-img" data-aos="fade-right" data-aos-duration="1000">
            <img src="assets/aboutUs.png" alt="hero-image">
        </div>
        <div class="aboutUs-text" data-aos="fade-left" data-aos-duration="1000">
            <h2>About Us</h2>
            <h1>Connecting Talent with <span>Opportunity</span></h1>
            <p>At Talent Us Inc., we are more than just a recruitment agency – we are your dedicated partners in
                success. Our mission is to empower job seekers and employers by providing exceptional, personalized,
                and innovative recruitment solutions. Here's what sets us apart</p>
            <div class="button">
                <button class="primary-color-btn">Get Started</button>
            </div>
        </div>
    </section>

    <section id="feature-page">
        <div class="feature-text">
            <h3>Feature</h3>
            <h1>What We Offer</h1>
        </div>
        <div class="feature-cards">
            <div class="cards">
                <img src="assets/feature-image.jpg" alt="">
                <h2>Feature</h2>
                <p>Welcome to Talent Us Inc., where we make the perfect match between exceptional talent and the
                    companies that need them.</p>
            </div>
            <div class="cards" id="cards">
                <img src="assets/primary-feature-image.jpg" alt="">
                <h2>Feature</h2>
                <p>Welcome to Talent Us Inc., where we make the perfect match between exceptional talent and the
                    companies that need them.</p>
            </div>
            <div class="cards">
                <img src="assets/feature-image.jpg" alt="">
                <h2>Feature</h2>
                <p>Welcome to Talent Us Inc., where we make the perfect match between exceptional talent and the
                    companies that need them.</p>
            </div>
        </div>
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

    <section id="testimonial-page">
        <div class="testimonial-cards" data-aos="fade-right" data-aos-duration="1000">
            <div class="card">
                <div class="paragraph">
                    <p>
                        Working with Talent Us Inc. was a game-changer for me. They not only helped me land a
                        fantastic
                        job but also provided valuable interview coaching and resume advice. Their dedication to my
                        success was evident every step of the way
                    </p>
                </div>
                <div class="infos">
                    <img src="assets/testimonial-pic-cards.jpg" alt="">
                    <div class="name">
                        <h3>Juan Bautista</h3>
                        <h5>Upwork CEO</h5>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="paragraph">
                    <p>The team at Talent Us Inc. is phenomenal. They didn't just find me a job; they found me a
                        career that I'm passionate about. I couldn't be happier with their support and guidance</p>
                </div>
                <div class="infos">
                    <img src="assets/testimonial-pic-cards.jpg" alt="">
                    <div class="name">
                        <h3>Juan Bautista</h3>
                        <h5>Upwork CEO</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-text" data-aos="fade-left" data-aos-duration="1000">
            <h2>Testimonial</h2>
            <h1>What's Our <span>Client Say About Us</span></h1>
            <p>At Talent Us Inc., our success is measured by the success and satisfaction of our clients and
                candidates. Here's what some of them have to say about their experiences working with us</p>
            <button>Read More</button>
        </div>
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

