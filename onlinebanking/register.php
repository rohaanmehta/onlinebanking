<?php
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
	<!-- chnanging css for header (btn) -->
	<?php include('header.php') ?>
	<section id="content">
		<div class="layout"><br>
			<h3> New User Please Register ( All fields are compulsory ) </h3><br>
						<img src="./images/register.png" width=" 25%" height="220px"></img>
			<div style="float :right; margin-right: 5%;padding-left: 10px !important; margin-top: -10px;">
			<form action="insertvalues.php" method="post">
			<input type="text" placeholder="Name" class="field" required name="name"></input><br>
			<input type="text" placeholder="District" class="field" required name="district"></input><br>
			<input type="text" placeholder="Phone no" class="field" required name="phone" ></input><br>
			<input type="text" placeholder="State" class="field" required name="state" ></input><br>
			<input type="text" placeholder="Pincode" class="field" required name="pincode" ></input><br>
			<input type="text" placeholder="E-mail" class="field" required name="email"></input><br>
			<input type="password" id="pass" placeholder="Password" class="field" required name="password" onkeyup="checkpass()" ></input>
			<p id="max"> </p><br>

			<input type="submit" id="update" style="cursor: not-allowed;" class="updatebtn" value="Register Now " disabled> </input>
			</form>
			</div>

		</div>
	</section>
	<script>
		function checkpass()
		{
			var x = document.getElementById('pass');
			var y = document.getElementById('max');
			if(x.value.length < 8)
			{
				y.innerHTML = "password too short";
  				document.getElementById("update").disabled = true;
  				document.getElementById("update").style.cursor = "not-allowed";

			}
			else
			{
				y.innerHTML = "valid password";
  				document.getElementById("update").disabled = false;
  				document.getElementById("update").style.cursor = "pointer";				
			}
		}
	</script>
</body>
</html>