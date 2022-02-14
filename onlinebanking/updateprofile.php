<?php include('connectiontodatabase.php') ?>
<?php
 session_start();

if(!empty($_SESSION['loggedin'])) 
{

	// echo $_SESSION['loggedin'];
	$email = $_SESSION['loggedin'];
}

if(!empty($_GET['msg'])) {
    $msg = $_GET['msg'];// $msg = $_POST['msg'];
    // echo $msg;
 
}

if(empty($_SESSION['logindone']))
{
	if(empty($_SESSION['graphicdone']))
	{
		if(empty($_SESSION['graphic2done']))
		{	
			if(empty($_SESSION['otpdone']))
			{		
		  		header("Location: index.php");
		  	}		
			else
			{
			session_destroy();   
			}
		}
		
	}
}



$sql = "SELECT name, district, phoneno , state , pincode ,email ,password FROM registration WHERE email = '$email' ";

$result = $conn->query($sql);
// var_dump($result);
if ($result->num_rows > 0)

	{
  // output data of each row  
  	while($row = $result->fetch_assoc()) {

	$n =  $row["name"];
	$d =  $row["district"];
	$p =  $row["phoneno"];
	$s =  $row["state"];
	$pin =  $row["pincode"];
	$e =  $row["email"];
	$pass = $row["password"];
	
  }
} else {
  // echo " not matching any  records in database";
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">		
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>												
	<title></title>
</head>
<style>
</style>
<body bgcolor="#0086dd" onload="values()">
	<!-- chnanging css for header (btn) -->
	<?php include('header2.php') ?>
	<section id="content">
		<div class="layout"><br>
			<h3> Update your profile ( All fields are compulsory )</h3><br><br>
						<img src="./images/editman.png" width=" 25%" height="220px"></img>
			<div style="float :right; margin-right: 5%;padding-left: 10px !important;">
			<form action="updatevalues.php" method="post">			
			<input type="text" placeholder="Name" class="field" id="n" name="n" required></input><br>
			<input type="text" placeholder="District" class="field" id="d" name="d" required></input><br>
			<input type="text" placeholder="Phone no" class="field" id="p" name="p" required></input><br>
			<input type="text" placeholder="State" class="field" id="s" name="s" required></input><br>
			<input type="text" placeholder="Pincode" class="field" id="pin" name="pin" required></input><br>
			<input type="text" placeholder="E-mail" class="field" id="e" name="e" required ></input><br><br>
			<input type="text" id="pass" name="pass" style="display: none;"></input>
			<input type="submit" class="updatebtn" value="UPDATE PROFILE"> </input>
			</form>
		</div>

		</div>
	</section>
	<script>
		function values()
		{
			var u = document.getElementById('n');
			u.value = "<?php echo$n ?>";

			var v = document.getElementById('d');
			v.value = "<?php echo$d ?>";

			var w = document.getElementById('p');
			w.value = "<?php echo$p ?>";	

			var x = document.getElementById('s');
			x.value = "<?php echo$s ?>";

			var y = document.getElementById('pin');
			y.value = "<?php echo$pin ?>";	

			var z = document.getElementById('e');
			z.value = "<?php echo$e ?>";	

			var a = document.getElementById('pass');
			a.value = "<?php echo $pass ?>";

		}
	</script>
</body>
</html>