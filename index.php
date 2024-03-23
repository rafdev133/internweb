<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>

<body>
    
    <header>
        <?php
            include "include/navbar.php";
        ?>
    </header>
        

    <body>
        <section id="hero-page" data-aos="fade-up" data-aos-duration="1000">
            <div class="hero-text">
                <h2>Your Partners in Career Success</h2>
                <h1>Connecting Talent with <span>Opportunity</span></h1>
                <p>Welcome to Talent Us Inc., where we make the perfect match
                    between exceptional talent and the
                    companies that need them.</p>
                <div class="button">
                    <button class="primary-color-btn">Get Started</button>
                    <button class="tertiary-color-btn">Contact Us</button>
                </div>
            </div>
            <div class="hero-img">
                <img src="assets/hero-image.png" alt="hero-image">
            </div>
        </section>

       <section>
                <?php
                    include "include/whatWeOffer.php";
                ?>
       </section>
       
       <section>
                <?php
                    include "include/aboutUs.php";
                ?>
       </section>


        <section id="collab-sites-page">
            <div class="collab-sites">
                <img src="assets/upwork.jpg" alt="upwork">
                <img src="assets/microsoft.jpg" alt="microsoft">
                <img src="assets/indeed.jpg" alt="indeed">
                <img src="assets/jobstreet.jpg" alt="jobstreet">
            </div>
        </section>

        <section id="video-page">
            <div class="video">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/QyhwSYhX09s?si=sTzWofM9bIWVBcUS"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </section>
        
        <section>
            <?php
                include "include/testimonial.php";
            ?>
        </section>

        <section id="latest-news-page">
            <div class="title">
                <h3>Latest News</h3>
                <h1>Recent Job and News Post</h1>
            </div>
            <div class="latest-news-cards">
                <div class="card">
                    <img src="assets/latest-news pic.jpg" alt="">
                    <button class="btn-date">December 12, 2023</button>
                    <h2>Web Development Hiring!</h2>
                    <p>
                        At Talent Us Inc., our success is measured by the success and satisfaction of our clients and
                        candidates. Here's what some of them have to say about their experiences working with us:
                    </p>
                    <a href="newsAndUpdate.html">
                        <button class="btn-readMore">Read More</button>
                    </a>
                </div>
                <div class="card">
                    <img src="assets/latest-news pic.jpg" alt="">
                    <button class="btn-date">December 12, 2023</button>
                    <h2>Web Development Hiring!</h2>
                    <p>
                        At Talent Us Inc., our success is measured by the success and satisfaction of our clients and
                        candidates. Here's what some of them have to say about their experiences working with us:
                    </p>
                    <a href="newsAndUpdate.html">
                        <button class="btn-readMore">Read More</button>
                    </a>
                </div>
                <div class="card">
                    <img src="assets/latest-news pic.jpg" alt="">
                    <button class="btn-date">December 12, 2023</button>
                    <h2>Web Development Hiring!</h2>
                    <p>
                        At Talent Us Inc., our success is measured by the success and satisfaction of our clients and
                        candidates. Here's what some of them have to say about their experiences working with us:
                    </p>
                    <a href="newsAndUpdate.html">
                        <button class="btn-readMore">Read More</button>
                    </a>
                </div>
            </div>
        </section>
        <section id="contact-us-page" data-aos="zoom-out" data-aos-duration="1500">
            <div class="contact-us">
                <h1>Got A Question? We Would Be Happy To Help!</h1>
                <a href="contactUs.html">
                    <button>Contact Us</button>
                </a>
            </div>
        </section>

        <section>
            <?php
                include "include/footer.php";
            ?>
        </section>

    </body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>