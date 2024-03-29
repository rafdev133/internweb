<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link rel="stylesheet" href="includeStyles/navbar.css">
</head>
<body>
  <nav>
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contactUs.php">Contact Us</a></li>
      <li><a href="newsAndUpdate.php">News & Updates</a></li>
      <li><button>Login</button></li>
    </ul>
    <ul>
      <li class="logo"><a href="#">logo</a></li>
      <li class="hideOnMobile"><a href="index.php">Home</a></li>
      <li class="hideOnMobile"><a href="about.php">About Us</a></li>
      <li class="hideOnMobile"><a href="contactUs.php">Contact Us</a></li>
      <li class="hideOnMobile"><a href="newsAndUpdate.php">News & Update</a></li>
      <li class="hideOnMobile"><button>Login</button></li>
      <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
    </ul>
  </nav>

  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }

    function checkScreenSize() {
      const isLargeScreen = window.innerWidth >= 768; 
      if (isLargeScreen) {
        hideSidebar();
      }
    }

    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
    
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const currentPageUrl = window.location.href;
      const navLinks = document.querySelectorAll('nav a');

      navLinks.forEach(link => {
        if (link.href === currentPageUrl) {
          link.parentElement.classList.add('active');
        }
      });
    });
  </script>

</body>
</html>