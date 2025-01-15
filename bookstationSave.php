<?php
//requesting
session_start(); 
//deleting donor
include 'connection.php';
//granting requests by donor
	
if(isset($_POST['btnsave']))
{
	$_SESSION['email'];
	$stno=test_input($_POST['stno']);
	$stname=test_input($_POST['stname']);
	$chdate=test_input($_POST['chdate']);
	$chtime=test_input($_POST['chtime']);
	$b_date=date('yy-m-d');
	$b_time=date('h:i:sa');
	$mysqli=connectdb();
	
	$query=" INSERT INTO booking(stno,stname,chdate,chtime,b_date,b_time,c_email) VALUES(?,?,?,?,?,?,?) ";
	$statement = $mysqli->prepare($query);
	$statement->bind_param('sssssss',$stno,$stname,$chdate,$chtime,$b_date,$b_time,$_SESSION['email']);
	if($statement->execute())
	{
		echo '<script type="text/javascript"> window.location="bookpayment.html"; </script>';
	}
	else
	{
		 echo '<script type="text/javascript"> alert("Error In booking try again!!"); </script>';
	}
	
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>