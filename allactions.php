<?php
session_start(); 
//deleting donor
include 'connection.php';
//granting requests by donor
	

//deleting feedback 

if(isset($_GET['fno']))
{
	$fno=test_input($_GET['fno']);
	$mysqli=connectdb();
	$query = "delete from feedback where fno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$fno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewFeedback.php");
}	


if(isset($_GET['sno']))
{
	$mysqli=connectdb();
	$sno=test_input($_GET['sno']);
	$query = "delete from station where sno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$sno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:ViewOrDeleteStation.php");
}






if(isset($_GET['bno']))
{
	$bno=test_input($_GET['bno']);
	$mysqli=connectdb();
	$query = "delete from booking where bno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$bno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewbooking.php");
}	
	
	
	
	
	
	
	if(isset($_POST['btnupdate']))
{
	$sno=test_input($_POST['sno']);
	$sname=test_input($_POST['sname']);
	$scity=test_input($_POST['scity']);
	$sstate=test_input($_POST['sstate']);
	$saddress=test_input($_POST['saddress']);
	$smobile=test_input($_POST['smobile']);
	$mysqli=connectdb();
	
	$query = "update station set sname='".$sname."',scity='".$scity."',sstate='".$sstate."',saddress='".$saddress."',smobile='".$smobile."' where sno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$sno);
	
	
	if(!$statement->execute())
	{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:updateStation.php");
}

	
	
if(isset($_GET['bkaprove']))
{
	$bkaprove=test_input($_GET['bkaprove']);
	$mysqli=connectdb();
	
	$query = "update book set comment='your booking is sucessful, You can visit on time', status=1 where bid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$bkaprove);
	
	
	if(!$statement->execute())
	{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:adashboard.php");
}

//granting requests by donor
	
if(isset($_GET['cancel_bid']))
{
	$bid=test_input($_GET['cancel_bid']);
	$mysqli=connectdb();
	
	$query1 = "update bookrequest set status=1 where bid='".$book_bid."'";
	$statement1 = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement1->execute();

	
	$query = "update booking set comment='sorry...your booking is rejected', status=1 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$cancel_bid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:adashboard.php");
}


if(isset($_GET['bid']))
{
	$mysqli=connectdb();
	$bid=test_input($_GET['bid']);
	$query = "delete from book where bid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$bid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewbook.php");
}




if(isset($_GET['cancelbk']))
{
	$mysqli=connectdb();
	$bid=test_input($_GET['cancelbk']);
	$query = "delete from book where bid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$bid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:udashboard.php");
}






if(isset($_GET['apno']))
{
	$mysqli=connectdb();
	$uid=test_input($_GET['apno']);
	$query = "delete from book where bid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$bid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewbook.php");
}


//deleting recievers
if(isset($_GET['recno']))
{
	$recno=test_input($_GET['recno']);
	$mysqli=connectdb();
	$query = "delete from registration where slno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$recno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewreciever.php");
}


//deleting donations

if(isset($_GET['ano']))
{
	$ano=test_input($_GET['ano']);
	$mysqli=connectdb();
	$query = "delete from donations where ano=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$ano);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewdonationsadmin.php");
}

//requesting
if(isset($_GET['stno']))
{
	
	$stno=test_input($_GET['stno']);
	$r_date=date('yy-m-d');
	$r_time=date('h:i:sa');
	$mysqli=connectdb();
	
	$query=" INSERT INTO d_request(userid,d_id,r_date,r_time) VALUES(?,?,?,?) ";
	$statement = $mysqli->prepare($query);
	$statement->bind_param('siss',$_SESSION['USERID'],$d_id,$r_date,$r_time);
	if($statement->execute())
	{
		echo '<script type="text/javascript"> window.location="home_r.html"; </script>';
	}
	else
	{
		 echo '<script type="text/javascript"> alert("Error In Request"); </script>';
	}
	
	
}
	
//deleting requests by recievers
	
if(isset($_GET['rno']))
{
	$rno=test_input($_GET['rno']);
	$mysqli=connectdb();
	$query = "delete from d_request where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$rno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewRequestedFood.php");
}
	
//deleting donated food

if(isset($_GET['did']))
{
	$d_id=test_input($_GET['did']);
	$mysqli=connectdb();
	$query = "delete from d_item where d_id=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$d_id);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:DonatedFood.php");
}
	
//deleting requests by donor
	
if(isset($_GET['rid']))
{
	$rno=test_input($_GET['rid']);
	$mysqli=connectdb();
	$query = "delete from d_request where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$rno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}

	
//granting requests by donor
	
if(isset($_GET['grantid']))
{
	$grantid=test_input($_GET['grantid']);
	$mysqli=connectdb();
	
	$query1 = "update d_item set  dstatus=1 where d_id='".$grantid."'";
	$statement1 = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement1->execute();

	
	$query = "update d_request set comment='This item is granted to you! Congrats... Please collect it.', status=1 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$grantid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}


//denying requests by donor
	
if(isset($_GET['denyid']))
{
	
	$denyid=test_input($_GET['denyid']);
	$mysqli=connectdb();

	$query = "update d_request set comment='This item is not granted to you! Sorry!!!', status=2 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$denyid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}

//deleting subscribtion

if(isset($_GET['sno']))
{
	$sno=test_input($_GET['sno']);
	$mysqli=connectdb();
	$query = "delete from subscribe where sno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$sno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewsubscribe.php");
}

//deleting other feedbacks

if(isset($_GET['no']))
{
	$no=test_input($_GET['no']);
	$mysqli=connectdb();
	$query = "delete from feedback where no=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$no);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewsubscribe.php");
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>