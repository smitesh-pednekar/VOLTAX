<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Voltax - View Booking</title>
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

    <link rel="stylesheet" href="viewbooking.css">
	
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <style>
.table-container {
  padding: 1rem;
  overflow-x: auto;
}

.table-title
{
  color:white;
  text-align:center;
  margin-bottom:10px;
}
.table {
  width: 100%;
  background-color: white;
  border-collapse: collapse;
  border-radius: 0.5rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.table th {
  background: linear-gradient(to right, #2563eb, #22c55e);
  color: white;
  padding: 1rem 1.5rem;
  text-align: left;
  font-weight: 600;
  font-size: 12px;
}

.table td {
  padding: 1rem 1.5rem;
  color: #374151;
  font-size: 12px;
  border-bottom: 1px solid #e5e7eb;
}

.table tr:hover {
  background-color: #f9fafb;
  transition: background-color 0.2s;
}

.delete-link {
  display: inline-block;
  padding: 0.5rem 1rem;
  background-color: #dc2626;
  color: white;
  text-decoration: none;
  border-radius: 0.375rem;
  font-weight: 500;
  font-size: 0.875rem;
  transition: background-color 0.2s;
}

.delete-link:hover {
  background-color: #b91c1c;
}
</style>


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
            <a href="#" class="navbar-link">Login</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About Us</a>
          </li>
          
          <li class="navbar-item">
            <a href="feedback.html" class="navbar-link">Give Feedback</a>
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

<br>
<br>
      

	 
     <br>
	 <br>
      <section class="ctad">
        


                <div class="table-container">
    <h2 class="table-title">Booking Details</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Booking No</th>
                <th>Station No</th>
                <th>Station Name</th>
                <th>Charge Date</th>
                <th>Charge Time</th>
                <th>Book Date</th>
                <th>Book Time</th>
                <th>C E-mail</th>
                <th style="color:red">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $conn = connectdb();
            $sql = "SELECT * FROM booking";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                        <td>' . $row["bno"] . '</td>
                        <td>' . $row["stno"] . '</td>
                        <td>' . $row["stname"] . '</td>
                        <td>' . $row["chdate"] . '</td>
                        <td>' . $row["chtime"] . '</td>
                        <td>' . $row["b_date"] . '</td>
                        <td>' . $row["b_time"] . '</td>
                        <td>' . $row["c_email"] . '</td>
                        <td><a href="allactions.php?bno=' . $row["bno"] . '">Delete?</a></td>
                    </tr>';
                }
            } else {
                echo '<tr><td colspan="9" style="text-align:center;">No records found</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>
          </section>






















                
            
     <script>
       document.getElementById('todayDate').valueAsDate = new Date();
     </script>


   

      

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