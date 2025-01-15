<?php 
include 'connection.php';
if(isset($_POST['btnsubmit']))
{
$cname=test_input($_POST['cname']);
$ccity=test_input($_POST['ccity']);
$cstate=test_input($_POST['cstate']);
$caddress=test_input($_POST['caddress']);
$cpincode=test_input($_POST['cpincode']);
$cmobile=test_input($_POST['cmobile']);
$tamount=test_input($_POST['tamount']);

$mysqli=connectdb();
$query = "INSERT INTO checkout(cname,ccity,cstate,caddress,cpincode,cmobile,tamount) VALUES(?,?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssssiis',$cname,$ccity,$cstate,$caddress,$cpincode,$cmobile,$tamount);



if($statement->execute())
{
	echo '<script type="text/javascript">window.location="payment.html";</script>';
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

