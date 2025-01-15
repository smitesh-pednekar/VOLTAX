<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Voltax - Book Your Eco-Friendly Ride</title>
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

  <style>
.ctad {
  padding: 1.5rem;
  background-color: #f8fafc;
}

.containers {
  max-width: 28rem;
  margin: 0 auto;
}

.cta-cards {
  background-color: white;
  border-radius: 1rem;
  overflow: hidden;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  border: 1px solid #e6efff;
  transition: box-shadow 0.3s ease;
}

.cta-cardz:hover {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

.card-headers {
  background: linear-gradient(to right, #2563eb, #22c55e);
  padding: 1rem;
  color: white;
}

.card-titles {
  font-size: 1.25rem;
  font-weight: 700;
  margin: 0;
  color: white;
}

.card-contents {
  padding: 1.5rem;
}

.info-items {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-bottom: 1rem;
  color: #4b5563;
}

.form-groups {
  margin-bottom: 1rem;
}

.form-labels {
  display: block;
  font-size: 0.875rem;
  font-weight: 500;
  color: #374151;
  margin-bottom: 0.5rem;
}

.form-inputs {
  width: 100%;
  padding: 0.5rem 0.75rem;
  border: 1px solid #d1d5db;
  border-radius: 0.5rem;
  margin-bottom: 1rem;
}

.form-inputs:focus {
  outline: none;
  border-color: #2563eb;
  box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
}

.cost-displays {
  background-color: #f9fafb;
  padding: 0.75rem;
  border-radius: 0.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 1rem 0;
}

.cost-amounts {
  color: #059669;
  font-weight: 600;
}

.book-buttons {
  width: 100%;
  background: linear-gradient(to right, #2563eb, #22c55e);
  color: white;
  padding: 0.75rem;
  border: none;
  border-radius: 0.5rem;
  font-weight: 500;
  cursor: pointer;
  transition: opacity 0.3s ease;
}

.book-buttons:hover {
  opacity: 0.9;
}
</style>

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
            <a href="#" class="navbar-link">Services</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Gallery</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About Us</a>
          </li>

          <li class="navbar-item">
            <a href="feedback.html" class="navbar-link">Give Feedback</a>
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



      
         

          

     <br>
	 <br>
	 
     <br>
	 <br>
      <section class="ctad">
        <center>
      <h2>
            Stations Available
          </h2>
          </center>
		
		<?php
		   include 'connection.php';
		   $conn =connectdb();

			$sql="Select * from station";
			$result=$conn->query($sql);
			
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{	
				echo '<form name="bkstation" action="bookstationSave.php" method="post">
				  <div class="containers">
    <div class="cta-cards">
      <div class="card-headers">
        <h2 class="card-titles">Station No: '.$row["sno"].'</h2>
        <h2 class="card-titles">Name: '.$row["sname"].'</h2>
        <input type="hidden" name="stno" value="'.$row["sno"].'">
        <input type="hidden" name="stname" value="'.$row["sname"].'">
      </div>
      
      <div class="card-contents">
        <div class="info-items">
          <span>Address: '.$row["saddress"].'</span>
        </div>
        
        <div class="info-items">
          <span>Mobile: '.$row["smobile"].'</span>
        </div>
        
        <div class="form-groups">
          <label class="form-labels">Charging Date</label>
          <input type="date" name="chdate" class="form-inputs">
        </div>
        
        <div class="form-groups">
          <label class="form-labels">Charging Time</label>
          <input type="time" name="chtime" class="form-inputs">
        </div>
        
        <div class="cost-displays">
          <span>Charging Cost</span>
          <span class="cost-amounts">300 Rs</span>
        </div>
        
        <button type="submit" name="btnsave" class="book-buttons">
          Book Now
        </button>
      </div>
    </div>
  </div>
</form>
		</div>	<BR>';
				}  
			}
		?>
	     </section>





    </article>
  </main>





  



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