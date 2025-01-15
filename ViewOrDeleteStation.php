<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Voltax - View/delete Station</title>
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

    <link rel="stylesheet" href="viewfeedback.css">
	
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <style>
.containers {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 1.5rem;
}

.forms {
  background-color: white;
  border-radius: 1rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  overflow: hidden;
}

.title {
  display: block;
  background: linear-gradient(to right, #2563eb, #22c55e);
  color: white;
  padding: 1.5rem;
  font-size: 1.5rem;
  font-weight: 700;
}

.table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  margin-top: 1rem;
}

.table th {
  background-color: #f8fafc;
  color: #475569;
  font-weight: 600;
  font-size: 12px;
  text-align: left;
  padding: 1rem 1.5rem;
  border-bottom: 2px solid #e2e8f0;
}

.table td {
  padding: 1rem 1.5rem;
  color: #475569;
  font-size: 12px;
  border-bottom: 1px solid #e2e8f0;
  background-color: #f8fafc;
}

.table tr:hover {
  background-color: #f8fafc;
  transition: background-color 0.2s;
}

.table tr:last-child td {
  border-bottom: none;
}

.delete-link {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 1rem;
  color: #dc2626 !important;
  text-decoration: none;
  border-radius: 0.375rem;
  font-weight: 500;
  font-size: 0.875rem;
  transition: all 0.2s;
}

.delete-link:hover {
  background-color: #fef2f2;
  color: #b91c1c !important;
}

@media (max-width: 768px) {
  .table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
  }
  
  .containers {
    padding: 1rem;
  }
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
            <a href="#" class="navbar-link">Contact Us</a>
          </li>

        </ul>
      </nav>

      <div class="header-action">

        <a href="tel:+12312345678901" class="contact-number">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

          <span class="span">+(123) 1234-567-8901</span>
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


</br>
</br>
</br>
</br>
<section class="cta">
      
                <span class="title">View/Delete Station</span>



<table class="table table-striped" border="1" top-margin="-20px">
  <tr>
    <th>Sno</th>
	<th>Sname</th>
	<th>Scity</th>
    <th>Sstate</th>
	<th>Saddress</th>
	<th>Smobile</th>
    <th style="color:red">DELETE</th>

	
  </tr>		
		
		
		
		
<?php
   include 'connection.php';
   $conn =connectdb();

	$sql="Select * from station";
	$result=$conn->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{	
		echo '<tr>
			<td>'.$row["sno"].'</td>
			<td>'.$row["sname"].'</td>
			<td>'.$row["scity"].'</td>
			<td>'.$row["sstate"].'</td>
			<td>'.$row["saddress"].'</td>
			<td>'.$row["smobile"].'</td>
			<td><a style="color:black;" href="allactions.php? sno='.$row["sno"].'"> Delete?</a></td>
		   </tr>';
		}  
	}
?>
		
	</table>	






















                
         
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