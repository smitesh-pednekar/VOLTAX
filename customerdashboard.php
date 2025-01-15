<?php
 session_start();
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
  <title>Voltax - User Dashboard</title>
  <meta name="title" content="Voltax - Book Your Eco-Friendly Ride">
  <meta name="description" content="This is a ev charging website">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="./assets/font/font.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/loading.svg">
  <link rel="preload" as="image" href="./assets/images/loading-circle.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class=" preload-box" data-preloader>
    <img src="./assets/images/loading.svg" width="45" height="45" alt="loading">

    <img src="./assets/images/loading-circle.svg" width="75" height="75" alt="loading" class="preload-circle">
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <!-- <img src="./assets/images/a.svg" width="160" height="50" alt="volti home"> -->
        <h1 style="color:black;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">VOLTAX</h1>
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

         
          <li class="navbar-item">
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About Us</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Login</a>
          </li>
          
          <li class="navbar-item">
            <a href="#" class="navbar-link">Give Feedback</a>
          </li>
		  <li class="navbar-item">
            <a href="#" class="navbar-link">Admin</a>
          </li>

        </ul>
      </nav>

      <div class="header-action">

        <a href="tel:+12312345678901" class="contact-number">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

          <span class="span">+(91) 9663856962</span>
        </a>

        <a href="#" class="btn btn-primary">
          <span class="span">Get a quote</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>
        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

 

      <section class="section service" aria-labelledby="service-label">
        <div class="container">

          

          <h2 class="h2 section-title" data-reveal>
		  	<br>
			
            WELCOME TO USER DASHBOARD
			
          </h2>
		
          <div class="wrapper">
             
            <ul class="service-list" data-reveal="left">

              <li class="service-item">
               
			   <div>
                  <!-- <h3 class="h5 card-title"><a href="bookstation.php">Book Station</a></h3> -->
                  <h3 class="h5 card-title"><a href="bookstation.php">Book Station</a></h3>
                  <p class="card-text">
                    Can book the station easily from here.Just click on Link
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="car-outline" aria-hidden="true"></ion-icon>
                </div>
              </li>
			  
			         
			  
			  

              <li class="service-item">
                <div>
                  <h3 class="h5 card-title"><a href="viewbooking.php">View/Delete Booking</a></h3>

                  <p class="card-text">
                    Can View/Delete booking easily from here.Just click on Link
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>
                </div>
              </li>

              <li class="service-item">
               <div>
                    <h3 class="h5 card-title"><a href="smartdevice.html">Buy Smart Device</a></h3>

                  <p class="card-text">
                    Can buy the smart device from here.
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="bonfire-outline" aria-hidden="true"></ion-icon>
                </div>
              </li>

            </ul>

            <figure class="service-banner img-holder" style="--width: 805; --height: 510;">
              <img src="./assets/images/service-banner.png" width="805" height="510" loading="lazy" alt="service banner"
                class="img-cover">
            </figure>

            <ul class="service-list" data-reveal="right">

           

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title"><a href="feedback.html">Give Feedback</a></h3>

                  <p class="card-text">
                    Can give the feedback for the service provided.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="bonfire-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title"><a href="customerlogout.php">Log Out</a></h3>

                  <p class="card-text">
                    Log out from the dashboard.
                  </p>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

     





      <!-- 
        - #BLOG
      -->



      <!-- 
        - #CONTACT
      -->

      

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->






  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="go to top" data-go-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>