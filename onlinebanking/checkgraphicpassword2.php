<?php include('connectiontodatabase.php') ?>
<?php
 session_start();

$email = $_GET['n'];
$password = $_POST['password'];

$sql = "SELECT email,password FROM registration WHERE email ='$email' AND password='$password'";

$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0)
{
	// echo "logged in ";
  	$_SESSION["graphic2done"] = "yes";
  	header("Location: finalvalidation.php?n=$email");


}
else
{
	// echo "wrong id password";	
	echo $email; echo $password;
   	$_SESSION["graphic2done"] = "no";
	session_destroy();   
  	header("Location: index.php?n=Wrong password"); //logout previous


}
	
  
 //  while($row = $result->fetch_assoc())
 //  {
	//   $tempname = $row['name'];
 //   $tempemail = $row['email']; 
 // $tempnumber = $row['number']; 
 // $tempcountry = $row['country'];
 
 
	// }

?>