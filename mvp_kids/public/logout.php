<?php 
include("functions/functions_MVP.php");
session_start();
$place = $_GET['p'];
unset($_SESSION['user']);
unset($_SESSION['u']);
unset($_SESSION['admin']);


unset($_SESSION['e_name']);
unset($_SESSION['e_a1']);
unset($_SESSION['e_a2']);
unset($_SESSION['e_grade']);
unset($_SESSION['e_age']);
unset($_SESSION['e_school']);
unset($_SESSION['e_gender']);
unset($_SESSION['e_dof_B']);

//Parent variables
unset($_SESSION['parent_name']);
unset($_SESSION['p_a1']);
unset($_SESSION['p_a2']);
unset($_SESSION['grado_esc']);

//Matricula variables
unset($_SESSION['u_dirr']);
unset($_SESSION['u_postal']);
unset($_SESSION['dates']);
unset($_SESSION['programa']);
unset($_SESSION['emg']);
unset($_SESSION['plan']);
unset($_SESSION['other_symptoms']);

redirect("".$place."");

?>