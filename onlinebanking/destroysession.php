<?php

session_start();
$_SESSION["otpdone"] = "no";
// echo $_SESSION['otpdone'];
session_destroy();   
header("Location: index.php?n=Wrong OTP");

?>