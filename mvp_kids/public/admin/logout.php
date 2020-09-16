<?php 
include("functions/functions_MVP.php");
session_start();
$place = $_GET['p'];
unset($_SESSION['user']);
unset($_SESSION['u']);
unset($_SESSION['admin']);
redirect("".$place."");

?>