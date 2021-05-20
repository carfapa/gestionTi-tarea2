<?php
    if(isset($_POST['enviar'])){
        if(empty($nombre)){
            echo "<p class='error'>* Agrega tu nombre</p>";
        }else{
            if(strlen($nombre)>15){
                echo "<p class='error'>* El nobre es muy largo</p>";
            }
        }
        if(empty($apellido)){
            echo "<p class='error'>* Agrega tu apellido</p>";
        }else{
            if(!strlen($apellido)>15){
                echo "<p class='error'>* El apellido es muy largo</p>";
            }
        }
        if(empty($correo)){
            echo "<p class='error'>* Agrega tu correo</p>";
        }else{
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'>* El correo es incorrecto</p>";
            }
        }
        if(empty($motivo)){
            echo "<p class='error'>* Agrega un motivo</p>";
        }
    }
?>