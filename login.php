<?php
session_start();
include 'connection.php';
if(isset($_POST['submitbtn1']))
{
$email=test_input($_POST['cemail']);
$password=test_input($_POST['cpassword']);
//$userpassword=hash('sha256', (get_magic_quotes_gpc() ? stripslashes($upassword) : $upassword));

	$conn=connectdb();

	$sql="Select * from registration where c_email= '".$email."' and password= '".$password."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['email']=$row['c_email'];	
				$_SESSION['password']=$row['password'];	
				
				}
				header("location: customerdashboard.php");
	}
	else
	{
		//header("Location:login.html");
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
