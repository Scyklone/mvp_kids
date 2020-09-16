<?php
	$con = mysqli_connect("localhost","root","","mvp_kids") OR die('No se pudo conectar a MySQL: '. mysqli_connect_error());
	session_start();

	function redirect($location){
		header("Location: $location");
	}
	function set_message($msg){
		if(!empty($msg)) {
			$_SESSION['message'] = $msg;
			
		} else{
			$msg = "";
		}
	}
	function query($sql) {
		global $con;
		
		return mysqli_query($con, $sql);
		
	}
	
	
	function confirm($result){
    
		global $con;
		
		if(!$result) {
			die("QUERY FAILED " . mysqli_error($con));
		}
	}
	function display_message(){
		if(isset($_SESSION['message'])){
			
			echo $_SESSION['message'];
			
			unset($_SESSION['message']);
			
		}
		
	}

	function escape_string($string){
		global $con;
		
		return mysqli_real_escape_string($con, $string);  
	}

	function login_account(){
		if(isset($_POST['login'])){
			$user_name = escape_string($_POST['username']);
			$password = escape_string($_POST['pass']);
				
			$u_query = query("SELECT * FROM user WHERE email = '{$user_name}' AND pass = '{$password}' ");
			$r = confirm($u_query);
			$a_query = query("SELECT * FROM admin_acc WHERE email = '{$user_name}' AND pass = '{$password}' ");
			$q = confirm($a_query);
				
			
			
			if($u_row = mysqli_fetch_array($u_query)){
				//set_message("Welcome  ".$u_row['username']."");
				$_SESSION["u"] = $u_row['user_id'];
				$u_id = $_SESSION["u"];
				set_message("Welcome ".$u_row['username']."");	
				
				}
			else if($a_row = mysqli_fetch_array($a_query)){
				//set_message("Welcome  ".$a_row['nombre']."");
				$_SESSION["admin"] = $a_row['id'];
				$a_id = $_SESSION["admin"];
				set_message("Welcome ".$a_row['nombre']."");			
				
			}		
			else{
				set_message("Your Password or Username are wrong");
				//redirect('login.php');
							
			}
			//redirect('index.php'); 
			//header("Location: index.php");	
		}
}
			
    
?>