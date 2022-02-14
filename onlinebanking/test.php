 <?php 
include 'send.php'; 


$_SESSION['smsotp'] = sms_OTP();
$num=$_POST['mobile'];
$number = $num; 
//$text = 'Hi There, how are you?'; 
$sms_api_result = sms_Send($number, 'Please do not share the one time password with anyone. Your One Time password is: '.$_SESSION['smsotp'],$debug);

?>