<?php

session_start();
$_SESSION["otpdone"] = "yes";
// echo $_SESSION['otpdone'];
header("Location: index.php");

?>
