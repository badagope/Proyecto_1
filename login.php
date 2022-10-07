<?php

include_once('db.php');

$user1=$_POST['txtuser'];
$clave1=$_POST['txtclave'];


$conectar=conn();
$consulta="SELECT * FROM info_usuario WHERE user ='".$user1."' and clave = '".$clave1."'";
$query = mysqli_query($conectar,$consulta);
$nr = mysqli_fetch_array($query); 

    if ($nr['rol']==1)
    {   
       
        header("Location: bienvenida_admin.php");
        
    }else if ($nr['rol']==2)
    {
      
            header("Location: bienvenida.php");
 
    }
    
    else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.php' </script>";

	}

    
        


?>