<?php 
    require_once("functions/functions_MVP.php");
    session_start();
?>
<!DOCTYPE html>
<html>

    <title>MVP Kids ✏️</title>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
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
            
            .button_sub{
                width: 275px;
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
            .aL{
            color: skyblue;
            position: relative;
            text-decoration-line: none;
            }       
            .aL:hover:not(.active){
                color: #08088A;
                text-decoration-line: underline;
            }
            
            
        
        </style>
    </head>
<body>
    <div id="container">
        <div id="header"><img src="img/MVP_banner.png" style="width:100%; height:170px"></div>
    <div id="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallería</a></li>
            <li><a href="matricula.php">Matrícula</a></li>
            <li><?php if(isset($_SESSION['admin'])){
                    echo "<a href='admin_index.php'>Dashboard</a>";
            }	
            if(isset($_SESSION['u'])){
              echo "<a href='editar_cuenta.php?id=$u_id'>Editar Cuenta</a>";
            }	
            ?>
            </li>
            <!--<li><a href="#"></a></li>
            <li><a href="http://127.0.0.1:81/wordpress/pueblo/">Pueblo</a></li>
            <li><a href="http://127.0.0.1:81/wordpress/">CoroUPRA</a></li>
            <li><a href="lobocoop/public/index.html">Proyecto Final</a></li>-->
            <li style="padding-left:58em;"><?php
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
        <p>Sign In</p>
        </div>
    <div id="main_mat">
        <h3>Enter Existing Account</h3>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
                if( (!empty($_POST['username'])) && (!empty($_POST['pass'])) ) 
                { //conectarme a ver si existe usuario    
                    if($dbc =mysqli_connect("localhost","root","","mvp_kids") 
                    OR die('No se pudo conectar a MySQL: '. mysqli_connect_error())) // Conectarse al servidor SQL
                       {
                            $username = $_POST['username'];
                            $password = $_POST['pass'];
                   
                            echo  "User y password entrados: ".$username." ".$password;
                            $u_query = "SELECT * FROM user WHERE email = '$username' AND pass = '$password'";
                            $r = mysqli_query($dbc, $u_query);
                            $a_query = "SELECT * FROM admin_acc WHERE email = '$username' AND pass = '$password'";
                            $q = mysqli_query($dbc, $a_query);
                             if ($row = mysqli_fetch_array($r))
                            {
                                if ( (strtolower($_POST['username']) == $row['email']) && ($_POST['pass'] ==$row['pass'] ) )
                                { // El usuario existe en la tabla... escoger a dónde va por su categoría
                                    echo "Info de la tabla usuarios";
                                    echo $row['email'];
                                    echo $row['pass'];
                                    
                                    header('Location: index.php?id='.$row['u_id'].'');
                                    //exit();
        
        
                                } 
                            }
                            else if($row = mysqli_fetch_array($q)){
                                if ( (strtolower($_POST['username']) == $row['email']) && ($_POST['pass'] ==$row['pass'] ) )
                                { // El admin existe en la tabla... escoger a dónde va por su categoría
                                    echo "Info de la tabla usuarios";
                                    echo $row['email'];
                                    echo $row['pass'];
                                    
        
                                    header('Location: admin/index.php?='.$row['id'].'');
                                    
                                    //exit();
                                }
                            }
                            else 
                            { // Usuario no existe en la tabla
                            
                                  print '<p>El username y/o password entrados no concuerdan con nuestros archivos!<br />
                                  Vuelva a intentarlo.<a href="login.php"> Login </a></p>';
                              
                            }
                    }
                    else
                        print'<p> No se pudo conectar a servidor MYSQL</p>';
                
                }
                else
                {
                    // No entró uno de los campos
        
                    print '<p>Asegúrese de entrar su username y password. Vuelva a intentarlo...<br /><a href="login.php"> Login </a></p>';
        
        
        
                }
        } 
        else{

        ?>
                    <form action="login.php" method="POST">
                    <table>
                    <tr><h3>E-mail <input style="padding:6px" type="text" name="username" placeholder="E-mail" required></h3></tr>
				    <tr><h3>Password <input style="padding:6px" type="password" name="pass" placeholder="Password" required></h3></tr>
				    <tr><input class="button_sub" style="margin-left:10px" type="submit" name="login" value="Login">
                    &nbsp;&nbsp;<a class="aL" href="insertar_cuenta.php">Nuevo Usuario?</a></tr>
                    </table>
                    </form>
                </div>
            </div>
            <?php
            }
            ?>
            
        </div>
        
        <!--<div class="sidebar">
            
        </div>-->
        
        
        </div>
    <div id="footer">
        Website creado por Gabriel X. Ferrer | Estuidiante de CCOM
        </div>
    </div>
</body>
    
</html>