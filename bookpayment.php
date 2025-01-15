<?php 
include 'connection.php';
if(isset($_POST['submitbtn1']))
{

$name=test_input($_POST['name']);
$screenshot=test_input($_POST['screenshot']);



$mysqli=connectdb();
$query = "INSERT INTO bookpayment(name,screenshot) VALUES(?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ss',$name,$screenshot);



if($statement->execute())
{
	echo '<script type="text/javascript"> alert("Your payment is successful!");window.location="customerdashboard.php";</script>';
}

else
{
   echo '<script type="text/javascript">alert("Error... in posting feedback try again!"); </script>';
	
}
$statement->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>