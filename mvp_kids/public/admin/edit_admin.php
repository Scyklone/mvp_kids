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
            <li><a href="matriculas.php">Matrículas</a></li>
            
            <li style="padding-left:58em;">
            <?php 
            if(isset($_SESSION['u'])){
                echo "<a href='logout.php?p=index.php'>Logout</a>";
            }
			else{
                if(isset($_SESSION['admin'])){
                    echo "<a href='logout.php?p=public/index.php'>Logout</a>";
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
                <p>Editar Cuenta</p> 
                </div>
                <div id="main_mat">
                <?php
if(isset($_GET['id']) && is_numeric($_GET['id']))
{
   $a_id = $_SESSION['admin'];
   $query = "SELECT *
			FROM admin_acc
            WHERE id=$a_id";
   
   if ($r = mysqli_query($con, $query))
   {
	  $row = mysqli_fetch_array($r);
	  		
      print '<div><h2>Editar Cuenta Admin &nbsp;&nbsp;&nbsp;-<a class="b1" href="añadir_admin.php"> Añadir un nuevo Admin </a></h2>
      <form action="edit_admin.php" method="post">
      <table>
        <tr>
          <td><label for="apellido_p">Apellido Paterno: </label></td>
          <td><input style="padding:6px" type="text" name="apellido_p" id="apellido_p" value="' .$row['apellido1'].'" /></td>    
        </tr>
        <tr>
          <td><label for="apellido_m">Apellido Materno: </label></td>
          <td><input style="padding:6px" type="text" name="apellido_m" id="apellido_m" value="' .$row['apellido2'].'" /></td>
        </tr>
        <tr>
          <td><label for="nombre">Nombre: </label></td>
          <td><input style="padding:6px" type="text" name="nombre" id="nombre" value="' .$row['nombre'].'" /></td>
        </tr>
        <tr>
          <td><label for="email">Email: </label></td>
          <td><input style="padding:6px" type="text" name="email" id="email" value="' .$row['email'].'" /></td>
        </tr>
        <tr>
          <td><label for="dept">Password: </label></td>
          <td><input style="padding:6px" type="text" name="pass" id="depto_id" value="'. $row['pass'].'" /></td>        
        </tr>
        <tr>
          <td><label for="promedio">Tel: </label></td>
          <td><input style="padding:6px" type="text" name="tel" id="promedio" value="'. $row['tel'].'" /></td>
        </tr>
        <tr>
          <td><input class="button_sub" type="submit" name="editar" id="editar" value="Save" /></td>
		  <input type="hidden" name="ad_id" value="'.$_GET['id'].'" />
        </tr>
        </table>
      </form>
   </div>';
   }
   else
      print '<p style="color:red;">No se puede mostrar la información 
      del estudiante ya que ocurrió el error:<br />' . mysqli_error($con) . '</p>';
	         
}
else if(isset($_POST['ad_id']) && is_numeric($_POST['ad_id']))
{
	  $apellido_paterno = $_POST['apellido_p'];
	  $apellido_materno = $_POST['apellido_m'];
	  $nombre = $_POST['nombre'];
	  $email = $_POST['email'];
	  $pass = $_POST['pass'];
	  $tel = $_POST['tel'];   

      $query = "UPDATE admin_acc SET nombre='$nombre', apellido1='$apellido_paterno', 
                apellido2 ='$apellido_materno', email='$email', pass=$pass, tel=$tel
		        WHERE id={$_POST['ad_id']}";

	  if(mysqli_query($con, $query))
	        print '<p>La información del admin ha sido actualizada exitosamente</p>';
	  else	  
          print '<p style="color:red;">No se pudo actualizar la información del 
          Admin ya que ocurrió el error:<br />' . mysqli_error($con);
}
else
   print '<p style="color:red;">Esta página ha sido accedida por error</p>';	  	

mysqli_close($con);
?>
<br>
<a class="b1" href="admin_index.php"> Volver al Dashboard </a>&nbsp;&nbsp;&nbsp;

                    
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


-->
</html>