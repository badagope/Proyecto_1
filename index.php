<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uwork | Acceder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
    <link rel="icon"type="image/png" href="logos/uw_logo8.png">
</head>
<body>
    <nav class="navbar navbar-default navbar-dark bg-dark">
        <ul class="navbar nav">
          <li class="nav-item">
              <img src="logos/Uwork.png" width="360" height="129">
          </li>
          
        </ul>
        
      </nav>
    <div class="container">
        <form action="login.php" method="post">
            
            <div class="mb-3 ">
                <label for="usuario" class="col-sm-2 col-form-label">Ingrese su usuario:</label>
                <div class="col-sm-10">
                <input type="user" name="txtuser" id="user" class="form-control">
                </div> 
            </div>  
            <div class="mb-3 ">
                <label for="inputPassword" class="col-sm-2 col-form-label">Ingrese su clave</label>
                <div class="col-sm-10">
                  <input type="password" name="txtclave" class="form-control" id="clave">
                  
                </div>
              </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" >Aceptar </button>
                
            </div>
            <h6>No tienes usuario?,<a href="formulario.html" type="button" class="btn btn-link">Registrate</a></h4>

        </form>
    </div>
   
</body>
</html>