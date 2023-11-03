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
            <a href="admin" class="navbar-link" data-nav-link>Admin Login</a>
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
                Registered Pations <span class="span">10000+</span>
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

      <section class="section about" id="about" aria-labelledby="about-label-1">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner-1.png" width="540" height="540" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="about-subtitle" id="about-label-1">Our services</p>

            <h2 class="h2 section-title">What services do we provide ?</h2>

            <p class="section-text text">
            Welcome to our Online Health Management System! Discover a convenient and secure way to monitor and improve your health. Our services offer personalized health tracking, appointment scheduling, telemedicine, and easy access to medical records. Take control of your well-being with us today.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                  <img src="./assets/images/about-1-1.jpg" width="80" height="80" loading="lazy" alt="Human Contact">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title">Appointment Scheduling</h3>

                  <p class="item-text text">
                  Simplify your life with easy Appointment Scheduling.
                  </p>
                </div>
              </li>

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                  <img src="./assets/images/about-1-2.jpg" width="80" height="80" loading="lazy" alt="Air Transmission">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title">Prescription Management</h3>

                  <p class="item-text text">
                    Effortless Prescription Management for your health.
                  </p>
                </div>
              </li>

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                  <img src="./assets/images/about-1-3.jpg" width="80" height="80" loading="lazy"
                    alt="Contaminated Objects">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title">Analytics and Reporting</h3>

                  <p class="item-text text">
                  Powerful Healthcare Analytics & Reporting.
                  </p>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





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
              <a href="./appoinment/appoinment.php">
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-1.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Add Appoinment</h3>

                  <p class="card-text text">
                  Book online appointments effortlessly, bringing quality healthcare right to your fingertips, any time, anywhere.
                  </p>
                </div>

              </div>
            </a>
            </li>

            <li>
              <a href="./prescription/index.php">
              <div class="service-card">

                <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                  <img src="./assets/images/service-1-2.jpg" width="110" height="110" loading="lazy"
                    alt="service image">
                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">Add Prescription</h3>

                  <p class="card-text text">
                    Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.
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

      <section class="section doctor" style="background-image: url('./assets/images/service-bg.jpg')"
        aria-labelledby="doctor-label">
        <div class="container">

          <h2 class="h2 section-title" id="doctor-label">Meet Our Best Doctors</h2>

          <p class="section-text text">
          Meet our distinguished team of expert doctors, dedicated to your health and well-being
          </p>

          <ul class="grid-list">

            <li>
              <div class="doctor-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 360;">
                  <img src="./assets/images/doctor-1-my.jpg" width="350" height="360" loading="lazy"
                    alt="Dorothy M. Nickell profile" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4 card-title">Dorothy M. Nickell</h3>

                  <p class="card-subtitle">Throat Specialist</p>

                  <p class="card-text text">
                  Dorothy M. Nickell: Your Expert Throat Specialist. Find relief and care for throat-related concerns
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">+94 2289786</span>
                    </li>

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">d.m.nickell@gmail.com</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="doctor-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 360;">
                  <img src="./assets/images/doctor-2-my.jpg" width="350" height="360" loading="lazy"
                    alt="Billie R. Courtney profile" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4 card-title">Billie R. Courtney</h3>

                  <p class="card-subtitle">Cardiologist</p>

                  <p class="card-text text">
                  Meet Billie R. Courtney, a trusted Cardiologist dedicated to your heart's well-being. Your health, our priority.
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">+94 77 2289561</span>
                    </li>

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">b.r.courtney@gmail.com</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="doctor-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 360;">
                  <img src="./assets/images/doctor-3-my.jpg" width="350" height="360" loading="lazy"
                    alt="Courtney A. Smith profile" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4 card-title">Courtney A. Smith</h3>

                  <p class="card-subtitle">Rehabilitation Therapy</p>

                  <p class="card-text text">
                  Courageous steps towards recovery. Courtney A. Smith: Your partner in Rehabilitation Therapy.
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">+94 77 2267897</span>
                    </li>

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">c.a.smith@gmail.com</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #SAFETY
      -->

      <!-- <section class="section safety" aria-labelledby="safety-label">
        <div class="container">

          <h2 class="h2 section-title" id="safety-label">How to Wash Your Hands</h2>

          <p class="section-text text">
            Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively
            extend
            alternative synergy and extensive web services.
          </p>

          <ol class="safety-list">

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-1.jpg" width="170" height="170" loading="lazy" alt="Wet Hands"
                  class="img">
              </figure>

              <span class="number">1</span>

              <h3 class="h4 item-title">Wet Hands</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-2.jpg" width="170" height="170" loading="lazy" alt="Apply Soap"
                  class="img">
              </figure>

              <span class="number">2</span>

              <h3 class="h4 item-title">Apply Soap</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-3.jpg" width="170" height="170" loading="lazy"
                  alt="Rub Hands Palm to palm" class="img">
              </figure>

              <span class="number">3</span>

              <h3 class="h4 item-title">Rub Hands Palm to palm</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-4.jpg" width="170" height="170" loading="lazy"
                  alt="Lather The Back of Both Hands" class="img">
              </figure>

              <span class="number">4</span>

              <h3 class="h4 item-title">Lather The Back of Both Hands</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-5.jpg" width="170" height="170" loading="lazy"
                  alt="Scrub Between Your Fingers" class="img">
              </figure>

              <span class="number">5</span>

              <h3 class="h4 item-title">Scrub Between Your Fingers</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-6.jpg" width="170" height="170" loading="lazy"
                  alt="Rub The Back of Fingers on The Opposing Palm" class="img">
              </figure>

              <span class="number">6</span>

              <h3 class="h4 item-title">Rub The Back of Fingers on The Opposing Palm</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-7.jpg" width="170" height="170" loading="lazy" alt="Clean Thumbs"
                  class="img">
              </figure>

              <span class="number">7</span>

              <h3 class="h4 item-title">Clean Thumbs</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-8.jpg" width="170" height="170" loading="lazy"
                  alt="Wash Fingernails And Fingertips" class="img">
              </figure>

              <span class="number">8</span>

              <h3 class="h4 item-title">Wash Fingernails And Fingertips</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-9.jpg" width="170" height="170" loading="lazy" alt="Rinse Hands"
                  class="img">
              </figure>

              <span class="number">9</span>

              <h3 class="h4 item-title">Rinse Hands</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-10.jpg" width="170" height="170" loading="lazy"
                  alt="Dry with a Single Use Towel" class="img">
              </figure>

              <span class="number">10</span>

              <h3 class="h4 item-title">Dry with a Single Use Towel</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-11.jpg" width="170" height="170" loading="lazy"
                  alt="Use The Towel to Rurn off The Foucet" class="img">
              </figure>

              <span class="number">11</span>

              <h3 class="h4 item-title">Use The Towel to Rurn off The Foucet</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/safety-12.jpg" width="170" height="170" loading="lazy"
                  alt="Your Hands Are Clean" class="img">
              </figure>

              <span class="number">12</span>

              <h3 class="h4 item-title">Your Hands Are Clean</h3>
            </li>

          </ol>

        </div>
      </section> -->





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-labelledby="blog-lable">
        <div class="container">

          <h2 class="h2 section-title" id="blog-label">Our Most Popular Blog</h2>

          <p class="section-text text">
            Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively
            extend
            alternative synergy and extensive web services.
          </p>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 280;">
                  <img src="./assets/images/blog-1.jpg" width="370" height="280" loading="lazy"
                    alt="Conulting Reporting Qouncil Arei Not Could More..." class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4">
                    <a href="#" class="card-title">
                      Conulting Reporting Qouncil Arei Not Could More...
                    </a>
                  </h3>

                  <div class="card-meta">

                    <div class="wrapper">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-07-12">July 12, 2022</time>
                    </div>

                    <div class="wrapper">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="meta-text">John Doe</p>
                    </div>

                  </div>

                  <p class="card-text text">
                    Pluoresntly customize pranci an plcentered customer service anding strategic amerials Interacvely
                    cordinate performe
                  </p>

                </div>

                <div class="card-footer">
                  <a href="#" class="btn-link">Read More</a>
                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 280;">
                  <img src="./assets/images/blog-2.jpg" width="370" height="280" loading="lazy"
                    alt="Financial Reporting Qouncil What Could More..." class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4">
                    <a href="#" class="card-title">
                      Financial Reporting Qouncil What Could More...
                    </a>
                  </h3>

                  <div class="card-meta">

                    <div class="wrapper">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-07-12">July 12, 2022</time>
                    </div>

                    <div class="wrapper">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="meta-text">John Doe</p>
                    </div>

                  </div>

                  <p class="card-text text">
                    Pluoresntly customize pranci an plcentered customer service anding strategic amerials Interacvely
                    cordinate performe
                  </p>

                </div>

                <div class="card-footer">
                  <a href="#" class="btn-link">Read More</a>
                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 280;">
                  <img src="./assets/images/blog-3.jpg" width="370" height="280" loading="lazy"
                    alt="Consulting Reporting Qounc Arei Could More..." class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4">
                    <a href="#" class="card-title">
                      Consulting Reporting Qounc Arei Could More...
                    </a>
                  </h3>

                  <div class="card-meta">

                    <div class="wrapper">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-07-12">July 12, 2022</time>
                    </div>

                    <div class="wrapper">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="meta-text">John Doe</p>
                    </div>

                  </div>

                  <p class="card-text text">
                    Pluoresntly customize pranci an plcentered customer service anding strategic amerials Interacvely
                    cordinate performe
                  </p>

                </div>

                <div class="card-footer">
                  <a href="#" class="btn-link">Read More</a>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





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