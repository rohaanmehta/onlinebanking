<?phpcredits()
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style>
*
{
	margin: 0px;
	padding: 0px;
}
.headbox
{	
	width: 70%;
	height: 50px;
	background-color: black;
	margin-left: 15%;
	border: 10px solid #f2f2f2;
	border-radius: 10px;
	margin-top: -10px;
	padding-top: 20px;
}
.btn
{
	color: white;
	font-size: 22px;
	margin-left: 100px;
	text-decoration: none;
	background-color: black;
	margin-top: 300px;
}
.tittlebox
{
	width: 70%;
	height: 50px;
	margin-left: 15%;
	/*background-color: grey;*/
	padding-top: 40px;
	color: #f2f2f2;
}
.layout
{
	width: 70%;
	height: 400px;
	margin-left: 15%;
	background-color: #f2f2f2;
	padding-top: 20px;
	color: blue;
	padding-left: 50px;	
}
</style>
<body bgcolor="blue">
	<section id="header">
		<div class="headbox">
			<!-- <button class="btn"> Home </button> -->
			<a href="index.php" class="btn"> Home <a>
			<a href="login.php"  class="btn"> Login <a>
			<a href="registration.php"  class="btn" > Registration <a>
		</div>
	</section>
	<section id="tittlesection">
		<div class="tittlebox">
			<h2>Online Banking</h2>
			<p> S3PAS Powered</p>
		</div>
	</section>
	<section id="content">
		<div class="layout"><br>
			<h1> Safe, Secure and free </h1><br>
			<img src="bank.jpg" width=" 30%" height="200px"></img>
			<input type="text" name="email" placeholder="E-mail"></input><br><br>
			<input type="text" name="number" placeholder="Mobile no"></input><br><br>
			<input type="text" name="password" placeholder="Password"></input><br><br>
			<input type="text" name="confirmpassword" placeholder="Confirm Password"></input>
		</div>
	</section>
</body>
</html>