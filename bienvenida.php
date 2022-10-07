<?php 
  include_once('db.php');
	$conectar=conn();
	$sql="SELECT * from info_personal ip join servicios s on (ip.id_servicio = s.id_servicio) join ubicacion u on (ip.id_ubicacion = u.id_ubicacion)";
	$result=mysqli_query($conectar,$sql);

	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uwork</title>
    <link rel="icon"type="image/png" href="logos/uw_logo8.png">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <nav class="navbar navbar-default navbar-dark bg-dark">
        <ul class="navbar nav">
          <li class="nav-item">
              <img src="logos/Uwork.png" width="360" height="129">
              <h1 class="text text-white"><i>¿Qué necesitas hoy? </i></h1>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          
        <a
          href="index.php"
          type="button"
          class="btn btn-primary navbar-btn"
          >Cerrar sesión</a>
        </ul>
      </nav>
    
    
    <br>
    <?php while($mostrar=mysqli_fetch_array($result)){
          ?>
    
    <div class="container">     
        
        <div class="row">        
            <div class="col-md">
                <div class="card text-center">                    
                    <div class="card-body">
                    <img src="logos/uw_logo<?php echo $mostrar['id_servicio'] ?>.png" width="100" height="100" alt="<?php echo $mostrar['nombre_servicio'] ?>">
                        <h4 class="card-title"><h1><?php echo $mostrar['nombre'] ?> <?php echo $mostrar['apellidos'] ?></h1></h4>
                        <h4 class="card-title"><h2><?php echo $mostrar['nombre_servicio'] ?></h2></h4>
                        <p class="card-text"><h4 class="card-title"><h3><?php echo $mostrar['experiencia_anual'] ?> años de experiencia</h3></h4></p>
                        <span class="material-symbols-outlined">location_on</span>
                        <h4 class="card-text"><?php echo $mostrar['barrio'] ?>, <?php echo $mostrar['ciudad'] ?> (<?php echo $mostrar['depto'] ?>)</h4>
                        <br>
                        <a href="contratar.php?ID=<?php echo $mostrar['id_empleado']; ?> " class="btn btn-primary">Contratar!</a>
                        
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <br>
    <?php 
	        }
	      ?>
</body>
</html>