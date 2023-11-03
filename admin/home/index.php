<?php
// Include your database connection code
// You have provided the database connection code

// Check if the user is logged in and has access to create appointments
session_start();

if (!isset($_SESSION['user_id'])) {
    // die("You must be logged in to set an appointment.");
	header("location: ../index.php"); // Redirect to the login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Healthcare</title>
  <meta name="title" content="COVID-19 Tracker">
  <meta name="description" content="This is a corona html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <!-- <img src="./assets/images/logo.svg" width="199" height="50" alt="Covid-19 home"> -->
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>

         

          <li class="navbar-item">
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

         

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu"></ion-icon>
        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

      <a href="./appoinment/appoinment.php" class="btn btn-primary">Appoinment</a>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" style="background-image: url('./assets/images/hero-bg.jpg')"
        aria-label="home">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Healthcare Management System</h1>

            <p class="hero-text">
              <!-- Tatal Confirmed Corona Cases -->
            </p>

            <data class="counter" value="960708">24 / 7 </data>

            <ul class="hero-list">

              <li class="hero-list-item yellow">
                Active Branches <span class="span">62</span>
              </li>

              <li class="hero-list-item green">
                Available Doctors <span class="span">456</span>
              </li>

              <li class="hero-list-item red">
                Registered Patients <span class="span">10000+</span>
              </li>

            </ul>

            <a href="#" class="btn btn-primary">Meet The Doctor</a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="570" height="562" alt="corona virus" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

    





      <!-- 
        - #SERVICE
      -->

      <section class="section service has-bg-image" style="background-image: url('./assets/images/service-bg.jpg')"
        aria-labelledby="service-label-1">
        <div class="container">

          <h2 class="h2 section-title" id="service-label-1">Appointments & Prescriptions</h2>

          <p class="section-text text">
          Experience healthcare made easy. Schedule appointments and upload prescriptions with our user-friendly online platform
          </p>

          <ul class="service-list">

            <li>
              <a href="../user/display_users.php">
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-1.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">User Management</h3>

                  <p class="card-text text">
                  User management: Administering access, accounts, and permissions on a website for security and customization
                  </p>
                </div>

              </div>
            </a>
            </li>

            <li>
              <a href="../../doctors/list_doctors.php">
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-2.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Doctor Management</h3>

                  <p class="card-text text">
                  Efficient online doctor management system for appointments, records, and patient communication. 
                  </p>
                </div>

              </div>
</a>
            </li>

            <li>
              <a href="../../doctors/add_doctor.php">
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-2.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Add New Doctor</h3>

                  <p class="card-text text">
                  Efficient online doctor management system for appointments, records, and patient communication. 
                  </p>
                </div>

              </div>
</a>
            </li>

            <li>
              <a href="../appoinment/appointments.php">
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-2.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">View Appointment</h3>

                  <p class="card-text text">
                  Efficient online doctor management system for appointments, records, and patient communication. 
                  </p>
                </div>

              </div>
</a>
            </li>

            <!-- <li>
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-3.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Strong Headacke</h3>

                  <p class="card-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
                  </p>
                </div>

              </div>
            </li> -->

            <!-- <li>
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-4.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Shortness Of Breath</h3>

                  <p class="card-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
                  </p>
                </div>

              </div>
            </li> -->

            <!-- <li>
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-5.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Confusion</h3>

                  <p class="card-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
                  </p>
                </div>

              </div>
            </li> -->

            <!-- <li>
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-6.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Sore Throat</h3>

                  <p class="card-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
                  </p>
                </div>

              </div>
            </li> -->

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <!-- <section class="section about" id="about" aria-labelledby="about-label-2">
        <div class="container">

          <figure class="about-banner order-1">
            <img src="./assets/images/about-banner-2.png" width="540" height="540" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="about-subtitle" id="about-label-2">About (2020-nCoV)</p>

            <h2 class="h2 section-title">Prevention Coronavirus</h2>

            <p class="section-text text">
              Don’t get shirty with mein owtto doing with me arse down the problems have it car boot happy days no
              biggie bevvy only
              awesome quid I,m goods info my theme flat the lttle rotter cheeky boot happy days
            </p>

            <ul class="about-list">

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                  <img src="./assets/images/about-2-1.jpg" width="80" height="80" loading="lazy"
                    alt="Wash Your Hands For 20sec">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title">Wash Your Hands For 20sec</h3>

                  <p class="item-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
                  </p>
                </div>
              </li>

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                  <img src="./assets/images/about-2-2.jpg" width="80" height="80" loading="lazy"
                    alt="Cover Nose and Mouth When Sneezing">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title">Cover Nose and Mouth When Sneezing</h3>

                  <p class="item-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
                  </p>
                </div>
              </li>

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                  <img src="./assets/images/about-2-3.jpg" width="80" height="80" loading="lazy"
                    alt="Wear A Mask If Available">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title">Wear A Mask If Available</h3>

                  <p class="item-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
                  </p>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </section> -->





      <!-- 
        - #DOCTOR
      -->

    




   





     



  <!-- 
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <!-- <h3 class="h4 footer-list-title">About Covid-19</h3> -->

          <p class="footer-text text">
          Your body hears everything your mind says
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <p class="contact-title">Headquarters:</p>

              <address class="address text">
                Kaduwela Road,Malabe,Sri Lanka
              </address>
            </li>

            <li class="contact-item">
              <p class="contact-title">Phone:</p>

              <a href="tel:+524623435643" class="text">(+94) 77 2289 561</a>
            </li>

            <li class="contact-item">
              <p class="contact-title">Email:</p>

              <a href="mailto:info@covid-19.com" class="text">info@healthcare.com</a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <h3 class="h4 footer-list-title">Navigate</h3>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Advertisers</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Developers</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Resources</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Company</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Connect</a>
          </li>

        </ul>

        <ul class="footer-list social-list">

          <li>
            <h3 class="h4 footer-list-title">Social Contact</h3>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-facebook" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Facebook</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-twitter" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Twitter</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Instagram</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-youtube" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">YouTube</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-xing" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Xing</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <h3 class="h4 footer-list-title">Privacy And Tos</h3>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Advertiser Agreement</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Acceptable Use Policy</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Technology Privacy</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Developer Agreement</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2023 All Rights Reserved
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>