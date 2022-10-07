<?php

include_once('db.php');

$nombre1=$_POST['nombre1'];
$apellidos=$_POST['apellidos'];
$user=$_POST['user'];
$clave=$_POST['clave'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];




header("Location: index.php");

$conectar=conn();

$sql="INSERT INTO info_usuario (nombre_usuario,apellidos_usuario,user,clave,e_mail_usuario,telefono_usuario) 
VALUES ('$nombre1','$apellidos','$user','$clave', '$email','$telefono')";
$result = mysqli_query($conectar,$sql) or trigger_error("Query failed! SQL- Error: " . mysqli_error($conectar), E_USER_ERROR);
echo "$sql";


?>