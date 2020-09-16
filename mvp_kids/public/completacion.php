<?php 
    require_once("functions/functions_MVP.php");
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
                <p>Matrícula</p>
                </div>
                <div id="main_mat">
                <?php if(!isset($_SESSION['u']) && !isset($_SESSION['admin'])){ 
                    print "<h3>You are currently not logged in our systems, please enter your account</h3>
                    <p>&nbsp;&nbsp;&nbsp;<a href='login.php' class='aL'>Log In</a></p>";
                    }
                    if(isset($_SESSION['u'])){
                      
                      
                      if(isset($_GET['finish'])){
                      if(isset($_GET['card_name'])){
                      $c_name = $_GET['card_name'];
                      $c_num = $_GET['card_num'];
                      $exp_date = $_GET['exp_date'];
                      $code = $_GET['security_code'];
                      $pay_query = "INSERT INTO payment_method (u_ID, card_name, card_number, exp_date, security_code)
                                  VALUES ('$u_id','$c_name','$c_num','$exp_date','$code')";
                      $pay = mysqli_query($con,$pay_query);
                      $p_query = "SELECT * FROM payment WHERE u_ID = $u_id";
                      $p = mysqli_query($con,$p_query);

                      $e_n = $_SESSION['e_n']; 
                      $ea1 = $_SESSION['e_ap1']; 
                      $ea2 = $_SESSION['e_ap2']; 
                      $grad = $_SESSION['grade']; 
                      $edad = $_SESSION['age'];
                      $esc = $_SESSION['e_sch']; 
                      $genero = $_SESSION['e_gend']; 
                      $f_n = $_SESSION['dof_B'];
                        $est_query = "INSERT INTO estudiante (e_nombre, e_apellido1, e_apellido2, genero, grado, edad, f_nacimiento, escuela)
                        VALUES ('$e_n','$ea1','$ea2','$genero','$grad','$edad','$f_n','$esc')";
                        $e = mysqli_query($con, $est_query);



                        $e_query = "SELECT e_id FROM estudiante WHERE e_apellido1 = '$ea1' ORDER BY e_id DESC LIMIT 1";//Look Student ID
                        if($er = mysqli_query($con, $e_query)){
                            $row_E = mysqli_fetch_array($er);
                            $_SESSION['es_id'] = $row_E['e_id']; 
                            

                        }
                      

                        ?>
                <h2 style="color:white">Student Info</h2>
                
                <form action="thank_you.php" method="POST">
                <table>
                <tr><td><h3>Nombre: </h3><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['e_n'].""; ?></td></tr>
                <tr><td><h3>Apellido Paterno: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['e_ap1'].""; ?></td></tr>
                <tr><td><h3>Apellido Materno: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['e_ap2'].""; ?></td></tr>
			          <tr><td><h3>Grado: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['grade'].""; ?></td></tr>
                <tr><td><h3>Edad: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['age'].""; ?></td></tr>
			          <tr><td><h3>Escuela: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['e_sch'].""; ?></td></tr>
                <tr><td><h3>Generó: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['e_gend'].""; ?></td></tr>
                <tr><td><h3>Fecha de Nacimiento: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['dof_B'].""; ?></td></tr>
                </table> 
                <table>
                <tr><td><h2 style="color:white">Información de Padres o Encargado</h2></td></tr>
                </table>  
                <table>  
                <tr><td><h3>Nombre de Padre ó Encargado: </h3><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['parent_name1'].""; ?></td></tr>
                <tr><td><h3>Apellido Paterno: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['p1_a1'].""; ?></td></tr>
                <tr><td><h3>Apellido Materno: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['p1_a2'].""; ?></td></tr>
                <tr><td><h3>Grado escolaridad de padre: </h3><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['grado_esc1'].""; ?></td></tr>
                <tr><td><h3>Nombre de Madre ó Encargada: </h3><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['parent_name2'].""; ?></td></tr>
                <tr><td><h3>Apellido Paterno: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['p2_a1'].""; ?></td></tr>
                <tr><td><h3>Apellido Materno: </h3></td><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['p2_a2'].""; ?></td></tr>
                <tr><td><h3>Grado escolaridad de madre: </h3><td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['grado_esc2'].""; ?></td></tr>
                </table>
                <table> 
                <h2 style="color:white">Información Adicional</h2>
                <tr><td><h3>Dirr. Postal: </h3>
                <td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['dirr'].""; ?></td></tr>
                <tr><td><h3>Dirr. Física: </h3></td>
                <td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['post'].""; ?></td></tr>
                <tr><td><h3>Días de Servicio: </h3></td>
                <td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['d'].""; ?></td></tr>
                <tr><td><h3>Forma de Aprender: </h3></td>
                <td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['prog'].""; ?></td></tr>
                <tr><td><h3>Tel. para Emergencia: </h3></td>
                <td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['e_tel'].""; ?></td></tr>
                <tr><td><h3>Plan Médico: </h3></td>
                <td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['medic'].""; ?></td></tr>
                <tr><td><h3>Padecimiento de enfermedad: </h3></td>
                <td style="padding-top:13px; padding-left:30px"><?php echo "".$_SESSION['oth_symp'].""; ?></td></tr>
                <tr><td></td>
                <td></td></tr><?php if(isset($_GET['card_name'])){?>
                <tr><td><h3>Tarjeta: <b style="color:orange"><?php echo "".$_GET['card_name'].""; ?></b></h3></td><?php }?>
                <td>Precio Completo: <b>$215.00</b></td></tr>
                </table>
                <br>
                <input class="button_sub" style="margin-left:10px" type="submit" name="complete" value="Finish">
                </form>
                <?php 
                      }
                    }
                    }
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