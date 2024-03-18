<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style/contactUs.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Contact Us</title>
</head>

<body>
    <header>
        <?php
            include "include/navbar.php";
        ?>
    </header>
        
    <section id="getInTouch-page">
        <div class="image" data-aos="fade-up" data-aos-duration="1500">
            <img src="assets/aboutUs.png" alt="">
        </div>
        <div class="form" data-aos="fade-down" data-aos-duration="1500">
            <h1>Get in Touch With Us</h1>
            <form action="">
                <input id="fullname" type="text" placeholder="Full Name">
                <input id="subject" type="text" placeholder="Subject">
                <input id="email" type="text" placeholder="Email">
                <input id="message" type="" placeholder="Message">
                <button>Submit</button>
            </form>
        </div>
    </section>

    <section id="contactUs-cards">
        <div class="cards">
            <div class="card">
                <img src="assets/contactUs-email.jpg" alt="">
                <h3>Email</h3>
                <p>(51) 123-123456</p>
                <p>(51) 123-123456</p>
            </div>
            <div class="card" >
                <img src="assets/contactUs-map.jpg" alt="">
                <h3>Address</h3>
                <p>talentus@gmail.com</p>
            </div>
            <div class="card" >
                <img src="assets/contactUs-hours.jpg" alt="">
                <h3>Working Hours</h3>
                <p>Rockwell Center, 5/F Phinma Plaza, 39 Plaza Dr, Makati, 1200 Metro Manila</p>
            </div>
            <div class="card">
                <img src="assets/contactUs-call.jpg" alt="">
                <h3>Phone</h3>
                <p>(09) 123-123456</p>
                <p>(09) 123-123456</p>
            </div>
        </div>
    </section>

    <section id="aboutUs-map-page">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61714.281711517266!2d121.0466325829077!3d14.817252366496913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397afa422693581%3A0x981101434383975d!2sSan%20Jose%20del%20Monte%20City%2C%20Bulacan!5e0!3m2!1sen!2sph!4v1709777504560!5m2!1sen!2sph"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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