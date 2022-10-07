<?php 
  include_once('db.php');
	$conectar=conn();
	$sql="SELECT * from info_personal ip join servicios s on (ip.id_servicio = s.id_servicio) join ubicacion u on (ip.id_ubicacion = u.id_ubicacion)";
	$result=mysqli_query($conectar,$sql);

	
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uwork</title>
    <link rel="icon" type="image/png" href="logos/uw_logo8.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
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
          href="formulario_empleado.html"
          type="button"
          class="btn btn-primary navbar-btn"
          >Crear Empleado</a
        >
        <br>
        <a
          href="index.php"
          type="button"
          class="btn btn-primary navbar-btn"
          >Cerrar sesión</a
        >
      </ul>
    </nav>
    <h1>Empleados registrados</h1>

    <br>
      <table class="table table-dark">
        <tr>
          <td>Id</td>
          <td>Nombre</td>
          <td>Apellidos</td>
          <td>E-Mail</td>
          <td>Teléfono</td>
          <td>Experiencia (Años)</td>
          <td>Servicio</td>
          <td>Ciudad</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
        <tr>
        <?php while($mostrar=mysqli_fetch_array($result)){
          ?>
          <td><?php echo $mostrar['id_empleado'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo $mostrar['apellidos'] ?></td>
          <td><?php echo $mostrar['e_mail'] ?></td>
          <td><?php echo $mostrar['telefono'] ?></td>
          <td><?php echo $mostrar['experiencia_anual'] ?></td>
          <td><?php echo $mostrar['nombre_servicio'] ?></td>
          <td><?php echo $mostrar['ciudad'] ?></td>
          <td><a href="editar.php?ID=<?php echo $mostrar['id_empleado']; ?> " class="btn btn-primary">Editar</a></td>
          <td><a href="borrar.php?ID=<?php echo $mostrar['id_empleado']; ?> " class="btn btn-danger">Eliminar</a></td>
        </tr>
        <?php 
	        }
	      ?>
      </table>
  </body>
</html>
