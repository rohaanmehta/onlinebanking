	<?php include('connectiontodatabase.php') ?>
<?php
 session_start();

if(!empty($_SESSION['loggedin'])) 
{
  // echo $_SESSION['loggedin'];
}

$n =  $_POST['n'];
$d = $_POST['d'];
$p =  $_POST['p'];
$s = $_POST['s'];
$pin =  $_POST['pin'];
$e = $_POST['e'];
$pass = $_POST['pass'];


$sql = "UPDATE registration SET name='$n' , email='$e' , phoneno='$p' , state='$s' ,district='$d' ,pincode='$pin'  WHERE password
 = '$pass'";


if ($conn->query($sql) === TRUE) {
  // echo "record updated";
  $_SESSION['loggedin'] = "$e";
  header("Location: dashboard.php?n=Profile Updated");
} else {
  echo "Error: go back and try again  " . $sql . "<br>" . $conn->error;
}
			
mysqli_close($conn);
?>