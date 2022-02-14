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
<body bgcolor="#0086dd">
	<span style="position: absolute;margin-top: 10px;color:darkblue;"> <?php echo $msg ?> </span>	
	<?php include('header.php') ?>
	<section id="content">
		<div class="layout"><br>
			<h1 > Safe, Secure and free </h1><br>
			<img src="./images/homeimg.png" width=" 30%" height="200px"></img>
			<div class="rightside">
				<h3> > Conventional textual password </h3> <br>
				<h3> > Graphical Interface (S3PAS) </h3><br><br>
				<button class="loginbtn" onclick="location.href='login.php'">Proceed to Login...</button>
			</div>
		</div>
	</section>
</body>
</html>