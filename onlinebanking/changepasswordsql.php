	<?php include('connectiontodatabase.php') ?>
<?php
 session_start();

if(!empty($_SESSION['loggedin'])) 
{
  // echo $_SESSION['loggedin'];
  $email = $_SESSION['loggedin'];
}


$pass = $_POST['newpass'];


$sql = "UPDATE registration SET password='$pass'  WHERE email = '$email'";


if ($conn->query($sql) === TRUE) {
  // echo "record updated";
  header("Location: dashboard.php?n=Password Changed");
} else {
  // echo "Error: go back and try again  " . $sql . "<br>" . $conn->error;
}
			
mysqli_close($conn);
?>