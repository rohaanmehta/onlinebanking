<?php include('connectiontodatabase.php') ?>
<?php
 session_start();
// echo "otpdone".$_SESSION['otpdone'];
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


if(!empty($_SESSION['loggedin'])) 
{
	$email =  $_SESSION['loggedin'];
}
else
{
	  	header("Location: index.php");
	  	session_destroy();   
}


$sql = "SELECT phoneno FROM registration WHERE email ='$email'";

$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
 	{
		$number = $row['phoneno'];
		// echo $number;
	}
}
else
{
	// session_destroy();   
 //  	header("Location: index.php?n=Wrong OTP"); //logout previous


}
$otp = "1";




	$otp = mt_rand(000000,999999) ;

	$fields = array(
	    "sender_id" => "FSTMSG",
	    "message" => "Your OTP is ".$otp." Dont share it with anyone",
	    "variables_values" => "12345|asdaswdx",
	    "route" => "q",
	    "numbers" => $number,
	);

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_SSL_VERIFYHOST => 0,
	  CURLOPT_SSL_VERIFYPEER => 0,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode($fields),
	  CURLOPT_HTTPHEADER => array(
	    "authorization: GYj5g3dS8yFDzxklPRaIJZ6eC7Obwf2UhTnuHAqEBcimpt9041upVqJv4ESdRAzjNyl76TWM8XehiHrQ",
	    "accept: */*",
	    "cache-control: no-cache",
	    "content-type: application/json"
	  ),
	));
// old api ZP1WB3V6lTsfQaJGjXOM08NrIinoU5dbFAeYHDpEcCw4hgqvRzNfCMoFDdehWiBja4bmULQVyJ5pcxOz 
	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  // echo "cURL Error #:" . $err;
	} else {
	  // echo $response;
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
		<div class="layout3"><br>
			<h1 style="margin-left: 0px"> Final Validation </h1><br><br>
			<div class="centerbox">
				<div style="float: right; margin-right: 30%;">
					<h3> Enter the code sended on your mobile<h3>								
					<input type="text"class="field4" placeholder="Enter OTP" id="checkotp" onkeypress="return onlyNumberKey(event)" maxlength="6" ></input><br>
					<input type="button" class="loginbtn3"name="" onclick="checkotp()" value="Login"></input>
					</div>
					<img src="./images/manlock.png" width="15%" height="130px"></img><br><br>
					<img src="./images/lockimage.jpg" width="15%" height="130px"></img>		
					
				<!-- <button onclick="sendSMS()"> send </button> -->
			</div>
		</div>
	</section>

<script>
function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

function checkotp()
{
	var y  = '<?php echo $otp ;?>';
	var x = document.getElementById('checkotp');
	if(x.value == y)
	{
		console.log('correct otp');
		location.replace("startsession.php");	  	
		// console.log(x.value,y);
	}
	else
	{
		console.log('wrong otp');
	  location.replace("destroysession.php");
		
	}
}	
</script>
</body>

</html>