<?php

include_once('db.php');
$conectar=conn();

$id = $_GET['ID'];
$consulta = "SELECT * FROM info_personal where id_empleado='$id'";
$query = mysqli_query($conectar,$consulta);
$row = mysqli_fetch_assoc($query); 
        
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uwork | Editar empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
    <link rel="icon" type="image/png" href="logos/uw_logo8.png" />    
    <script language="javascript" type="text/javascript">
    function windowClose() {
    window.open('','_parent','');
    window.close();
    }
    </script>

  </head>
<?php
$status = "";
if(isset($_POST["enviar"]))
{
$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$e_mail= $_POST["e_mail"];
$telefono= $_POST["telefono"];
$experiencia_anual= $_POST["experiencia_anual"];
$id_servicio= $_POST["id_servicio"];
$id_ubicacion= $_POST["id_ubicacion"];
$id_empleado= $_POST["id_empleado"];
  
  
$update = 'UPDATE info_personal SET

nombre=TRIM("'.$nombre.'"),
apellidos=TRIM("'.$apellidos.'"),      
e_mail=TRIM("'.$e_mail.'"),
telefono=TRIM("'.$telefono.'"),
experiencia_anual=TRIM("'.$experiencia_anual.'"),
id_servicio=TRIM("'.$id_servicio.'"),
id_ubicacion=TRIM("'.$id_ubicacion.'")
      
WHERE id_empleado=TRIM('.$id_empleado.')';
  
  
if ($conectar->query($update) === TRUE) 
{
echo '<script type="text/javascript">'; 
echo 'alert("Edición correcta");'; 
echo 'window.location = "bienvenida_admin.php";';
echo '</script>';
 
}
else
{
 
echo '<script type="text/javascript">'; 
echo 'alert("Error. Verifique el diligenciamiento de los datos.");'; 
echo 'window.location = "javascript:history.back(1)";';
echo '</script>';
}
 
}

else {
 
?>
  
  <body>
    <nav class="navbar navbar-default navbar-dark bg-dark">
      <ul class="navbar nav">
        <li class="nav-item">
          <img src="logos/Uwork.png" width="360" height="129" />
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <br />
        <br />
        <a
          href="bienvenida_admin.php"
          type="button"
          class="btn btn-primary navbar-btn"
          >Regresar</a
        >
      </ul>
    </nav>
    <h1>Edición de empleados</h1>
<div class="container">
    <form id="form_18653"  method="post" action="">
    <br>
    <ul >
      
      
    <input id="id_empleado" name="id_empleado"  class="form-control" type="hidden" maxlength="255" value="<?php echo $row['id_empleado'];?>"/> 

    <div  class="col-auto">	
      
      <label class="form-label" for="nombre">Nombre: </label>
      <div class="col-md-3">
      <input id="nombre" name="nombre" class="form-control" type="text" maxlength="255" value="<?php echo $row['nombre'];?>"/> 
      </div> 
      
    </div>
    <br>
  <div  class="col-auto">    
    
    <label class="form-label" for="apellidos">Apellidos: </label>
    <div class="col-md-3">
    <input id="apellidos" name="apellidos" class="form-control" type="text" maxlength="255" value="<?php echo $row['apellidos'];?>"/> 
    </div> 
    		
  </div>
  <br>
  <div  class="col-auto">  
    
    <label class="form-label" for="e_mail">E-mail: </label>
    <div class="col-md-3">
    <input id="e_mail" name="e_mail" class="form-control" type="text" maxlength="255" value="<?php echo $row['e_mail'];?>"/> 
    </div> 
    	
  </div>
  <br>
  <div  class="col-auto">  
    
    <label class="form-label" for="telefono">Teléfono: </label>
    <div class="col-md-3">
    <input id="telefono" name="telefono" class="form-control" type="text" maxlength="255" value="<?php echo $row['telefono'];?>"/> 
    </div> 
    	
  </div>
  <br>
  <div  class="col-auto">  
    
    <label class="form-label" for="experiencia_anual">Experiencia (Años): </label>
    <div class="col-md-3">
    <input id="experiencia_anual" name="experiencia_anual" class="form-control" type="text" maxlength="255" value="<?php echo $row['experiencia_anual'];?>"/> 
    </div> 
    
  </div>
  <br>
  <div  class="col-auto">  	
    
    <label class="form-label" for="id_servicio">Id del Servicio: </label>
    <div class="col-md-3">
    <input id="id_servicio" name="id_servicio" class="form-control" type="text" maxlength="255" value="<?php echo $row['id_servicio'];?>"/> 
    </div> 
    
  </div>
  <br>
  <div  class="col-auto">  	
    <label class="form-label" for="id_ubicacion">Id de la Ubicación: </label>
    <div class="col-md-3">
    <input id="id_ubicacion" name="id_ubicacion" class="form-control" type="text" maxlength="255" value="<?php echo $row['id_ubicacion'];?>"/> 
    </div> 
    
  </div>
  <br>	
			
	<div  class="col-auto">  

    <input type="hidden" name="form_id" value="18653" />
    <input id="saveForm" class="btn btn-primary" type="submit" name="enviar" value="Editar" />
    <input class="btn btn-primary" type="submit" onclick="javascript: form.action='bienvenida_admin.php';" value="Retornar" />      
  </div>                      
	</ul>
	</form>	
		
    <?php } ?>
      
	</div>
      
  </body>
</html>