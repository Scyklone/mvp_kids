<?php 
    require_once("functions/functions_MVP.php");
    $u_id = $_SESSION['u'];
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
                        

                    
                    ?>
                
                
                </div>
                <?php 
                        }
                        
                    
                    if(isset($_POST['complete'])){
                        //Child variables
                        $e_n = $_SESSION['e_n']; 
                        $ea1 = $_SESSION['e_ap1']; 
                        $ea2 = $_SESSION['e_ap2']; 
                        $grad = $_SESSION['grade']; 
                        $edad = $_SESSION['age'];
                        $esc = $_SESSION['e_sch']; 
                        $genero = $_SESSION['e_gend']; 
                        $f_n = $_SESSION['dof_B']; 
                        
                        //Parent variables
                        $p1_n = $_SESSION['parent_name1']; 
                        $p_a1 = $_SESSION['p1_a1']; 
                        $p_a2 = $_SESSION['p1_a2']; 
                        $p_grd = $_SESSION['grado_esc1']; 
                        //2nd Parent
                        $m1_n = $_SESSION['parent_name2']; 
                        $m_a1 = $_SESSION['p2_a1']; 
                        $m_a2 = $_SESSION['p2_a2']; 
                        $m_grd = $_SESSION['grado_esc2']; 

                        //Matricula variables
                        $dir = $_SESSION['dirr']; 
                        $post = $_SESSION['post']; 
                        $dias = $_SESSION['d']; 
                        $prg = $_SESSION['prog']; 
                        $e_t = $_SESSION['e_tel']; 
                        $doc = $_SESSION['medic']; 
                        $pad = $_SESSION['oth_symp']; 
                        $status = "pendiente";

                        $Parent_id = $_SESSION['pa_id'];
                        $student_id = $_SESSION['es_id'];
                        $u_mail = $_SESSION['u_email'];
              
              
              
              //
              
              
              
              
              
              //Matricula Query
              $mat_query = "INSERT INTO matricula (p_name, student_name, email, grade, dias_clases, programa, plan_medico, u_id, e_id, p_id,`status`)
              VALUES ('$p1_n','$e_n','$u_mail','$grad','$dias','$prg','$doc','$u_id','$student_id','$Parent_id','$status')";
              
              $m = mysqli_query($con, $mat_query);
                //$row_Ma=mysqli_fetch_array($m)
                if(mysqli_affected_rows($con) == 1)
                  print '<h3 style="color:white;">La matricula a sido insertado con éxito.</h3>';
                else
                  print '<p style="color:red;">No se pudo insertar la matricula porque:<br />' . mysqli_error($con) . '</p>';
              
              
              
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