	<?php include('connectiontodatabase.php') ?>
<?php

$name =  $_POST['name'];
$district = $_POST['district'];
$phone =  $_POST['phone'];
$state = $_POST['state'];
$pincode =  $_POST['pincode'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO registration (name,district,phoneno,state,pincode,email,password)
VALUES ('$name','$district','$phone','$state','$pincode','$email','$password')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header("Location: index.php?n=Account created");
} else {
  // echo "Error: go back and try again  " . $sql . "<br>" . $conn->error;
}
			
mysqli_close($conn);
?>