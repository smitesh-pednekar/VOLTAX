<?php 
include 'connection.php';
if(isset($_POST['btnsubmit']))
{
$sname=test_input($_POST['sname']);
$scity=test_input($_POST['scity']);
$sstate=test_input($_POST['sstate']);
$saddress=test_input($_POST['saddress']);
$smobile=test_input($_POST['smobile']);

$mysqli=connectdb();
$query = "INSERT INTO station(sname,scity,sstate,saddress,smobile) VALUES(?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssss',$sname,$scity,$sstate,$saddress,$smobile);



if($statement->execute())
{
	echo '<script type="text/javascript"> alert("Your Station is Added succesfully!");window.location="admindashboard.php";</script>';
}

else
{
   echo '<script type="text/javascript">alert("Error... in posting Station So try again!"); </script>';
	
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

