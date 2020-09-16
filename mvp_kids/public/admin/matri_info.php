<?php 
    require_once("functions/functions_MVP.php");
    $id = $_SESSION['admin'];
?>
<!DOCTYPE html>
<html>

    <title>MVP Kids Admin ✏️</title>
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
                padding-top: 7px;
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
            
            .button_sub{
                width: 275px;
                height: 35px;
                font-size: 18px;
                background-color: darkorange;
                color: black;
                border: 2px solid black;
                border-radius: 5px;
                
            
            }
            .button_sub:hover{
                background-color: #FAAC58;
                color: lightgray;
                border: 2px solid lightgray;
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
            table td{
                padding:20px;
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
                    echo "<a href='edit_admin.php?id=$id'>Editar Cuenta Admin</a>";
            }	
            ?></li>
            <li><a href="matriculas.php">Matrículas</a></li>
            
            <li style="padding-left:54em;">
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
            <?php if(isset($_GET['mc_id'])){
                $mc = $_GET['mc_id'];
                $complete = 'complete';
                $ma_query = "UPDATE matricula set `status`='$complete' WHERE  m_id = $mc";

                if(mysqli_query($con, $ma_query)){
                        print '<p>La información del usuario ha sido actualizada exitosamente</p>';
                        print '<a class="aL" href="admin_index.php"></a>';
                }
                else{	  
                    print '<p style="color:red;">No se pudo actualizar la información del 
                    usuario ya que ocurrió el error:<br />' . mysqli_error($con);
                }

                }
                ?>
            <div id="mat_container">
                <!--<div id="mat_nav">
                <p>Admin</p>
                </div>-->
                <div id="main_mat">
                <?php if(isset($_SESSION['admin'])){ ?>
                <h3>Matrícula Pendiente</h3>
                <table>
<?php if(isset($_GET['m_id'])){
    $m = $_GET['m_id'];
    $m_query = "SELECT * FROM matricula m, encargado p, estudiante e WHERE m.m_id = $m AND m.e_id = e.e_id AND m.p_id = p.p_id"; 
      $Mq = mysqli_query($con,$m_query);
      if(mysqli_num_rows($Mq) == 0){
            echo "Username is already in system, enter another Username";
                              //header("insertar_user.php");
      } 
      else{
            print "<tr>
                    <td align='left'><b style='color:orange'>Nombre de Cliente</b></td>
                    <td align='left'><b style='color:orange'>Nombre de Estudiante</b></td>
                    <td align='left'><b style='color:orange'>Programa</b></td>
                    <td align='left'><b style='color:orange'>Dias de Clases</b></td>
                    <td align='left'><b style='color:orange'>Status</b></td>
                    </tr>";
          while($row = mysqli_fetch_array($Mq)){
                print "<tr>
                       <td align='left'> ".$row['p_name']."  </td>
                       <td align='left'> ".$row['student_name']."  </td>
                       <td align='left'> ".$row['programa']." </td>
                       <td align='left'> ".$row['dias_clases']."  </td>
                       <td align='left'> ".$row['status']." </td>
                       </tr>
                       ";
                print "<h3>-----------------------------------------------------------------------</h3>";
                $_SESSION['verify'] = $row['status'];
          }
          if($_SESSION['verify'] == 'complete'){

          }
          else{
          print '</table><table>
          <form action="matri_info.php" method="GET">
          <td><input class="button_sub" type="submit" name="done" id="editar" value="Matricular" /></td>
		    <input type="hidden" name="mc_id" value="'.$_GET['m_id'].'" />
          </from>';
          }
      } 
?>
                
                </table>    
                <?php }}
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

</script>
</html>