<?php
 session_start();


if(!empty($_SESSION['loggedin'])) 
{
	// echo $_SESSION['loggedin'];
}


if(!empty($_SESSION['logindone']))
{
	if(!empty($_SESSION['graphicdone']))
	{
		if(!empty($_SESSION['graphic2done']))
		{
			if(!empty($_SESSION['otpdone']))
			{
				if($_SESSION['logindone'] == "yes" && $_SESSION['graphicdone'] == "yes" && $_SESSION['graphic2done'] == "yes" && $_SESSION['otpdone'] == "yes")
				{
					  	header("Location: dashboard.php");
				}
				else
				{
						session_destroy();   
				}
			}
		}
	}

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
<body bgcolor="#0086dd">
	<?php include('header.php') ?>
	<section id="content">
		<div class="layout"><br>
			<h1> User Please Login (All the fields are compulsory) </h1><br><br>
			<img src="./images/lockimage.jpg" width=" 25%" height="220px"></img>
			<div style="float :right; margin-right: 15%;padding-left: 0px !important;"><br><br>
			<form action="checklogin.php" method="post">
				<input type="text"class="field90" placeholder="E-mail" required name="email"></input><br>
				<input type="password"class="field90" placeholder="password" required name="password"></input><br><br>
				<input type="submit" class="loginbtn9"name="" value="Proceed to S3PAS Validation"></input>
			</form>
			</div>
		</div>
	</section>
</body>
</html>