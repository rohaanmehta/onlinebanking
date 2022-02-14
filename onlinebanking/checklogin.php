	<?php include('connectiontodatabase.php') ?>
<?php

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT email,password FROM registration WHERE email ='$email' AND password='$password'";

$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0)
{
	// echo "logged in ";
	 session_start();

	 $_SESSION["loggedin"] = "$email";
 	 $_SESSION["logindone"] = "yes";


  	header("Location: graphicpage.php?n=$email");

}
else
{
	// echo "wrong id password";	
	echo $email; echo $password;
	$_SESSION["logindone"] = "no";
	session_destroy();   
  	header("Location: index.php?n=Wrong password");



}
	
  
 //  while($row = $result->fetch_assoc())
 //  {
	//   $tempname = $row['name'];
 //   $tempemail = $row['email']; 
 // $tempnumber = $row['number']; 
 // $tempcountry = $row['country'];
 
 
	// }



















?>