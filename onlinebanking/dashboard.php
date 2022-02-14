<?php
 session_start();
if(!empty($_GET['n'])) {
    $msg = $_GET['n'];// $msg = $_POST['msg'];
    // echo $msg;
 
}
else
{
	$msg ="";
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


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">	
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>											
</head>
<style>

</style>
<body bgcolor="#0086dd">
		<span style="position: absolute;margin-top: 10px;color:darkblue;"> <?php echo $msg ?> </span>
	<!-- chnanging css for header (btn) -->
	<?php include('header2.php') ?>
	<section id="content">
		<div class="layout"><br>
				<center><h1 style="margin-top: 150px;"> WELCOME YOU ARE SUCESSFULLY LOGGED IN </h1> <?php echo $email ?></center>
		</div>
	</section>
</body>
</html>