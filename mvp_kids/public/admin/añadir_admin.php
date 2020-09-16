<?php include("functions/functions_MVP.php");
    
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
                background-color: darkorange;
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
                width: 10%;
                padding: 2px;
                margin-top: 10px;
                margin-left: 7px;
                text-align: center;
                align-content: center;
                position: relative;
                background-color: #DF7401;
                border-radius: 5px;
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
                
                color: black;
                text-decoration: none;
                font-family: 'Saira Semi Condensed', sans-serif;
            }
            
            .b1:hover{
                padding: 15px;
                margin: 10px;
                
                color: red;
                text-decoration: underline;
                font-family: 'Saira Semi Condensed', sans-serif;
            }
            /*button css*/
            .button_sub{
                width: 75px;
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
        <li><a href='admin_index.php'>Dashboard</a></li>
            <li><?php if(isset($_SESSION['admin'])){
                    echo "<a href='edit_admin.php'>Editar Cuenta Admin</a>";
            }	
            ?></li>
            <li><a href="matricula.php">Matrículas</a></li>
            
            <li style="padding-left:58em;">
            <?php 
            if(isset($_SESSION['u'])){
                echo "<a href='logout.php?p=index.php'>Logout</a>";
            }
			else{
                if(isset($_SESSION['admin'])){
                    echo "<a href='logout.php?p=C:\xampp2\htdocs\mvp_kids\public\index.php'>Logout</a>";
                }
                else{
                echo "<a class='on' href='login.php'></a>";	
                }	
		    }		?></a>
            </li>
        </ul>
        
        </div>
        
    <div id="main_body">
        <div id="main">
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;"></h3>
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;"></h3>
            <div id="mat_container">
                <div id="mat_nav">
                <p>Añadir Cuenta</p>
                </div>
                <div id="main_mat">
                <?php 
if (isset($_GET['enter']))
{
    $name = $_GET['name'];
    $apellido1 = $_GET['apellido1'];
    $apellido2 = $_GET['apellido2'];
    $email=$_GET['email'];
    $pass= $_GET['pass'];
    $c_pass = $_GET['c_pass'];
    $tel= $_GET['tel'];

    $Squery = "SELECT * FROM admin_acc WHERE email = '$email' AND pass='$pass'";
    $Sq = mysqli_query($con,$Squery);
    if(mysqli_num_rows($Sq) > 0){
        echo "Username is already in system, 
              enter another Username";
        //header("insertar_user.php");
      }
    else{
        if($pass==$c_pass){
        $u_query = "INSERT INTO admin_acc (nombre, apellido1, apellido2, email, pass, tel)
            VALUES ('$name','$apellido1','$apellido2','$email', '$pass','$tel')";
          //echo "<p>$query</p>";
        $r = mysqli_query($con,$u_query);
        
        if(mysqli_affected_rows($con) == 1)
          print '<h3 style="color:orange;">La cuenta a sido insertado con éxito.</h3>';
        else
          print '<p style="color:red;">No se pudo insertar el usuario porque:<br />' . mysqli_error($con) . '</p>';
          
        }
        else{
          print '<p style="color:white;">Passwords no son identicos, entra los 2 passwords igual<br /></p>';
        }
    }
    mysqli_close($con);
}
                ?>
                <div><h2>Nuevo Admin</h2>
                <h3>Enter a new Account  (* = <a style="padding-left:2px; font-size:14px;color:orange">IMPORTANTE LLENAR</a>) </h3>
                <form  action="añadir_admin.php" method="GET">
                <table>
                <tr><td><h3>*Nombre </h3></td><td><h3><input style="padding:6px" type="text" name="name" 
                placeholder="" required></h3></td></tr>
                <tr><td><h3>*Apellido Paterno </h3></td><td><h3><input style="padding:6px" type="text" name="apellido1" 
                placeholder="" required></h3></td></tr>
                <tr><td><h3>Apellido Materno </h3></td><td><h3><input style="padding:6px" type="text" name="apellido2" 
                placeholder="" ></h3></td></tr>
                <tr><td><h3>*E-mail </td><td><h3><input style="padding:6px" type="text" name="email" 
                placeholder="example@email.com" required>
                <?php
                    if (isset($_GET["email"])) {
                    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) {
                        echo("  Email is valid");
                    } else {
                        echo("  Email is not valid");
                    }
                    }
                    ?></h3></td></tr>
                    
                <tr><td><h3>*Password </td><td><h3><input style="padding:6px" type="password" id="pass" name="pass" placeholder="123" 
                 title="Must contain at least one number and one uppercase 
                and lowercase letter, and at least 7 or more characters" required></h3></td></tr>
                </table>
                
                <table>
                <tr><td><h3>*Confirm Password </td><td><h3><input style="padding:6px" type="password" name="c_pass" 
                placeholder="" required></h3></td></tr>
                <tr><td><h3>Num. Telefono </td><td><h3><input style="padding:6px" type="text" name="tel" 
                placeholder="000-000-0000" ></h3></td></tr>
                </table>
                    
                <input class="button_sub" style="margin-left:10px" type="submit" name="enter" value="Entrar"><br>
                </form>
   </div>
   <br>
<a class="b1" href="admin_index.php"> Volver al Dashboard </a>
                    
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