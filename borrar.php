<?php

include_once('db.php');
$conectar=conn();

$id = $_GET['ID'];
$consulta = "DELETE FROM info_personal where id_empleado='$id'";
$query = mysqli_query($conectar,$consulta);


echo "<script> alert('Registro borrado.');window.location= 'bienvenida_admin.php' </script>";
?>