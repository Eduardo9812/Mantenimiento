<?php

    if(!empty($_POST["btningresar"])){
        
        
        if(!empty($_POST["usuario"]) and !empty($_POST["password"])){
            $usuario =  $_POST["usuario"];
            $password =  $_POST["password"];
            $sql=$conexion->query(" select * from login where usuario= '$usuario' and clave= '$password' ");
            if ($datos=$sql->fetch_object()){
                header("location: inicio_barra.php ");
            }
            
           
        }else{

            echo "<div class='alert alert-danger'> acceso denegado</div>";    

        }   
        
         
}


?>