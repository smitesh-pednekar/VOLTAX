<?php      
    session_start();
    include("connection.php");  
	if(isset($_POST['submitbtn3']))
	{
      $aemail = $_POST['adminemail'];  
      $apassword = $_POST['password'];  
      
		$conn=connectdb();
        //to prevent from mysqli injection  
        $aemail = stripcslashes($aemail);  
        $apassword = stripcslashes($apassword);  
        $aemail = mysqli_real_escape_string($conn, $aemail);  
        $apassword = mysqli_real_escape_string($conn, $apassword);  
      
        $sql = "select *from adminlogin where adminemail = '$aemail' and password = '$apassword'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
		    $_SESSION['email']=$aemail;
            echo '<script type="text/javascript">window.location="admindashboard.php";</script>';  
        }  
        else{  
            echo '<script type="text/javascript">  alert("Invalid username or password");</script>';  
        }
	}
		
?>  