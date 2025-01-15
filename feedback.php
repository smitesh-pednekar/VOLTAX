<?php 
include 'connection.php';
if(isset($_POST['submitbtn']))
{
$email=test_input($_POST['cemail']);
$name=test_input($_POST['cname']);
$message=test_input($_POST['cmessage']);
$fdate=test_input($_POST['cdate']);


$mysqli=connectdb();
$query = "INSERT INTO feedback(email,name,message,date) VALUES(?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssss',$email,$name,$message,$fdate);



if($statement->execute())
{
	echo '<script type="text/javascript"> alert("Your feedback is submitted succesfully!");window.location="feedback.html";</script>';
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

