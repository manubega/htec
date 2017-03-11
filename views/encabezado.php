<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/f22f712e94.css">
     
      <link rel="stylesheet" type="text/css" href="views/css/estilos.css">
 
    <title>HTEC</title> 
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="50">
     <!-- BARRA DE NAVEGACIÓN -->
       
          <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">
              <a class="navbar-brand" href="#" style="margin-right: 600px;"><h5>HEMISFERIO TECNOLÓGICO</h5></a>
              <ul class="nav navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#jumbotron">Tu Email<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#mapa">Mapa</a>
                </li>
              </ul> 
    </nav>   
     <!-- FIN DE LA BARRA DE NAVEGACIÓN -->

   <!-- INICIO DE JUMBOTRON -->
 
    <div class="jumbotron">
          <h1 class="display-3" id="jumbotron">¡Proyectos a tu medida!</h1>
          <p class="lead">La razón para que tu Empresa crezca</p>
          <hr class="m-y-2">
          <p>¿Deseas conocer más? ¡Suscríbete a nuestra lista de correo!</p>

          <!--FORMULARIO PARA DAR DE ALTA EL CORREO DEL USUARIO -->
         <form class="form-inline" method="POST" action="./controllers/email.php" enctype="multipart/form-data">
              <div class="form-group">
                <label class="sr-only" for="direccionEmail">Dirección de email</label>
                <div class="input-group">
                  <div class="input-group-addon">@</div>
                  <input type="email" class="form-control" name = "email" id="email" placeholder="Tu email">
                  
                </div>
              </div>
                <button type="submit" class="btn btn-primary">Suscríbete</button>
        </form>
        <!-- FIN DEL FORMULARIO PARA DAR DE ALTA EL CORREO DEL USUARIO -->

    </div>

    <!-- FIN DE JUMBOTRON -->