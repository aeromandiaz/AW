


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
                "<li><img src='/aw/media/".$_SESSION["ID_user"].".jpg'/> <input type='file' value='/aw/media/".$_SESSION["ID_user"].".jpg'/>
                </li></ul>";
                ?>
                </div>
            
            
                <div id="descripcion">
                <?php
                echo "<form id='perfil' action='updateperfil.php' method='post'>",
                "<ul>",
                "<li><input name='name' type='text' size='50' value='".$infouser["user_name"]."' /></li>",
                "<li><input name='surname' type='text' size='50' value='".$infouser["user_surname"]."' /></li>",
                "<li><input name='telephone' type='text' size='50' value='".$infouser["tel_number_user"]."' /></li>",
                "<li><input name='email' type='text' size='50' value='".$infouser["user_mail"]."' /></li>",
                "<li><input name='direction' type='text' size='50' value='".$infouser["dir_user"]."' /></li></ul>";
                ?>
                </div>
        


                <div id="tipoComida">
                <?php  

                 echo"<ul> <form>",

                foreach($matriztypesfood as $register){

                    $flag = FALSE;

                    foreach($matriztypesfoodchecked as $register2){

                        if ($register["ID"]==$register2["ID_types_food"]){

                            $flag = TRUE;

                        }

                    }

                    if ($flag){

                        echo "<input type='checkbox' name='type".$register["Name"]."' value='".$register["Name"]."' checked/>".$register["Name"]."<br />";

                    } else {

                        echo "<input type='checkbox' name='type_rst' value='".$register["Name"]."' />".$register["Name"]."<br />";

                    }

                }

                echo "</form></ul>";
                ?>


               </div>

                 <div id="zona">
                 <?php   
                 echo"<ul> <form> 
                    <select name="zone" >";
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
            echo "</li><li><input type='submit' value='Modificar Perfil'/></li></ul>";
            ?>
        </div> 