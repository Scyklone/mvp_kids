<?php include("functions/functions_MVP.php");
    //session_start();
    $u_id = $_SESSION['u'];
      ?>
<?php 

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
?>
<!DOCTYPE html>
<html>

    <title>MVP Kids ✏️</title>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
        <link href="css/style2.css" rel="stylesheet">
        <style>
            body{
                
                background-image: url(img/cool_w1.gif);
                max-width: 100%;
                max-height: 100%;
                background-repeat: repeat;
            }
            #navbar{
                background-color:azure;
                width: 100%;
                clear: both;
                
            }
            
            .on{
                
                align-content: right;
                background-image: url(img/avatar_icon1.png);
                background-position: center;
                background-repeat: no-repeat;
            }
            
            .on:hover{
                
                align-content: right;
                background-image: url(img/avatar_icon2.png);
                background-position: center;
                background-repeat: no-repeat;
            }
            
            #header{
                width: 100%;
                padding-bottom: 15px;
                padding-top: 15px;
                clear: both;
                position: relative;
                text-shadow: coral 0 0 10px;
                background-color: deepskyblue;
                color: darkblue;
                text-align: center;
                border-bottom: 5px solid black;
                font-size: 4em;
                font-variant: small-caps;
                font-family: 'Lacquer', sans-serif;
            }
            
            #container{
                
                width: 95%;
                padding-top: 15px;
                margin: auto;
                position: relative;        }
            
            #sidebar{
                float:right;
                width: 32%;
                text-align: left;
                padding: 2%;
                background-color: rgba(137, 136, 136, 0.85);
                border-top: 5px solid black;
                border-bottom: 5px solid black;
            }
            
            #main_body{
                display: flex;
                color: azure;
                font-family: 'Lato', sans-serif;
            }
            
            #main{
                float:left;
                width: 100%;
                text-align: left;
                padding: 2%;
                background-color: rgba(137, 136, 136, 0.55);
                border-top: 5px solid black;
                border-bottom: 5px solid black;
            }
            /*Matricula BOX*/
            #mat_container{
                width: 96%;
                padding: 2%;
                background-color:lightgray;
                position: relative;
            }
            
            #mat_nav{
                width: 5%;
                padding: 2px;
                margin-top: 10px;
                margin-left: 7px;
                text-align: center;
                align-content: center;
                position: relative;
                background-color: #0B2161;
                border-radius: 8px;
            }
            
            #main_mat{
                width: 90%;
                padding: 5%;
                position: relative;
                background-color: dimgray;
            }
            /* END OF MATRICULA BOX*/
            #footer{
                width: 100%;
                padding-bottom: 8px;
                padding-top: 8px;
                position: relative;
                background-color: black;
                border: 2px solid deepskyblue;
                color: azure;
                text-align: center;
                font-size: 14px;
                font-variant: small-caps;
                font-family: 'Saira Semi Condensed', sans-serif;
            }
            
            .active{
                background-color: rgba(137, 136, 136, 0.55);
            }
            
            h3{
                padding-left: 15px;
                padding-top: 10px;
            }
            
            li{
                float: left;
            }
            
            input{
                border-radius: 5px;
            }
            
             li a{
                background-color: black;
                color: white;
                border-radius: 6px;
                position: relative;
                padding: 14px 16px;
                text-decoration-line: none;
            }
            
            li a:hover:not(.active){
                border-radius: 6px;
                background-color: darkorange;
                color: black;
            }
            ul{
                list-style-type: none;
                margin: 0;
                padding: 10px;
                overflow: hidden;
                background-color: rgba(0,0,0,0.8);
                font-family: 'Saira Semi Condensed', sans-serif;
                font-style: italic;
            }
            
            body{
                margin: 0;
            }
            
            .b1{
                padding: 15px;
                margin: 10px;
                color: white;
                text-decoration: none;
                font-family: 'Saira Semi Condensed', sans-serif;
            }
            
            .b1:hover{
                padding: 15px;
                margin: 10px;
                color: lightgray;
                text-decoration: underline;
                font-family: 'Saira Semi Condensed', sans-serif;
            }

            .aD{
                color: black;
                text-decoration: none;
                font-family: 'Saira Semi Condensed', sans-serif;
            }
            .aD:hover{
                color: lightgray;
                text-decoration: underline;
                font-family: 'Saira Semi Condensed', sans-serif;
            }
            /*button css*/
            .button_sub{
                width: 105px;
                height: 35px;
                font-size: 18px;
                background-color: #000;
                color: lightgray;
                border: 1px solid lightgray;
                border-radius: 5px;
                
            
            }
            .button_sub:hover{
                background-color: white;
                color: #0B2161;
                border: 1px solid #0B2161;
                box-shadow: 8px solid lightgray;
                border-radius: 5px;
            }
            
            
        
        </style>
    </head>
<body>
    <div id="container">
        <div id="header"><img src="img/MVP_banner.png" style="width:100%; height:170px"></div>
    <div id="navbar">
        <ul>
        <li ><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallería</a></li>
            <li><a href="matricula.php">Matrícula</a></li>
            <li><?php if(isset($_SESSION['admin'])){
                    echo "<a href='admin/admin_index.php'>Dashboard</a>";
            }	
            if(isset($_SESSION['u'])){
              echo "<a class='active' href='editar_cuenta.php'>Editar Cuenta</a>";
            }	
            ?>
            </li>
            <li><?php if(isset($_SESSION['u'])){
              echo "<a href='tus_matriculas.php?id=$u_id'>Tus Matrículas</a>";
            }	?></li>
            <!--<li><a href="#"></a></li>
            <li><a href="http://127.0.0.1:81/wordpress/pueblo/">Pueblo</a></li>
            <li><a href="http://127.0.0.1:81/wordpress/">CoroUPRA</a></li>
            <li><a href="lobocoop/public/index.html">Proyecto Final</a></li>-->
            <li style="padding-left:50em;"><?php
			if(isset($_SESSION['u'])){
                echo "<a href='logout.php?p=index.php'>Logout</a>";
            }
			else{
                if(isset($_SESSION['admin'])){
                    echo "<a href='logout.php?p=index.php'>Logout</a>";
                }
                else{
                echo "<a class='on' href='login.php'></a>";	
                }	
		    }												
			?></li>
        </ul>
        
        </div>
        
    <div id="main_body">
        <div id="main">
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;"></h3>
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;"></h3>
            <div id="mat_container">
                <div id="mat_nav">
                <p>Editar</p>
                </div>
                <div id="main_mat">
    <?php 
    
    ?>
    <?php 
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $query = "SELECT * FROM user WHERE usuario_ID=$u_id";
        if ($r = mysqli_query($con, $query))
        {
            $row = mysqli_fetch_array($r);
            print '<div><h3> Editar Cuenta  (* = <a style="padding-left:2px; font-size:14px;color:orange">IMPORTANTE LLENAR</a>) </h3>
            <form  action="editar_cuenta.php" method="POST">
            <table>
            <tr><td><h3>*Username </h3></td><td><h3><input style="padding:6px" type="text" name="username" 
            value="'.$row['username'].'"></h3></td></tr>
            <tr><td><h3>*E-mail </td><td><h3><input style="padding:6px" type="text" name="email" 
            value="'.$row['email'].'">
            </h3></td></tr>
                
            <tr><td><h3>*Password </td><td><h3><input style="padding:6px" type="text" id="pass" name="pass" 
            value="'.$row['pass'].'"></h3></td></tr>
            </table>
            
            <table>
            <tr><td><h3>Num. Telefono </td><td><h3><input style="padding:6px" type="text" name="tel" 
            value="'.$row['tel'].'" ></h3></td></tr>
            <tr><td><h3>Dirección Física </td><td><h3><input style="padding:6px" type="text" name="dir_fis" 
            value="'.$row['dir_fisica'].'" ></h3></td></tr>
            <tr><td><h3>Postal </td><td><h3><input style="padding:6px" type="text" name="postal" 
            value="'.$row['postal'].'" ></h3></td></tr>
            </table>
                
            <td><input class="button_sub" type="submit" name="editar" id="editar" value="Save" /></td>
		    <input type="hidden" name="us_id" value="'.$_GET['id'].'" />
            </form>
        </div>';
        }
        else{
            print '<p style="color:red;">No se puede mostrar la información 
            del usuario ya que ocurrió el error:<br />' . mysqli_error($con) . '</p>';
        }
    }
    else if(isset($_POST['us_id']) && is_numeric($_POST['us_id']))
    {
    $u = $_POST['username'];
    $email=$_POST['email'];
    $pass= $_POST['pass'];
    $tel= $_POST['tel'];
    $d_f= $_POST['dir_fis'];
    $postal= $_POST['postal'];  

      $query = "UPDATE user SET username='$u', email='$email', pass=$pass, tel=$tel,
                dir_fisica='$d_f', postal='$postal'
		        WHERE usuario_ID={$_POST['us_id']}";

	  if(mysqli_query($con, $query))
	        print '<p>La información del usuario ha sido actualizada exitosamente</p>';
	  else	  
          print '<p style="color:red;">No se pudo actualizar la información del 
          usuario ya que ocurrió el error:<br />' . mysqli_error($con);

    
    if (isset($_GET["email"])) {
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) {
              echo("  Email is valid");
    } else {
          echo("  Email is not valid");
        }
    }
        
}
else
   print '<p style="color:red;">Esta página ha sido accedida por error</p>';	  	

mysqli_close($con);
    ?>
    <br>
    <a class="aD" href="index.php"> Volver a Pagina Principal </a>&nbsp;&nbsp;&nbsp;
                
            </div>
        </div>
            <!--<a class="b1" href="php_work/phpinfo.php" target="_blank">PHP Info</a><br><br><br>
            <a class="b1" href="php_work/adivina.php" target="_blank">Adivina numero</a><br><br><br>
            <a class="b1" href="php_work/adivina_start.php" target="_blank">Adivina numero#2</a><br><br><br>
            <a class="b1" href="php_work/calculadora_boba.php" target="_blank">Calculadora Boba</a><br><br><br>
            
            <a class="b1" href="php_work/pega3.php" target="_blank">Pega 3</a><br><br><br>
            <a class="b1" href="php_work/form_calculadora.php" target="_blank">Formulario Calculadora</a><br><br><br>
            <a class="b1" href="php_work/pendiente.php" target="_blank">Pendiente</a><br><br><br>
            <a class="b1" href="php_work/array.php" target="_blank">Array Y Array Sorteado</a><br><br><br>
            <a class="b1" href="php_work/string.php" target="_blank">String</a><br><br><br>
       -->
       
        </div>
        
        <!--<div class="sidebar">
            
        </div>-->
        
        
        </div>
    <div id="footer">
        Website creado por Gabriel X. Ferrer | Estuidiante de CCOM
        </div>
    </div>
</body>

<script>
var myInput = document.getElementById("pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 7) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
-->
</html>