<?php

include_once('db.php');

$nombre1=$_POST['nombre1'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$experiencia=$_POST['experiencia'];
$servicio=$_POST['idServicio'];
$ubicacion=$_POST['idUbicacion'];





header("Location: bienvenida_admin.php");

$conectar=conn();

$sql="INSERT INTO info_personal (nombre,apellidos,e_mail,telefono,experiencia_anual,id_servicio,id_ubicacion) 
VALUES ('$nombre1','$apellidos','$email','$telefono','$experiencia','$servicio','$ubicacion')";
$result = mysqli_query($conectar,$sql) or trigger_error("Query failed! SQL- Error: " . mysqli_error($conectar), E_USER_ERROR);
echo "$sql";


?>