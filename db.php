<?php

// Configuración necesaria para acceder a la data base.
function conn(){
    $hostname = "db4free.net";
    $usuariodb = "adminuwork";
    $passworddb ="3144872208";
    $dbname = "uworkdb";
   
    // Generando la conexión con el servidor
    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    
    return $conectar;
}
?>  