<?php include('connectiontodatabase.php') ?>
<?php
 session_start();


if(!empty($_GET['msg'])) {
    $msg = $_GET['msg'];// $msg = $_POST['msg'];
    // echo $msg;
 
}

if(!empty($_SESSION['loggedin'])) 
{
	// echo $_SESSION['loggedin'];
	$email = $_SESSION['loggedin'];
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


$sql = "SELECT password FROM registration WHERE email = '$email' ";

$result = $conn->query($sql);
// var_dump($result);
if ($result->num_rows > 0)

	{
  // output data of each row  
  	while($row = $result->fetch_assoc()) {

	$oldpass = $row["password"];
	
  }
} else {
  echo " not matching any  records in database";
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
<body bgcolor="#0086dd" onload="conditions()">
	<!-- chnanging css for header (btn) -->
	<?php include('header2.php') ?>
	<section id="content">
		<div class="layout"><br>
			<h3> Change your password ( All fields are compulsory )</h3><br><br>
									<img src="./images/lockimage.jpg" width=" 25%" height="220px"></img>
			<div style="float :right; margin-right: 30%;padding-left: 10px !important;"><br>
			<form action="changepasswordsql.php" method="post">			
			<input type="password" id="oldpass" onkeyup="oldpasscheck()" placeholder="Old Password" class="field09" required></input>
			<span id = "op" > </span> <br>
			<input type="password" id="newpass" style="cursor: not-allowed;" placeholder="New Password" onkeyup="newpassvalidation()" class="field09" required disabled ></input>
			<span id = "np"> </span> <br>
			<input type="password" id="confirmpass" style="cursor: not-allowed;" name="newpass" placeholder="Confirm New Password" class="field09"    onkeyup="newpasscheck()"  required disabled ></input>
			<span id = "cnp"> </span> <br>
			<input type="text" id="check" style="display: none;"><br>

			<input type="submit" id="update" class="updatebtnp" value="CHANGE PASSWORD "> </input>
			</form>
		</div>
	</section>
	<script>
		function oldpasscheck()
		{
			var x = document.getElementById('oldpass');
			var y = document.getElementById('op');

			if(x.value == "<?php echo $oldpass ?>" )
			{
				y.innerHTML = "password correct";	

  				 document.getElementById("newpass").disabled = false;
  				 document.getElementById("newpass").style.cursor = "text";
  				 		
			}
			else
			{
				y.innerHTML = "password not correct";
				 document.getElementById("update").disabled = true;
  				 document.getElementById("update").style.cursor = "not-allowed";
			}
		}

		function newpassvalidation()
		{
			var x = document.getElementById('newpass');
			var y = document.getElementById('np');

			if(x.value.length < 8)
			{
				y.innerHTML = "password too short";
				 document.getElementById("update").disabled = true;
  				 document.getElementById("update").style.cursor = "not-allowed";				

			}
			else
			{
				y.innerHTML = "valid password";			

  				 document.getElementById("confirmpass").disabled = false;
  				 document.getElementById("confirmpass").style.cursor = "text";						
			}
		}

		function newpasscheck()
		{
			var x = document.getElementById('confirmpass');
			var y = document.getElementById('cnp');
			var z = document.getElementById('newpass');


			if(x.value == z.value )
			{
				y.innerHTML = "password matched";
				 document.getElementById("update").disabled = false;
  				 document.getElementById("update").style.cursor = "pointer";				
			}
			else
			{
				y.innerHTML = "password doesnot match";
				 document.getElementById("update").disabled = true;
  				 document.getElementById("update").style.cursor = "not-allowed";				
			}
		}

		function conditions()
		{


		}

	</script>
</body>
</html>