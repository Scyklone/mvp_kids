<?php 
    require_once("functions/functions_MVP.php");
    
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
              echo "<a href='admin_index.php'>Editar Cuenta</a>";
            }	
            ?>
            </li>
            <!--<li><a href="#"></a></li>
            <li><a href="http://127.0.0.1:81/wordpress/pueblo/">Pueblo</a></li>
            <li><a href="http://127.0.0.1:81/wordpress/">CoroUPRA</a></li>
            <li><a href="lobocoop/public/index.html">Proyecto Final</a></li>-->
            <li style="padding-left:58em;">
            <?php 
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
		    }	?>
            </li>
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
                <?php if(isset($_SESSION['u'])){ 
                    if(isset($_GET['process'])){
                        //Child variables
                        $_SESSION['e_n'] = ($_GET['e_name']);
                        $_SESSION['e_ap1'] = ($_GET['e_a1']);
                        $_SESSION['e_ap2'] = ($_GET['e_a2']);
                        $_SESSION['grade'] = ($_GET['grade']);
                        $_SESSION['age'] = ($_GET['e_age']);
                        $_SESSION['e_sch'] = ($_GET['e_school']);
                        $_SESSION['e_gend'] = ($_GET['e_gender']);
                        $_SESSION['dof_B'] = ($_GET['e_dof_B']);
                        
                        //Parent variables
                        $_SESSION['parent_name1'] = ($_GET['P_name']);
                        $_SESSION['p1_a1'] = ($_GET['P_a1']);
                        $_SESSION['p1_a2'] = ($_GET['P_a2']);
                        $_SESSION['grado_esc1'] = ($_GET['P_degree']);
                        //2nd Parent
                        $_SESSION['parent_name2'] = ($_GET['M_name']);
                        $_SESSION['p2_a1'] = ($_GET['M_a1']);
                        $_SESSION['p2_a2'] = ($_GET['M_a2']);
                        $_SESSION['grado_esc2'] = ($_GET['M_degree']);

                        //Matricula variables
                        $_SESSION['dirr'] = ($_GET['direction']);
                        $_SESSION['post'] = ($_GET['postal']);
                        $_SESSION['d'] = ($_GET['dias']);
                        $_SESSION['prog'] = ($_GET['aprendis']);
                        $_SESSION['e_tel'] = ($_GET['emg_tel']);
                        $_SESSION['medic'] = ($_GET['plan_m']);
                        $_SESSION['oth_symp'] = ($_GET['padecimiento']);

                        //Parent variables
                        $p1_n = $_SESSION['parent_name1']; 
                        $p_a1 = $_SESSION['p1_a1']; 
                        $p_a2 = $_SESSION['p1_a2']; 
                        $p_grd = $_SESSION['grado_esc1']; 
                        $u_mail = $_SESSION['u_email'];
                        $e_t = $_SESSION['e_tel']; 
                        $dir = $_SESSION['dirr'];
                        $post = $_SESSION['post'];
                        //2nd Parent
                        $m1_n = $_SESSION['parent_name2']; 
                        $m_a1 = $_SESSION['p2_a1']; 
                        $m_a2 = $_SESSION['p2_a2']; 
                        $m_grd = $_SESSION['grado_esc2'];
                        
                        $prt_query = "INSERT INTO encargado (p_nombre, p_apellido1, p_apellido2, email, tel, grado_esc, p_dir_fis, p_postal)
                        VALUES ('$p1_n','$p_a1','$p_a2','$u_mail','$e_t','$p_grd','$dir','$post')";
                        $papa = mysqli_query($con, $prt_query);
                            
                        if($_GET['M_name']){
                            $prt2_query = "INSERT INTO encargado (p_nombre, p_apellido1, p_apellido2, email, tel, grado_esc, p_dir_fis, p_postal)
                            VALUES ('$m1_n','$m_a1','$m_a2','$u_mail','$e_t','$m_grd','$dir','$post')";
                            $mama = mysqli_query($con, $prt2_query);

                        }
                        
                        $p_query = "SELECT p_id FROM encargado WHERE email = '$u_mail' ORDER BY p_id DESC LIMIT 1";//Look Parent ID
                        if($pr = mysqli_query($con, $p_query)){
                        $rp = mysqli_fetch_array($pr);
                        $_SESSION['pa_id'] = $rp['p_id'];

                        
                        }

                    
                    ?>
                
                <div id="demo">
                <h3>Enter Payment Info</h3>
                    
                <form action="completacion.php" method="GET">
                <table>
                <tr>
					<td><h3>Card Name: </h3></td>
					<td><input style="padding:6px" type="text" name="card_name" placeholder="Name card" required /></td>
				</tr>
				<tr>
				    <td><h3>Card Number: </h3></td>
					<td><input style="padding:6px" type="text" name="card_num" placeholder="0000-0000-0000-0000" required /></td>
				</tr>
				<tr>
					<td><h3>Exp Date: </h3></td>
					<td><input style="padding:6px" type="date" name="exp_date" placeholder="01/2099" required /></td>
				</tr>
				<tr>
					<td><h3>Security Code: </h3></td>
					<td><input style="padding:6px" type="text" name="security_code" placeholder="001" required /></td>
				</tr>
                </table>
                <input class="button_sub" style="margin-left:10px" type="submit" name="finish" value="Pagar">
                </form>
                </div>
                <?php 
                        }
                        
                    
                    if(isset($_GET['finish'])){
                        

                    }
                    }
                    else{

                        print "<h3>You are currently not logged in our systems, please enter your account</h3>
                        <p>&nbsp;&nbsp;&nbsp;<a href='login.php' class='aL'>Log In</a></p>";
                    }
                    ?>
                </div>
            </div>
            
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
    function CLickME(){
        document.getElementById("demo").innerHTML = "Hello JavaScript!";
    }
</script>
</html>