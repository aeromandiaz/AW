
<head>
<title>Perfil Cliente</title>
	<link rel="stylesheet" href="css/perfil_cli_view.css">
	
</head>

<body>
	<hr/>
		
		<div id="center">
				

				<div id="imagen">
				<?php
				echo "<form id='perfil' action='updateperfil.php' method='post'>",
				"<ul>",
				"<li><img src='/ProyectAW/media/".$_SESSION["ID_user"].".jpg'/></li></ul>";
				?>
				</div>
			
			
				<div id="descripcion">
				<?php
				echo
				"<ul>",
				"<li>".$infouser["user_name"]."</li>",
			    "<li>".$infouser["user_surname"]."</li>",
			    "<li>".$infouser["tel_number_user"]."</li>",
			    "<li>".$infouser["user_mail"]."</li>",
			    "<li>".$infouser["dir_user"]."</li>",
				?>
				</div>
		
				 <div id="zona">
                 <?php   
                 echo"<ul> <form> 
                    <select name="zone" disabled="disabled">";
                foreach($matrizzone as $register){
                    $flag = FALSE;
                    foreach($matrizzonechecked as $register2){
                        if ($register["ID"]==$register2["ID_types_food"]){
                            $flag = TRUE;
                        }
                    }
                    if ($flag){
                         echo " <option value='".$register["Name"]."' seleted="selected"/>".$register["Name"]."<br />";

                    } else {
                        echo " <option value='".$register["Name"]."' />".$register["Name"]."<br />";
                    }
                }
                echo "</select></form></ul>";
                ?>
                </div>
		</div>
		  
		<div id="footer">
			<?php
			"<li><a href='../templates/modify_perfil.php'>Modificar Perfil</a></li></ul>";
			?>
		</div> 
		
		
	
         
