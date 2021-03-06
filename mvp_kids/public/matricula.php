<?php 
    require_once("functions/functions_MVP.php");
    $u_id = $_SESSION['u'];  
?>
<?php 

unset($_SESSION['e_name']);
unset($_SESSION['e_a1']);
unset($_SESSION['e_a2']);
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
        <link href="style2.css" rel="stylesheet">
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
                margin-left: 10px;
                text-align: center;
                align-content: center;
                position: relative;
                background-color: darkorange;
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
            
            input{
                border-radius: 5px;
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
            textarea {
                width: 550px;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
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
            <li><a class="active" href="matricula.php">Matrícula</a></li>
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
        
    <div id="main_body">
        <div id="main">
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;"></h3>
        <h3 style="font-family: 'Saira Semi Condensed', sans-serif;"></h3>
            <div id="mat_container">
                <div id="mat_nav">
                <p>Student</p>
                </div>
                <div id="main_mat">
                <?php if(!isset($_SESSION['u']) && !isset($_SESSION['admin'])){ 
                    print "<h3>You are currently not logged in our systems, please enter your account</h3>
                    <p>&nbsp;&nbsp;&nbsp;<a href='login.php' class='aL'>Log In</a></p>";
                    }
                    if(isset($_SESSION['u'])){
                        ?>
                <h2 style="color:white">Enter Student Info</h2>
                    
                <form action="matricula_official.php" method="GET">
                <table>
                <tr><td><h3>Nombre: </h3><td><input style="padding:6px" type="text" name="e_name" placeholder="name" required></td></tr>
                <tr><td><h3>Apellido Paterno: </h3></td><td><input style="padding:6px" type="text" name="e_a1" placeholder="age" required></td></tr>
                <tr><td><h3>Apellido Materno: </h3></td><td><input style="padding:6px" type="text" name="e_a2" placeholder="age" required></td></tr>
			    <tr><td><h3>Grado: </h3></td><td><input style="padding:6px" type="text" name="grade" placeholder="e_grade" required></td></tr>
                <tr><td><h3>Edad: </h3></td><td><input style="padding:6px" type="text" name="e_age" placeholder="ej. 8" required></td></tr>
			    <tr><td><h3>Escuela: </h3></td><td><input style="padding:6px" type="text" name="e_school" placeholder="Escuela" required></td></tr>
                <tr><td><h3>Generó: </h3></td><td><input style="padding:6px" type="text" name="e_gender" placeholder="M-F" required></td></tr>
                <tr><td><h3>Fecha de Nacimiento: </h3></td><td><input style="padding:6px" type="date" name="e_dof_B" required></td></tr>
                </table> 
                <table>
                <tr><td><h2 style="color:white">Informacion de Padres o Encargado</h2></td></tr>
                </table>  
                <table>  
                <tr><td><h3>Nombre de Padre ó Encargado: </h3><td><input style="padding:6px" type="text" name="P_name" 
                placeholder="nombre" required></td></tr>
                <tr><td><h3>Apellido Paterno: </h3></td><td><input style="padding:6px" type="text" name="P_a1" placeholder="" required></td></tr>
                <tr><td><h3>Apellido Materno: </h3></td><td><input style="padding:6px" type="text" name="P_a2" placeholder="" ></td></tr>
                <tr><td><h3>Grado escolaridad de padre: </h3><td><input style="padding:6px" type="text" name="P_degree" 
                placeholder="Grado Asociado" required></td></tr>
                <tr><td><h3>Nombre de Madre ó Encargada: </h3><td><input style="padding:6px" type="text" name="M_name" 
                placeholder="nombre"></td></tr>
                <tr><td><h3>Apellido Paterno: </h3></td><td><input style="padding:6px" type="text" name="M_a1" placeholder=""></td></tr>
                <tr><td><h3>Apellido Materno: </h3></td><td><input style="padding:6px" type="text" name="M_a2" placeholder="" ></td></tr>
                <tr><td><h3>Grado escolaridad de madre: </h3><td><input style="padding:6px" type="text" name="M_degree" 
                placeholder="Grado Asociado"></td></tr>
                </table>
                <table> 
                <h2 style="color:white">Informacion Adicional</h2>
                <tr><td><h3>Dirr. Postal: </h3>
                <td><input style="padding:6px" type="text" name="postal" placeholder="name" required></td></tr>
                <tr><td><h3>Dirr. Física: </h3></td>
                <td><input style="padding:6px" type="text" name="direction" placeholder="age" required></td></tr>
                <tr><td><h3>Días de Servicio: </h3></td>
                <td><select style="padding:6px; border-radius:3px" name="dias" require>
                <option>Seleccionar los dias para las clases</option>
                <option value='L-V'>Lunes a Viernes</option>
                <option value='M-J'>Martes y Jueves</option>
                <option value='M&Mi'>Lunes y Miércoles</option>
                <option value='L-Mi'>Lunes a Miércoles</option>
                </select></td></tr>
                <tr><td><h3>Forma de Aprender: </h3></td>
                <td><select style="padding:6px; border-radius:3px" name="aprendis">
                <option>Seleccionar los metodos que mejor aprende el estudiante</option>
                <option value='visual'>Visual(dibujos)</option>
                <option value='oral'>Oral(leyendo)</option>
                <option value='audicion'>Auditivo</option>
                <option value='escribir'>Escribiendo</option>    
                </select></td></tr>
                <tr><td><h3>Tel. para Emergencia: </h3></td>
                <td><input style="padding:6px" type="text" name="emg_tel" placeholder="000-000-0000" required></td></tr>
                <tr><td><h3>Plan Médico: </h3></td>
                <td><input style="padding:6px" type="file" name="plan_m" required></td></tr>
                <tr><td><h3>Padecimiento de enfermedad: </h3></td></tr>
                </table>
                <table>
                <tr><td style="padding:16px"><textarea name="padecimiento" placeholder="None"></textarea></td></tr>
                </table>
                <br>
                <input class="button_sub" style="margin-left:10px" type="submit" name="process" value="Procesar">
                
                </form>
                <?php }
                    if(isset($_SESSION['admin'])){
                        print "<h3>Tienes que ser un usario para solicitar matrícula, </h3>
                    <p>&nbsp;&nbsp;&nbsp;<a href='logout.php?p=index.php' class='aL'>Logout</a></p>";
                        
                    }
                    ?>
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
    
</html>