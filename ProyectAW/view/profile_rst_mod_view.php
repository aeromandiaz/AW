<!--PROFILE RST MOD VIEW-->
    <li><input type="text" name='name_rst' type='text' value='<?php echo $inforst["name_rst"]?>' /></li>
    <li><textarea name='description' type='text' size='50' ><?php echo $inforst["dsc_rst"]?></textarea></li>
<?php
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
    ?>
</div>
