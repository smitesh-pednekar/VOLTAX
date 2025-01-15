<?php 

include ("connection.php");
if(isset($_POST['submitbtn2']))
{
$name=test_input($_POST['cname']);
$email=test_input($_POST['cmail']);
$mobno=test_input($_POST['cnumber']);
$address=test_input($_POST['caddress']);
$state=test_input($_POST['cstate']);
$password=test_input($_POST['password']);
$confirmpassword=test_input($_POST['confirmpassword']);

$mysqli=connectdb();
$query = "INSERT INTO registration(c_name,c_email,mobile_no,address,state,password,confirm_password) VALUES(?,?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssissss',$name,$email,$mobno,$address,$state,$password,$confirmpassword);



if($statement->execute()) {
  echo '<script>
          alert("Your registration successfully!");
          window.location.href = "registration.html"; 
        </script>';
} else {
  echo '<script>
          alert("Error in posting feedback. Please try again!");
          window.location.href = "registration.html"; 
        </script>';
}


}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

