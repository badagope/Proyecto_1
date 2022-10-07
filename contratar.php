<?php

include_once('db.php');
$conectar=conn();

$id = $_GET['ID'];
$consulta = "SELECT * FROM info_personal where id_empleado='$id'";
$query = mysqli_query($conectar,$consulta);
$row = mysqli_fetch_assoc($query);

$nombre= $row["nombre"];

echo "<script> alert('Gracias por confiar en $nombre! Pronto se pondrá en contacto contigo.');window.location= 'bienvenida.php' </script>";
?>