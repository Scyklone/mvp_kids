<?php 
    require_once("functions/functions_MVP.php");
    $u_id = $_SESSION['u'];
    
?>
<?php 

unset($_SESSION['e_n']);
unset($_SESSION['e_ap1']);
unset($_SESSION['e_ap2']);
unset($_SESSION['grade']);
unset($_SESSION['age']);
unset($_SESSION['e_sch']);
unset($_SESSION['e_gend']);
unset($_SESSION['dof_B']);

//Parent variables
unset($_SESSION['parent_name1']);
unset($_SESSION['p1_a1']);
unset($_SESSION['p1_a2']);
unset($_SESSION['grado_esc1']);
unset($_SESSION['parent_name2']);
unset($_SESSION['p2_a1']);
unset($_SESSION['p2_a2']);
unset($_SESSION['grado_esc2']);

//Matricula variables
unset($_SESSION['dirr']);
unset($_SESSION['post']);
unset($_SESSION['d']);
unset($_SESSION['prog']);
unset($_SESSION['e_tel']);
unset($_SESSION['medic']);
unset($_SESSION['oth_symp']);
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
                position: relative;
            }
            
            
            #button_nav{
                
                background-color:azure;
                width: 100%;
                clear: both; 
            }
            
            #log_nav{
                right: auto;
                background-color:darkblue;
                width: 10%;
                clear: both; 
            }
            
            .on{
                
                align-content: right;
                background-image: url(img/avatar_icon1.png);
                background-position: center;
                background-repeat: no-repeat;
            }
            
            .on:hover{
                color:white;
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
                background-color: azure;
                border-top: 5px solid black;
                border-bottom: 5px solid black;
            }
            
            #main_body{
                display: flex;
                color: azure;
                font-family: Times, serif;
            }
            
            #main{
                float:left;
                width: 68%;
                text-align: left;
                padding: 2%;
                background-color: rgba(137, 136, 136, 0.55);
                border-top: 5px solid black;
                border-bottom: 5px solid black;
            }
            
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
        
        </style>
    </head>
<body>
    <div id="container">
        <div id="header"><img src="img/MVP_banner.png" style="width:100%; height:170px"></div>
    <div id="navbar">
        <div id="button_nav">
        <ul>
            <li ><a class="active" href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallería</a></li>
            <li><a href="matricula.php">Matrícula</a></li>
            <li><?php if(isset($_SESSION['admin'])){
                    echo "<a href='admin/admin_index.php'>Dashboard</a>";
            }	
            if(isset($_SESSION['u'])){
              echo "<a href='editar_cuenta.php?id=$u_id'>Editar Cuenta</a>";
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
        
        
        </div>
        
    <div id="main_body">
        <div id="main">
        
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;">Info</h3>
        <p style="padding-left:20px; font-family: 'Saira Semi Condensed', sans-serif;">
            Tutorías desde Pre-escolar a nivel Universitario.<br>
            Transportación<br>
            Estudios Supervisados(asignaciones, informes, repasos, proyectos)<br>
            Homeschool</p>
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;">Horarío</h3>
            <p style="padding-left:20px; font-family: 'Saira Semi Condensed', sans-serif;">
            2:00pm - 6:00pm <br>Lunes a Viernes</p>
        
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
        
        <div class="sidebar">
            <h3 style="font-family: 'Saira Semi Condensed', sans-serif;">Tutorías individuales</h3>
            <p style="padding-left:20px; font-family: 'Saira Semi Condensed', sans-serif;">- Matemáticas</p>
            <p style="padding-left:20px; font-family: 'Saira Semi Condensed', sans-serif;">- Espanol</p>
            <p style="padding-left:20px; font-family: 'Saira Semi Condensed', sans-serif;">- Ingles</p>
            <p style="padding-left:20px; font-family: 'Saira Semi Condensed', sans-serif;">- Física</p>
            <p style="padding-left:20px; font-family: 'Saira Semi Condensed', sans-serif;">- Química</p>
            <!--<a class="b1" href="php_work/pega3_img.php" target="_blank">Pega 3 con imagenes</a><br><br>
            <a class="b1" href="php_work/formulario.html" target="_blank">Formulario Simple</a><br><br>
            
            <h3 style="font-family: 'Saira Semi Condensed', sans-serif;">Quiz</h3>
            <a class="b1" href="Quiz1/descuento.html" target="_blank">Descuento</a><br><br>
            -->
        </div>
        
        
        </div>
    <div id="footer">
        Website creado por Gabriel X. Ferrer | Estuidiante de CCOM
        </div>
    </div>
</body>
    
</html>